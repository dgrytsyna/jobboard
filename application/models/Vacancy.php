<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vacancy extends CI_Model
{
    public function getVacancy()
    {
        $selectQuery = "SELECT vacancy.id as id,
        vacancy.name as name,
        vacancy.company as company,
        category.category as category,
        vacancy.type as type,
        vacancy.date as date,
        vacancy.logo as logo
         FROM vacancy LEFT JOIN category ON vacancy.category_id = category.id";
        $items = [];
        $query = $this->db->query($selectQuery);
        foreach ($query->result() as $row) {
            $items += [
                $row->id => [
                    'id' => $row->id,
                    'name' => $row->name,
                    'company' => $row->company,
                    'type' => $row->type,
                    'date' => $row->date,
                    'logo' => $row->logo,
                    'category' => $row->category
                ]
            ];
        }
        return $items;
    }

    public function getFullVacancy($id)
    {
        $selectQuery = "SELECT vacancy.id as id,
        vacancy.name as name,
        vacancy.company as company,
        category.category as category,
        vacancy.type as type,
        vacancy.date as date,
        vacancy.description as description,
        vacancy.logo as logo
         FROM vacancy LEFT JOIN category ON vacancy.category_id = category.id
         WHERE vacancy.id = " . $id;
        $items = [];
        $query = $this->db->query($selectQuery);
        foreach ($query->result() as $row) {
            $items = [
                $row->id => [
                    'id' => $row->id,
                    'name' => $row->name,
                    'company' => $row->company,
                    'category' => $row->category,
                    'type' => $row->type,
                    'date' => $row->date,
                    'description' => $row->description,
                    'logo' => $row->logo
                ]
            ];
        }
        return $items;
    }

    public function getByCategory($category)
    {
        $selectquery = "SELECT vacancy.id as id,
        vacancy.name as name,
        vacancy.company as company,
        category.category as category,
        vacancy.type as type,
        vacancy.date as date,
        vacancy.logo as logo
        FROM vacancy LEFT JOIN category ON vacancy.category_id = category.id WHERE category.category = '" . $category . "'";
        $items = [];
        $query = $this->db->query($selectquery);
        foreach ($query->result() as $row) {
            $items += [
                $row->id => [
                    'id' => $row->id,
                    'name' => $row->name,
                    'company' => $row->company,
                    'type' => $row->type,
                    'date' => $row->date,
                    'logo' => $row->logo,
                    'category' => $row->category
                ]
            ];
        }
        return $items;
    }
}
