<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_con extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->model('unews_model');
        $this->load->view('template/head');
        $this->load->view('index');
        $data['unews']=$this->unews_model->sel_grid_data();
        //  $this->load->view('index',$data);
         $this->load->view('template/scripter');

    }
}
?>