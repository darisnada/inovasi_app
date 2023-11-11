<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_m extends CI_Model {

    protected $table = 'news';
    protected $primary = 'id';

    public function get()
    {
        return $this->db->query("SELECT a.* FROM news a")->result();
    }
    public function getForHome()
    {
        return $this->db->query("SELECT a.* FROM news a ORDER BY a.id DESC LIMIT 5")->result();
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
            'title'          => htmlspecialchars($this->input->post('title'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'date'   => htmlspecialchars($this->input->post('date'), true),
            'images'         => htmlspecialchars($dataimage, true),
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
            'title'          => htmlspecialchars($this->input->post('title'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'date'   => htmlspecialchars($this->input->post('date'), true),
            // 'image'         => htmlspecialchars($this->input->post('image'), true),
        );
        if (!empty($_FILES['image']['name'])) {
            $dataimage = $this->uploadFoto();
            $this->db->set('images', $dataimage);
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
            $foto_config['upload_path'] = './assets/news/';

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
 