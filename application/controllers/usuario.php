<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		$this->load->view('usuarios_views');
		$this->load->model('usuario model');
	}

	public function registro()
	{
		$this->load->view('registro_views');

	}

	public function registro_very()
	{
		if($this->input->post('submit_reg'))
		{
			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('correo','Correo','required|trim');
			$this->form_validation->set_rules('user','Usuario','required|trim|callback_very_user');
			$this->form_validation->set_rules('pass','Contraseña','required|trim');
		
			$this->form_validation->set_message('required','El Campo %s Es Obligatorio');
			$this->form_validation->set_message('very_user','El %s Ya Existe');
			if($this->form_validation->run()  != FALSE)
			{
				$this->usuarios_model->add_user();
				$data = array('mensaje'=>'El usuario se registro correctamente');
				$this->load->view('registro_views',$data);
			}
			else
			{
				$this->load->view('registro_views') ;
			}
		}
	}
}
function very_user($user)
{
	$variable = $this->usuarios_model->very_user($user);
	if($variable == true)
	{
		return false;
	}
	else
	{
		return true;
	}
}

