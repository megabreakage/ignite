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
} ?>
