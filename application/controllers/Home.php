<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once 'BaseController.php';

class Home extends BaseController
{

    public function index()
    {
        $this->load->model('Vacancy');
        $this->render->page = $this->getView(__CLASS__, __FUNCTION__);
        $this->render->items = $this->Vacancy->getVacancy();
        $this->render();
    }

    public function item($id, $category)
    {
        $this->load->model('Vacancy');
        $this->render->page = $this->getView(__CLASS__, __FUNCTION__);
        $this->render->items = $this->Vacancy->getFullVacancy($id);
        $this->render->items_category = $this->Vacancy->getByCategory($category);
        $this->render();
    }

    public function category(){
        $category = $this->input->post('category');
        $this->load->model('Vacancy');
        $this->render->items=$this->Vacancy->getByCategory($category);
        $this->render->page = $this->getView(__CLASS__, __FUNCTION__);
        $this->render();
    }
}
