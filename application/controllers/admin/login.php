<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
        $this->load->library('form_validation');
        $this->load->view('admin/login');
        
    }
        public function authenticate(){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        
        if ($this->form_validation->run() == true){
            //Success 
            $username =$this->input->post('username');
            $admin=$this->Admin_model->getByUsername($username);
            if (!empty($admin)){
                $password=$this->input->post('password');
                if (password_verify($password ,$admin['password'])==true){
                    $adminArray['admin_id']=$admin['id'];
                    $adminArray['username']=$admin['username'];
                    $adminArray['password']=$admin['password'];
                    $this->session->set_userdata('admin',$adminArray);
                        redirect(base_url().'admin/home/index');
                }

            }else {
                $this->session->set_flashdata('msg','username or password incorrect');
                    redirect(base_url().'admin/login/index');

            }
        }
        else{
            //From Error
            $this->load->view('admin/login');
        }
    }
   
    function logout(){
        $this->session->unset_userdata('admin');
        redirect (base_url().'admin/login/index');
    }
}

?>  