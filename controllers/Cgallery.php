<?php

class Cgallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		if ($this->session->userdata('id_user') == NULL) {
			redirect('/cuser/login');
		}
	}

	function gallery() {
		$data['array'] = $this->mgallery->get_all();
		$this->load->view('vgallery/vgallery', $data);
	}

}

?>
