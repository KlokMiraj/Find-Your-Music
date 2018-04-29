<?php



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Login extends CI_Controller {

    public function index() {
        $this->load->view('Home/home');
        $this->load->view('Dashboard/login_card_section');
        $this->load->view('Footer/footer');
    }
    
    public function login_check(){
        
        echo 'ayo ';
        die ;
        
        if($this->input->post()){
            $data = $this->input->post();   
            
           $user= $this->Database->get_row('user_login', $data);
           
               if($user){
                   $this->session->set_userdata($user->user_name);
                   $this->load->view('Dashboard/Dashboard' ,$user);
                   
                   echo 'aayo';
               }
                
        }
    }
}