<?php

class Switcher {
  public $methods_JSON = '
  {
    "customers": {
      "GET": {
        "default": "get_customers",
        "customer": "get_single_customer",
        "emails": "get_all_emails",
        "names": "get_all_names"
      },
      "PUT": {
        "default": "create_new_customer"
      }
    },
    "orders": {
      "GET": {
        "default": "get_orders"
      },
      "PUT": {
        "default": "create_new_order"
      }
    },
    "meme": {
      "GET": {
        "default": "obtener_memes"
      },
      "POST": {
        "default": "crear_meme"
      }
    },
    "tag":{
      "GET": {
        "default": "obtener_tags"
      },
      "POST": {
        "default": "crear_tag"
      }
    }
  }';

  public $methods = [];

  public function __construct () {
    $this->methods = json_decode($this->methods_JSON, true);
  }

  public function get_function ($method, $http_method, $end_point) {
    if(!$end_point) {
      $end_point = "default";
    }

    $method_item =      $this->find_in_array_by_key($this->methods, $method);
    $http_method_item = $this->find_in_array_by_key($method_item, $http_method);
    $function =         $this->find_in_array_by_key($http_method_item, $end_point);

    return $function;
  }

  private function find_in_array_by_key ($arr, $key) {
    $results = array_filter($arr, function ($item) use ($key) {
      return $item === $key;
    }, ARRAY_FILTER_USE_KEY);

    if(isset($results) && !empty($results) && count($results) === 1) {
      return $results[$key];
    } else {
      return [];
    }
  }
}

?>