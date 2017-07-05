<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->isLogged("isAdminLogged") || !$this->isLogged("isLogged")) {
            redirect(site_url("login"));
        }
    }

    public function logout() {
        parent::signOut();
    }

    public function index() {
        $this->data['title'] = "Dashboard";
        $this->load->view("dashboard/index", $this->data);
    }

}