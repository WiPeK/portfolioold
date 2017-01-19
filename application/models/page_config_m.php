<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_config_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public function get_cmsconfig()
	{
		$query = $this->db->query("SELECT * FROM cmsconfig");
		return $query->row();
	}

}

/* End of file page_config_m.php */
/* Location: ./application/models/page_config_m.php */