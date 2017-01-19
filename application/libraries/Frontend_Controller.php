<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		//load libraries
		$this->load->library('session');
		$this->load->library('form_validation');
		//$this->load->library('user_agent');
		//$this->load->driver('cache', array('adapter' => 'file'));

		//load models
		//$this->load->model('page_config_m');

		// get all cms configuration
		//$cacheCMSCFG = 'cacheCMSCFG';
		//if (!$this->data['cmscfg'] = $this->cache->get($cacheCMSCFG)) {
		//	$this->data['cmscfg'] = $this->page_config_m->get_cmsconfig();
		//	$this->cache->save($cacheCMSCFG, $this->data['cmscfg'],3600);
		//}
	}

	public function index()
	{
		
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/controllers/Frontend_Controller.php */