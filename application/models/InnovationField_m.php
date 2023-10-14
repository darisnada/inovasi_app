<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InnovationField_m extends CI_Model {

    protected $table = 'innovation_fields';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->get($this->table)->result();
    }
	
    public function store()
    {
        $data = array(
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'slug'          => htmlspecialchars($this->input->post('slug'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'icon'          => htmlspecialchars($this->input->post('icon'), true),
        );
        return $this->db->insert($this->table, $data);
    }
    
    public function show($id)
    {
        $data = $this->db->get_where($this->table, ['id' => $id])->row();
        echo json_encode($data);
    }

    public function update($id)
    {
        $data = array(
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'slug'          => htmlspecialchars($this->input->post('slug'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'icon'          => htmlspecialchars($this->input->post('icon'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
 