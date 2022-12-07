<?php

/**
 * CUSTOMER ORDERS
 */

require_once '_shared.php';

class Customer extends Methods {
  
  public function get_all_names () {
    return array_map(function ($customer) {
      return $customer["name"];
    }, $_SESSION["customers_data"]);
  }

  public function get_customers () {
    return $_SESSION["customers_data"];
  }

  public function get_single_customer () {
    foreach($_SESSION["customers_data"] as $customer) {
      if($customer["index"] == $this->prop) {
        return $customer;
      }
    }

    return null;
  }

  public function get_all_emails () {
    return array_map(function ($customer) {
      return $customer["email"];
    }, $_SESSION["customers_data"]);
  }

  public function create_new_customer () {
    array_push($_SESSION["customers_data"], json_decode($this->data, true));
    return $_SESSION["customers_data"];
  }
}

?>