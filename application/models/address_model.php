<?php

class Address_model  extends CI_Model {

    var $title   = '';
    var $content = '';
    var $date    = '';
    private $pagesTable = "pages";
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    /**
     * Function for get address
     * 
     * @param name
     * @type String
     * @return Array
     */
	function getAddress($name) {
        $this->db->like('name', $name);
        $address = $this->db->get('address_book');
        return $address->row();
    } 
}