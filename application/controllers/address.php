<?php

class Address extends CI_Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() {
		$this->load->view("address");
	}
	/**
	 * API accept inout address and return to view
	 * 
	 * @param null
	 */
	function find() {	
		$this->load->model('Address_model');
		$addressData = array();
		if(!empty($_POST['address']) && isset($_POST['address'])) {
			$address = $_POST['address'];
			$addressArr = $this->Address_model->getAddress($address);
			$addressData = array("address"=>$addressArr);
		}
		$this->load->view("address",$addressData);
	}
}
