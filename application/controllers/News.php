<?php
class News extends CI_Controller{

  public function index(){
    $data['news'] = $this->news_model->get_news();
    $data['title'] = 'News Archives';

    $this->load->view('templates/header', $data);
    $this->load->view('news/index', $data);
    $this->load->view('templates/footer', $data);
  }

  public function view($slug = NULL){
    $data['news_item'] = $this->news_model->get_news($slug);

    if(empty($data['news_item'])){
      show_404();
    }

    $data['title'] = $data['news_item']['title'];
    $this->load->view('templates/header', $data);
    $this->load->view('news/view', $data);
    $this->load->view('templates/footer', $data);
  }

  public function create(){
    $this->load->helper('form');

    $data['title'] = 'Create news Item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if($this->form_validation->run() === FALSE){
      $this->load->view('templates/header', $data);
      $this->load->view('news/create', $data);
      $this->load->view('templates/footer');
    }
    else {
      $this->news_model->set_news();
      $this->load->view('news/success');
    }
  }
} ?>
