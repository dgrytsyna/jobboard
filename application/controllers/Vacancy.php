<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once 'BaseController.php';

class Vacancy extends BaseController
{

    public function add()
    {
        $this->load->model('Category');
        $this->render->page = $this->getView(__CLASS__, __FUNCTION__);
        $this->render->categories = $this->Category->getCategory();
        $this->render();
    }

    public function save()
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = TRUE;
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['file_name']             = $_FILES['logo']['name'];

        $this->load->library('upload', $config);
        $this->render->page = $this->getView(__CLASS__, __FUNCTION__);
        $time = new DateTime('NOW');

        if (!$this->upload->do_upload('logo')) {
            $this->render->info = 'Cannot upload the image!';
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'company' => $this->input->post('company'),
                'category_id' => $this->input->post('category'),
                'type' => $this->input->post('type'),
                'date' => $time->format('Y-m-d'),
                'description' => $this->input->post('description'),
                'logo' => 'assets/img/' . $this->upload->data()['file_name']
            );
            $this->db->insert('vacancy', $data);
            $this->render->info = 'Add item to DB successfully!';

            $this->load->library('TelegramNotifier', $this->config->item('chats')['best-it-jobs'], 'notifyme');

            $this->notifyme->send(
                $data['name'].' - '.$data['company']. ' - ' .$data['type'] . ' - ' .$data['date']               
            );
        }

        $this->render();
    }
}
