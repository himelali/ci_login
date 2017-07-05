<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct() {
        parent::__construct();
        if($this->isLogged("isAdminLogged") && $this->isLogged("isLogged")) {
            redirect(site_url("dashboard"));
        }
        $this->load->model("user_model", "USER", TRUE);
    }

    public function index() {
		$this->data['title'] = "Login Panel";
		$this->load->view("login", $this->data);
    }

    public function check() {
        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|required|min_length[4]|max_length[31]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[16]');
        if($this->form_validation->run()) {
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            $user = $this->USER->user_check($username, $password);
            if($user) {
                $this->session->set_userdata("isLogged", TRUE);
                $this->session->set_userdata("isAdminLogged", TRUE);
                $this->session->set_userdata("userId", $user->user_id);
                $this->session->set_flashdata("success", "Successfully login.");
                redirect(site_url("dashboard"));
            }
            $this->session->set_flashdata("error", "Invalid Username or Password.");
            redirect(site_url("login"));
        }
        $this->session->set_flashdata("error", validation_errors());
        redirect(site_url("login"));
    }

}