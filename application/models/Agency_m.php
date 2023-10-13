<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agency_m extends CI_Model
{

    protected $table = 'agencies';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->get($this->table)->result();
    }
    public function store()
    {
        $data = array(
            'name'    => htmlspecialchars($this->input->post('name'), true),
        );
        return $this->db->insert($this->table, $data);
    }
    public function show($id)
    {
        $result = $this->db->get_where($this->table, [$this->primary => $id])->row();
        echo json_encode($result);
    }

    public function update($id)
    {
        $data = array(
            'name'   => htmlspecialchars($this->input->post('name'), true)
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
