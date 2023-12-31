<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Innovation_m extends CI_Model
{

    protected $table = 'innovations';
    protected $primary = 'id';

    public function get($innovation_field_id = '')
    {
        $filter = '';
        $filterUser = '';
        $filterKategori = '';
        if($innovation_field_id != ''){
            $filter = "AND a.innovation_field_id=$innovation_field_id";
        }
        $ci = get_instance();
        // var_dump($ci->session); die;
        $user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
        if(isset($user) && $user['role'] != 'ADMIN'){
            $user_id = $user['id'];
            $filterUser = "AND a.user_id=$user_id";
        }
        $category = $this->input->get('category');
        if(isset($category)){
            $filterKategori = "AND a.category='$category'";
        }
        return $this->db->query("SELECT a.*, b.name as innovation_field_name, c.name as agency_name FROM innovations a, innovation_fields b, agencies c WHERE a.innovation_field_id=b.id AND c.id=a.agency_id $filter $filterUser $filterKategori")->result();
    }

    public function getDataLimit($limit, $offset)
    {

        $filter = '';
        $filterUser = '';
        $filterKategori = '';

        // Retrieve category from the input or query parameter
        $category = $this->input->get('category');
        if (isset($category)) {
            $filterKategori = "AND a.category = '$category'";
        }

        $ci = get_instance();
        $user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
        if (isset($user) && $user['role'] != 'ADMIN') {
            $user_id = $user['id'];
            $filterUser = "AND a.user_id = $user_id";
        }

        // Construct the query with LIMIT and OFFSET
        $sql = "SELECT a.*, b.name as innovation_field_name FROM innovations a, innovation_fields b WHERE a.innovation_field_id = b.id $filter $filterUser $filterKategori LIMIT $limit OFFSET $offset";
        
        return $this->db->query($sql)->result();

    }

    public function getPaginate($limit, $offset)
    {
        $filter = '';
        $filterUser = '';
        $filterKategori = '';

        // Retrieve category from the input or query parameter
        $category = $this->input->get('category');
        if (isset($category)) {
            $filterKategori = "AND a.category = '$category'";
        }

        $ci = get_instance();
        $user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
        if (isset($user) && $user['role'] != 'ADMIN') {
            $user_id = $user['id'];
            $filterUser = "AND a.user_id = $user_id";
        }

        // Construct the query with LIMIT and OFFSET
        $sql = "SELECT a.*, b.name as innovation_field_name FROM innovations a, innovation_fields b WHERE a.innovation_field_id = b.id $filter $filterUser $filterKategori LIMIT $limit OFFSET $offset";
        
        return $this->db->query($sql)->result();
    }

    public function countAll()
    {
        $filter = '';
        $filterUser = '';
        $filterKategori = '';

        // Retrieve category from the input or query parameter
        $category = $this->input->get('category');
        if (isset($category)) {
            $filterKategori = "AND a.category = '$category'";
        }

        $ci = get_instance();
        $user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
        if (isset($user) && $user['role'] != 'ADMIN') {
            $user_id = $user['id'];
            $filterUser = "AND a.user_id = $user_id";
        }

        // Construct the count query
        $sql = "SELECT COUNT(*) as total_rows FROM innovations a, innovation_fields b WHERE a.innovation_field_id = b.id $filter $filterUser $filterKategori";

        return $this->db->query($sql)->row()->total_rows;
    }


    public function store()
    {
        $data = array(
            'innovator_name'   => htmlspecialchars($this->input->post('innovator_name'), true),
            'innovator_phone'   => htmlspecialchars($this->input->post('innovator_phone'), true),
            'innovator_email'   => htmlspecialchars($this->input->post('innovator_email'), true),
            'innovator_address'   => htmlspecialchars($this->input->post('innovator_address'), true),
            'innovation_field_id'   => htmlspecialchars($this->input->post('innovation_field_id'), true),
            'title'   => htmlspecialchars($this->input->post('title'), true),
            'year'   => htmlspecialchars($this->input->post('year'), true),
            'category'   => htmlspecialchars($this->input->post('category'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'purpose'   => htmlspecialchars($this->input->post('purpose'), true),
            'benefit'   => htmlspecialchars($this->input->post('benefit'), true),
            'award'   => htmlspecialchars($this->input->post('award'), true),
            'password_file'   => htmlspecialchars($this->input->post('password_file'), true),
            'link'   => htmlspecialchars($this->input->post('link'), true),
            'testimonial'   => htmlspecialchars($this->input->post('testimonial'), true),
            'type'   => htmlspecialchars($this->input->post('type'), true),
            'stages'   => htmlspecialchars($this->input->post('stages'), true),
            'date'   => htmlspecialchars($this->input->post('date'), true),
            'user_id'   => infoLogin()['id'],
            'prov_id'   => 24,
            'city_id'   => 340,
            'agency_id'   => htmlspecialchars(($this->input->post('agency_id') ?? 1), true),
        );
        if (!empty($_FILES['file']['name'])) {
            $dataFile = $this->uploadFile();
            $this->db->set('file', $dataFile);
            // var_dump($dataFile); die;
        }
        
        // Process the 'foto' input
        if (!empty($_FILES['foto']['name'])) {
            $dataFoto = $this->uploadFoto('foto');
            // var_dump($dataFoto); die;
            $data['foto'] = $dataFoto;
        }
        // Process the 'foto_second' input
        if (!empty($_FILES['foto_second']['name'])) {
            $dataFotoS = $this->uploadFoto('foto_second');
            // var_dump($dataFoto); die;
            $data['foto_second'] = $dataFotoS;
        }
        // Process the 'foto' input
        if (!empty($_FILES['foto_third']['name'])) {
            $dataFotoT = $this->uploadFoto('foto_third');
            // var_dump($dataFoto); die;
            $data['foto_third'] = $dataFotoT;
        }
            // var_dump($this->upload->do_upload('foto')); die;
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
            'innovation_field_id' => $inno_field->id ?? '-',
            'agency_id' => $result->agency_id,
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
            'foto' => $result->foto ?? null,
            'foto_second' => $result->foto_second ?? null,
            'foto_third' => $result->foto_third ?? null,
        ];
        
        echo json_encode($data);
    }

    public function update($id)
    {
        $data = array(
            'innovator_name'   => htmlspecialchars($this->input->post('innovator_name'), true),
            'innovator_phone'   => htmlspecialchars($this->input->post('innovator_phone'), true),
            'innovator_email'   => htmlspecialchars($this->input->post('innovator_email'), true),
            'innovator_address'   => htmlspecialchars($this->input->post('innovator_address'), true),
            'innovation_field_id'   => htmlspecialchars($this->input->post('innovation_field_id'), true),
            'title'   => htmlspecialchars($this->input->post('title'), true),
            'year'   => htmlspecialchars($this->input->post('year'), true),
            'category'   => htmlspecialchars($this->input->post('category'), true),
            'description'   => htmlspecialchars($this->input->post('description'), true),
            'purpose'   => htmlspecialchars($this->input->post('purpose'), true),
            'benefit'   => htmlspecialchars($this->input->post('benefit'), true),
            'award'   => htmlspecialchars($this->input->post('award'), true),
            'password_file'   => htmlspecialchars($this->input->post('password_file'), true),
            'link'   => htmlspecialchars($this->input->post('link'), true),
            'testimonial'   => htmlspecialchars($this->input->post('testimonial'), true),
            'type'   => htmlspecialchars($this->input->post('type'), true),
            'stages'   => htmlspecialchars($this->input->post('stages'), true),
            'date'   => htmlspecialchars($this->input->post('date'), true),
            'user_id'   => infoLogin()['id'],
            'prov_id'   => 24,
            'city_id'   => 340,
            'agency_id'   => htmlspecialchars(($this->input->post('agency_id') ?? 1), true),
        );

        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $file_db = $this->db->query("SELECT * FROM innovations WHERE id=$id")->row_array();
            $old_file = $file_db['file'];
            

            $config['allowed_types'] = 'jpg|png|jpeg|pdf|docx';
            $config['max_size'] = '51200';
            $config['upload_path'] = './assets/innovation/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $new_file = $this->upload->data('file_name');
                if ($old_file != $new_file) {
                    unlink('./assets/innovation/' . $old_file);
                }
                $this->db->set('file', $new_file);
            } else {

                echo $this->upload->display_errors();
            }
        }

        // Process the 'foto' input
        if (!empty($_FILES['foto']['name'])) {
            $dataFoto = $this->uploadFoto('foto');
            // var_dump($dataFoto); die;
            $data['foto'] = $dataFoto;
        }
        // Process the 'foto_second' input
        if (!empty($_FILES['foto_second']['name'])) {
            $dataFotoS = $this->uploadFoto('foto_second');
            // var_dump($dataFoto); die;
            $data['foto_second'] = $dataFotoS;
        }
        // Process the 'foto' input
        if (!empty($_FILES['foto_third']['name'])) {
            $dataFotoT = $this->uploadFoto('foto_third');
            // var_dump($dataFoto); die;
            $data['foto_third'] = $dataFotoT;
        }
        return $this->db->set($data)->where($this->primary, $id)->update($this->table);
    }

    public function destroy($id)
    {
        return $this->db->where($this->primary, $id)->delete($this->table);
    }

    public function uploadFile(){
        $upload_file = $_FILES['file']['name'];

        if ($upload_file) {
            $config['allowed_types'] = 'pdf|docx|jpg|png|jpeg';
            $config['max_size'] = '51200';
            $config['upload_path'] = './assets/innovation/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {
                $new_file = $this->upload->data('file_name');
                return $new_file;
            } else {

                echo $this->upload->display_errors();
            }
        }
    }
    public function uploadFoto($a = ''){
        if (!empty($_FILES[$a]['name'])) {
            $foto_config['allowed_types'] = 'jpg|png|jpeg';
            $foto_config['max_size'] = '51200';
            $foto_config['upload_path'] = './assets/innovation/';

            $this->load->library('upload', $foto_config);

            if ($this->upload->do_upload($a)) {
                $new_foto = $this->upload->data('file_name');
                return $new_foto; // Set the foto field in the data array
            } else {
                echo $this->upload->display_errors();
            }
        }
    }
}
