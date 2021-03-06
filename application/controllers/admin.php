<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('Tank_auth');
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('admin_view.php',$output);	
	}
	
 
	function index()
	{
	if ($this->tank_auth->is_logged_in()){
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}else{
		redirect('auth/login');
	}}	
	
	function libros_admin()
	{
	if ($this->tank_auth->is_logged_in()){
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('libro');
			$crud->set_relation('id_tema','tema','titulo');
			$crud->set_field_upload('img','assets/portadas');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}else{
		redirect('auth/login');
	}
	}
	function temas_admin()
	{
	if ($this->tank_auth->is_logged_in()){
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('tema');
			 
			 
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}}else{
		redirect('auth/login');
	}
	}
	function comentarios_admin()
	{	if ($this->tank_auth->is_logged_in()){
		try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('comentario');
			$crud->set_relation('id_libro','libro','titulo');
			 
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}}else{
		redirect('auth/login');
	}
	}
	 
}