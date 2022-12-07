<?php
session_start();

  require_once '_shared.php';
  require_once 'storage.php';
  require_once 'switcher.php';
  require_once 'customers.php';
  require_once 'meme.php';
  require_once 'orders.php';
  require_once 'tag.php';

  /**
   * RUN API HERE
   */

  set_faked_data();
  runApi();

  function decodePath() {
    if(!empty($_GET['path'])) {
      $path_parts = $_GET['path'];
    } else {
      $path_parts = false;
    }
    
    if(empty($path_parts)) {
      return false;
    }

    if(strrpos($path_parts, '/') === false) {
      $path_parts .= '/';
    }

    $path_parts = explode('/', $path_parts);
    
    if(empty($path_parts[count($path_parts) - 1])) {
      array_pop($path_parts);
    }
    
    return $path_parts;
  }

  function runApi () {
    /*
    * 1st param: method
    * 2nd param: detailed action
    * 3rd param: props
    */
    
    $data = file_get_contents("php://input");
    $path = decodePath();
    
    $http_method = $_SERVER["REQUEST_METHOD"];
    $method = isset($path[0]) && !empty($path[0]) ? $path[0] : null;
    $end_point = isset($path[1]) && !empty($path[1]) ? $path[1] : null;
    $prop = isset($path[2]) && !empty($path[2]) ? $path[2] : null;
    
    if ($data !=null){
     // $num= json_decode($data, true);
    $data = sizeof(json_decode($data,true)) ? $data : null;
  }
    $sheduler = new Switcher();
    $func_name = $sheduler->get_function($method, $http_method, $end_point);
    
    if(!$func_name) {
      send_results("Method not found", 404);
      return;
    }
    
    switch ($method) {

      //Declaracion de nuevos endpoints

      case "customers":
        
        $customer_functions = new Customer($prop, $data);
        $func_res = call_user_func( array($customer_functions, $func_name) );
        send_results($func_res);
        break;  

      case "orders":
        $orders_functions = new Orders($prop, $data);
        $func_res = call_user_func( array($orders_functions, $func_name) );
        send_results($func_res);
        break;

      case "meme":
        $meme_functions = new meme($prop, $data);
        $func_res = call_user_func( array($meme_functions, $func_name) );
        send_results($func_res);
        break;

      case "tag":
        $tag_functions = new tag($prop, $data);
        $func_res = call_user_func( array($tag_functions, $func_name) );
        send_results($func_res);
        break;

      default:
        send_results("", 404);
    }

  }


?>