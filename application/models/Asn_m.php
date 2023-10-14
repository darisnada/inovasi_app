<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asn_m extends CI_Model {

    protected $table = 'users';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->query("SELECT a.*, b.name as agency_name FROM users a, agencies b WHERE a.agency_id=b.id AND a.role='ASN'")->result();
    }
	
    public function store()
    {
        $data = array(
            'identity'          => htmlspecialchars($this->input->post('identity'), true),
            'username'          => htmlspecialchars($this->input->post('username'), true),
            'password'          => password_hash($this->input->post('username'), PASSWORD_DEFAULT),
            'name'              => htmlspecialchars($this->input->post('name'), true),
            'phone'             => htmlspecialchars($this->input->post('phone'), true),
            'email'             => htmlspecialchars($this->input->post('email'), true),
            'address'           => htmlspecialchars($this->input->post('address'), true),
            'role'              => htmlspecialchars('ASN', true),
            'is_active'         => 1,
            'city_id'           => 340,
            'prov_id'           => 24,
            'agency_id'          => htmlspecialchars($this->input->post('agency_id'), true),
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
            'role'              => htmlspecialchars('ASN', true),
            'is_active'         => 1,
            'city_id'           => 340,
            'prov_id'           => 24,
            'agency_id'          => htmlspecialchars($this->input->post('agency_id'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
 