<?php
if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');
class main_con extends CI_Controller {
    public function index(){
        $this->load->helper('url');
        $this->load->view('template/head');
        $this->load->view('index');
        $this->db->load->model('unews_model');
        $data['unews']=$this->unews_model->sel_grid_data();
        $this->load->view('index',$data);
        $this->load->view('temp/indfooter');
        $this->load->view('temp/scripter');

    }
}
?>