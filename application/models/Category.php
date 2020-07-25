<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Model
{
    public function getCategory()
    {
        $selectQuery = "SELECT * FROM category";
        $categories = [];
        $query = $this->db->query($selectQuery);
        foreach ($query->result() as $row) {
            $categories += [
                $row->id => [
                    'id' => $row->id,
                    'category' => $row->category
                ]
            ];
        }
        return $categories;
        
    }

}