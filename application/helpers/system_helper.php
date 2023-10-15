<?php

function cekLogin(){
	
   $ci = get_instance();
    if( !$ci->session->userdata('username') ){
      redirect('auth');
	} 
	// else{
	// 	$id_level = $ci->session->userdata('id_level');
	// 	$menu = $ci->uri->segment(1);
	// 	$sqlMenu = $ci->db->get_where('menu', ['nama_menu' => $menu])->row_array();
	// 	$menu_id = $sqlMenu['id_menu'];
	// 	$accessMenu = $ci->db->get_where('access_menu', ['id_level' => $id_level, 'id_menu' => $menu_id]);

	// 	if($accessMenu->num_rows() < 1){
	// 		redirect('auth/blocked');
	// 	}
	// }
}

function infoLogin(){
	$ci = get_instance();
	return $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
}

function checkRole($role){
	$ci = get_instance();
	$user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
	if($user['role'] != $role){
		
		redirect('auth/blocked');
	}
}

function roleMasyarakat($role){
	$ci = get_instance();
	$user = $ci->db->get_where('users', ['username' => $ci->session->userdata('username')])->row_array();
	if($user['role'] != $role){
		
		redirect('innovation/index_');
	}
}
