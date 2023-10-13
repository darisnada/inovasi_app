<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    protected $table = 'users';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->get($this->table)->result();
    }
	
    public function store()
    {
        $kec = null;
        $desa = null;
        if($this->input->post('role') == 'VERIFIKATOR') {
            $kec = $this->input->post('nama_kec');
        }
        if($this->input->post('role') == 'DESA') {
            $resDesa = $this->db->get_where('desa', ['id' => $this->input->post('nama_desa')])->row();
            $kec = $resDesa->kec_id;
            $desa = $this->input->post('nama_desa');
        }
        
        $data = array(
            'username'          => htmlspecialchars($this->input->post('username'), true),
            'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_user'         => htmlspecialchars($this->input->post('nama_user'), true),
            'kec_id'            => $kec,
            'desa_id'           => $desa,
            'email'             => htmlspecialchars($this->input->post('email'), true),
            'role'              => htmlspecialchars($this->input->post('role'), true),
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
        $kec = null;
        $desa = null;
        if ($this->input->post('role') == 'VERIFIKATOR') {
            $kec = $this->input->post('nama_kec');
        }
        if ($this->input->post('role') == 'DESA') {
            $resDesa = $this->db->get_where('desa', ['id' => $this->input->post('nama_desa')])->row();
            $kec = $resDesa->kec_id;
            $desa = $this->input->post('nama_desa');
        }
        $data = array(
            'username'          => htmlspecialchars($this->input->post('username'), true),
            'password'          => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'nama_user'         => htmlspecialchars($this->input->post('nama_user'), true),
            'kec_id'            => $kec,
            'desa_id'           => $desa,
            'email'             => htmlspecialchars($this->input->post('email'), true),
            'role'              => htmlspecialchars($this->input->post('role'), true),
        );
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }
}
 