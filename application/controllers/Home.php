<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Himel
 * Date: 08/06/2017
 * Time: 12:49 PM
 */
class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['title'] = "Home Page";
        $this->load->view("home", $this->data);
    }

}