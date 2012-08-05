<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
	   parent::__construct();
	}


	function index()
	{
		// Did we get an OAuth callback?
		if ($this->input->get('code'))
		{
			// Request long-living token
			$token = $this->dwolla->requestToken($this->input->get('code'));
			$this->dwolla->setToken($token);

			// Request user info
			$data['account_info'] = $this->dwolla->me();
		}
		else
		{
			$data['auth_url'] = $this->dwolla->getAuthUrl();
		}
		
		$this->load->view('auth_view', $data);
   	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */