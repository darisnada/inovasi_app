<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat_m extends CI_Model {

    protected $table = 'users';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->where('role', 'MASYARAKAT')->get($this->table)->result();
    }
	
    public function store()
    {
        $data = array(
            'identity'          => htmlspecialchars($this->input->post('identity'), true),
            'username'          => htmlspecialchars($this->input->post('identity'), true),
            'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'name'              => htmlspecialchars($this->input->post('name'), true),
            'phone'             => htmlspecialchars($this->input->post('phone'), true),
            'email'             => htmlspecialchars($this->input->post('email'), true),
            'address'           => htmlspecialchars($this->input->post('address'), true),
            'role'              => htmlspecialchars('MASYARAKAT', true),
            'is_active'         => 1,
            'city_id'           => 340,
            'prov_id'           => 24,
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
            'identity'          => htmlspecialchars($this->input->post('identity'), true),
            'username'          => htmlspecialchars($this->input->post('username'), true),
            'password'          => password_hash($this->input->post('username'), PASSWORD_DEFAULT),
            'name'              => htmlspecialchars($this->input->post('name'), true),
            'phone'             => htmlspecialchars($this->input->post('phone'), true),
            'email'             => htmlspecialchars($this->input->post('email'), true),
            'address'           => htmlspecialchars($this->input->post('address'), true),
            'role'              => htmlspecialchars('MASYARAKAT', true),
            'is_active'         => 1,
            'city_id'           => 340,
            'prov_id'           => 24,
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
 