<?php

    class First_controller extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
        }
        
            public function index(){
                $this->load->view('Home/home');
               $this->load->view('Dashboard/home_page_section_1');
               $this->load->view('Footer/footer');
                
            }
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

