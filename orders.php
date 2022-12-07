<?php

  /**
   * ORDERS
   */

  require_once '_shared.php';

  class Orders extends Methods {

    public function get_orders () {
      return $_SESSION["orders_data"];
    }

    public function create_new_order () {
      array_push($_SESSION["orders_data"], json_decode($this->data, true));
      return $_SESSION["orders_data"];
    }

  }

?>