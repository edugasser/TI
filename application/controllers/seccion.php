<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seccion extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
	$this->load->model('mi_model');
    }
 
 
	public function tema($id)
	{
		//--- mostramos los libros ---/
		$sql = "SELECT * FROM libro WHERE id_tema = '$id'ORDER BY id_libro DESC";
		$data['info'] = $this->mi_model->get_sql($sql);	 
		//--- mostramos los temas ---/
		$sql = "SELECT * FROM tema";
		$data['temas'] = $this->mi_model->get_sql($sql);
		
		//--- mostramos el tema ---/
		$data['tema'] = $this->mi_model-> devolver_dato("tema","id_tema",$id,"titulo"); 
		$data['contenido'] =  "listado_view";
		$this->load->view('page_view', $data);
		
	}
	public function ficha($id)
	{
		//--- mostramos los temas ---/
		$sql = "SELECT * FROM tema";
		$data['temas'] = $this->mi_model->get_sql($sql);
		
		//--- mostramos el libro ---/
		$sql = "SELECT * FROM libro WHERE id_libro = '$id'";
		$data['info'] = $this->mi_model->get_sql($sql);	 
		
		$data['contenido'] =  "ficha_view";
		 
		$this->load->view('page_view', $data);
		
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */