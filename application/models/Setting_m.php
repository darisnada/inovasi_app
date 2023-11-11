<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_m extends CI_Model {

    protected $table = 'settings';
    protected $primary = 'id';

    public function get()
    {
        $name_app = $this->db->query("SELECT * FROM settings WHERE options='name_app'")->row();
        $banner_title = $this->db->query("SELECT * FROM settings WHERE options='banner_title'")->row();
        $banner_desc = $this->db->query("SELECT * FROM settings WHERE options='banner_desc'")->row();
        $profile_desc = $this->db->query("SELECT * FROM settings WHERE options='profile_desc'")->row();
        $profile_image = $this->db->query("SELECT * FROM settings WHERE options='profile_image'")->row();
        $contact_title = $this->db->query("SELECT * FROM settings WHERE options='contact_title'")->row();
        $contact_phone = $this->db->query("SELECT * FROM settings WHERE options='contact_phone'")->row();
        $contact_fax = $this->db->query("SELECT * FROM settings WHERE options='contact_fax'")->row();
        $contact_email = $this->db->query("SELECT * FROM settings WHERE options='contact_email'")->row();
        $contact_address = $this->db->query("SELECT * FROM settings WHERE options='contact_address'")->row();
        $contact_map = $this->db->query("SELECT * FROM settings WHERE options='contact_map'")->row();
        $logo = $this->db->query("SELECT * FROM settings WHERE options='logo'")->row();
        $icon = $this->db->query("SELECT * FROM settings WHERE options='icon'")->row();
        $instagram = $this->db->query("SELECT * FROM settings WHERE options='instagram'")->row();
        return [
            'name_app' => $name_app->value,
            'banner_title' => $banner_title->value,
            'banner_desc' => $banner_desc->value,
            'profile_desc' => $profile_desc->value,
            'profile_image' => $profile_image->value,
            'contact_title' => $contact_title->value,
            'contact_phone' => $contact_phone->value,
            'contact_fax' => $contact_fax->value,
            'contact_email' => $contact_email->value,
            'contact_address' => $contact_address->value,
            'contact_map' => $contact_map->value,
            'logo' => $logo->value,
            'icon' => $icon->value,
            'instagram' => $instagram->value,
        ];
    }
	
    public function store()
    {
        $this->db->set(['value' => $this->input->post('name_app')])->where('options', 'name_app')->update($this->table);
        $this->db->set(['value' => $this->input->post('banner_title')])->where('options', 'banner_title')->update($this->table);
        $this->db->set(['value' => $this->input->post('banner_desc')])->where('options', 'banner_desc')->update($this->table);
        $this->db->set(['value' => $this->input->post('profile_desc')])->where('options', 'profile_desc')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_title')])->where('options', 'contact_title')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_phone')])->where('options', 'contact_phone')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_fax')])->where('options', 'contact_fax')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_email')])->where('options', 'contact_email')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_address')])->where('options', 'contact_address')->update($this->table);
        $this->db->set(['value' => $this->input->post('contact_map')])->where('options', 'contact_map')->update($this->table);
        $this->db->set(['value' => $this->input->post('instagram')])->where('options', 'instagram')->update($this->table);

        $upload_image = $_FILES['profile_image']['name'];

        if ($upload_image) {
            $picture = $this->db->query("SELECT * FROM settings WHERE options='profile_image'")->row_array();
            $old_image = $picture['value'];

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '51200';
            $config['upload_path'] = './assets/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('profile_image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set(['value' => $new_image])->where('options', 'profile_image')->update($this->table);
            } else {

                echo $this->upload->display_errors();
            }
        }

        $upload_logo = $_FILES['logo']['name'];

        if ($upload_logo) {
            $picture_logo = $this->db->query("SELECT * FROM settings WHERE options='logo'")->row_array();
            $old_image = $picture_logo['value'];
            // if ($old_image != 'user.png') {
            //     unlink('./assets/images/' . $old_image);
            // }

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '51200';
            $config['upload_path'] = './assets/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $new_logo = $this->upload->data('file_name');
                $this->db->set(['value' => $new_logo])->where('options', 'logo')->update($this->table);
            } else {

                echo $this->upload->display_errors();
            }
        }

        $upload_icon = $_FILES['icon']['name'];

        if ($upload_icon) {
            $picture_icon = $this->db->query("SELECT * FROM settings WHERE options='icon'")->row_array();
            $old_image = $picture_icon['value'];
            // if ($old_image != 'user.png') {
            //     unlink('./assets/images/' . $old_image);
            // }

            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '51200';
            $config['upload_path'] = './assets/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('icon')) {
                $new_icon = $this->upload->data('file_name');
                $this->db->set(['value' => $new_icon])->where('options', 'icon')->update($this->table);
            } else {

                echo $this->upload->display_errors();
            }
        }

    }

}
 