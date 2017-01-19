<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    	$this->load->library('form_validation');
    	$this->load->model('contact_m');
	}

	public function contact_api()
	{
		$data = (array)json_decode(file_get_contents("php://input"));
		// $this->form_validation->set_rules($data['email'], 'Email', 'valid_email|xss_clean');
		// $this->form_validation->set_rules($data['subject'], 'Temat', 'xss_clean');
		// $this->form_validation->set_rules($data['message'], 'Treść', 'xss_clean');

		// if($this->form_validation->run() == FALSE)
		// {
		// 	//json enc val err
		// 	$data_vr['valid_err'] = true;
		// 	$data_vr['valid_errs'] = validation_errors();
		// 	//echo json_encode($data_vr);
		// 	var_dump($data);
		// }
		// else
		// {
			
			if($this->contact_m->save_contact($data))
			{
				$data_email['emailToMe'] = true;
				$data_email['emailToUser'] = true;
			}
			else
			{
				$data_email['emailToMe'] = false;
				$data_email['emailToUser'] = false;
			}

			echo json_encode($data_email);
		//}
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */