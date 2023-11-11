<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_m extends CI_Model {

    protected $table = 'videos';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->query("SELECT a.* FROM videos a")->result();
    }
    public function getForHome()
    {
        return $this->db->query("SELECT a.* FROM videos a ORDER BY a.id DESC LIMIT 5")->result();
    }
	
    public function store()
    {
        $dataimage = null;
        
        $data = array(
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'link'   => htmlspecialchars($this->input->post('link'), true),
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
            'link'   => htmlspecialchars($this->input->post('link'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
 