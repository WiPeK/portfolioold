<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function save_contact($data)
	{
		$contact = array(
			'email' => $data['email'],
			'subject' => $data['subject'],
			'message' => $data['message'],
			'data' => date('Y-m-d H:i:s'),
			'client_ip' => $this->input->ip_address()
		);

		$this->db->insert('contact', $contact);

		if($this->db->affected_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

}

/* End of file contact_m.php */
/* Location: ./application/models/contact_m.php */