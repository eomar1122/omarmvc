<?php
class Pages extends Controller {
  public function __construct() {

  }

  public function index() {
    echo 'Hello World';
  }

  public function about($id) {
    echo $id;
  }
}