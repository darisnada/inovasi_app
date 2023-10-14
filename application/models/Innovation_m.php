<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Innovation_m extends CI_Model
{

    protected $table = 'innovations';
    protected $primary = 'id';

    public function get($agency_id = '')
    {
        $filter = '';
        if($agency_id != ''){
            $filter = "AND a.agency_id=$agency_id";
        }
        return $this->db->query("SELECT a.*, b.name as innovation_field_name FROM innovations a, innovation_fields b WHERE a.innovation_field_id=b.id $filter")->result();
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
        $result = $this->db->query("SELECT a.*, b.name as name_user, b.identity as identity_user, b.address as address_user FROM innovations a, users b WHERE a.user_id=b.id AND a.id=$id")->row();
        $inno_field = $this->db->query("SELECT * FROM innovation_fields WHERE id=".$result->innovation_field_id)->row();
        $agency = [
            'agency_name' => null
        ];
        if(isset($result->agency_id)){
            $agency = $this->db->query("SELECT name as agency_name FROM agencies WHERE id=".$result->agency_id)->row();
        }

        $data = [
            'name_user' => $result->name_user ?? '-',
            'identity_user' => $result->identity_user ?? '-',
            'address_user' => $result->address_user ?? '-',
            'innovator_name' => ucfirst($result->innovator_name) ?? '-',
            'innovator_phone' => $result->innovator_phone ?? '-',
            'innovator_email' => $result->innovator_email ?? '-',
            'innovation_field_name' => $inno_field->name ?? '-',
            'title' => $result->title ?? '-',
            'year' => $result->year ?? '-',
            'category' => $result->category ?? '-',
            'purpose' => $result->purpose ?? '-',
            'benefit' => $result->benefit ?? '-',
            'award' => $result->award ?? '-',
            'stages' => $result->stages ?? '-',
            'type' => $result->type ?? '-',
            'date' => $result->date ?? '-',
            'testimonial' => $result->testimonial ?? '-',
            'link' => $result->link ?? '-',
            'file' => $result->file ?? '-',
            'password_file' => $result->password_file ?? '-',
            'description' => $result->description ?? '-',
            'agency_name' => $agency->agency_name ?? '-',
        ];
        
        echo json_encode($data);
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
