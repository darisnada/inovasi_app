<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_m extends CI_Model {

    protected $table = 'sliders';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->query("SELECT a.* FROM sliders a")->result();
    }
    public function getForHome()
    {
        return $this->db->query("SELECT a.* FROM sliders a ORDER BY a.id DESC LIMIT 5")->result();
    }
	
    public function store()
    {
        $dataimage = null;
        if (!empty($_FILES['image']['name'])) {
            $dataimage = $this->uploadFoto();
            // $this->db->set('image', $dataimage);
            // var_dump($dataFile); die;
        }
        $data = array(
            'name'          => htmlspecialchars($this->input->post('name'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'image'         => htmlspecialchars($dataimage, true),
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
            'description'   => htmlspecialchars($this->input->post('description'), true),
            // 'image'         => htmlspecialchars($this->input->post('image'), true),
        );
        if (!empty($_FILES['image']['name'])) {
            $dataimage = $this->uploadFoto();
            $this->db->set('image', $dataimage);
            // var_dump($dataFile); die;
        }
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }

    public function uploadFoto(){
        if (!empty($_FILES['image']['name'])) {
            $foto_config['allowed_types'] = 'jpg|png|jpeg';
            $foto_config['max_size'] = '51200';
            $foto_config['upload_path'] = './assets/sliders/';

            $this->load->library('upload', $foto_config);

            if ($this->upload->do_upload('image')) {
                $new_foto = $this->upload->data('file_name');
                return $new_foto; // Set the foto field in the data array
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}
 