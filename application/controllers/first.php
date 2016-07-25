<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

function index()
	{
    $this->load->view('hello_vew');
		

    }
    
    
    function about(){
        $data['name']="Saqo";
        $data['surname']= "Harutyunyan";
        $data['age'] = 19;
        
        $this->load->view('about_vew',$data);
    }
    function articules (){
        $this->load->model('articules_model');
        $data['articules']= $this-> articules_model-> get_articules();
        $this->load->view('articles_views', $data);
        
        
    }
    function add_article(){
        $data['bide'] = "fifth";
        $data['text']  ="Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker inclu";
         $data['date'] =  "2016-07-10";
         $this->load->model('articules_model');
         $this->articules_model->add_article($data);
    }
    function edit_article(){
         $data['bide'] = "new ";
        $data['text']  ="Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker inclu";
         $data['date'] =  "2011-07-10";
         $this->load->model('articules_model');
         $this->articules_model->edit_article($data);
        
    }
   function del_article(){
       $this->load->model('articules_model');
       $this->articules_model->del_article();
   }
}
