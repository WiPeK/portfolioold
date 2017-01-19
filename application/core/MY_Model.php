<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $other_account = 'account'; //baza z kontami
	protected $other_common = 'common'; //baza dotycząca gm
	protected $other_log = 'log'; //baza z logami serwera nie strony
	protected $other_player = 'player'; //baza player
	//protected $other_web = 'web'; //baza web - domyślna

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file MY_Model.php */
/* Location: ./application/models/MY_Model.php */