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
 
    public function novedades(){
	    $this->load->library('pagination');
	 
		$config['base_url'] = base_url().'seccion/novedades';
		$config['total_rows'] =  $this->db->get('libro')->num_rows();
		$config['per_page']   = 3;
		$config['num_links']   = 20;
		//iniciamos la paginacion
		$this->pagination->initialize($config);
		$uri = $this->uri->segment(3);
 
		if ($uri ==null){$uri=0;}
		$sql = "SELECT * FROM libro  ORDER BY fecha_registro ASC limit $uri,3"; 
		$data['info'] = $this->mi_model->get_sql($sql);	 

		//--- mostramos los temas ---/
		$sql = "SELECT * FROM tema";
		$data['temas'] = $this->mi_model->get_sql($sql);
		
  
		$data['contenido'] =  "listado_view";
		$this->load->view('page_view', $data);
    }
	public function tema($id=null)
	{
		//--- preparamos la paginacion --/
		$this->load->library('pagination');
	 
		$config['base_url'] = base_url().'seccion/tema/'.$id;
		$config['total_rows'] = $this->mi_model->get_num_rows($id);
		$config['per_page']   = 3;
		$config['num_links']   = 20;
		//iniciamos la paginacion
		$this->pagination->initialize($config);
		$uri = $this->uri->segment(4);
		
		
		//--- mostramos los libros ---/
		if ($id == null){
			if ($uri ==null){$uri=0;}
			$sql = "SELECT * FROM libro  ORDER BY fecha_registro ASC limit $uri,3";
		}else{
			if ($uri ==null){$uri=0;}
			$sql = "SELECT * FROM libro WHERE id_tema = '$id'  ORDER BY id_libro DESC limit $uri,3";
		}
		$data['info'] = $this->mi_model->get_sql($sql);	 

		//--- mostramos los temas ---/
		$sql = "SELECT * FROM tema";
		$data['temas'] = $this->mi_model->get_sql($sql);
		
		//--- mostramos el tema ---/
		$data['tema'] = $this->mi_model-> devolver_dato("tema","id_tema",$id,"titulo"); 
		$data['contenido'] =  "listado_view";
		$this->load->view('page_view', $data);
		
	}
	public function ficha($id,$error=null)
	{
		//--- mostramos los temas ---/
		$sql = "SELECT * FROM tema";
		$data['temas'] = $this->mi_model->get_sql($sql);
		
		//--- mostramos el libro ---/
		$sql = "SELECT * FROM libro WHERE id_libro = '$id'";
		$data['info'] = $this->mi_model->get_sql($sql);	 
		//--- mostramos los comentarios ---/
		$sql = "SELECT * FROM comentario WHERE id_libro = '$id'";
		$data['comentarios'] = $this->mi_model->get_sql($sql);	

		$data['total'] = $this->mi_model->contar_datos('comentario','id_libro',$id);		
		$data['id_libro'] = $id;
		$data['error'] = $error;
		$data['contenido'] =  "ficha_view";
		 
		$this->load->view('page_view', $data);
		
	}
	public function comentar($id)
	{
		if ($_POST['autor'] == '' || $_POST['email'] == '' || $_POST['comentario'] == ''){
			redirect('/seccion/ficha/'.$id.'/error');
		}
		
		$array = array('autor' => $_POST['autor'],'id_libro' => $id,'comentario' => $_POST['comentario'],'email' => $_POST['email'],'fecha_registro' => date('Y-m-d'));
		$this->mi_model->add("comentario",$array);	
		redirect('/seccion/ficha/'.$id);
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */