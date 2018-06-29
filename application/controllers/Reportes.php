<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	/**
	 *
	 * Contructor
	 *
	 **/

	 function __construct()
 	{
 		parent::__construct();
 		$this->load->model('ModelMain', 'm');
		$this->load->model('ModelMantencion', 'ma');
		$this->load->model('ModelReportes', 'report');
		$this->load->model('ModelSeguimiento', 'seguimiento');

		//$this->load->model('ModelAdempiere', 'adempiere');
 	}

	/**
	 *
	 * Index -> calendario.php
	 *
	 **/
	public function index()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->load->view('reports',$data);
	}

	public function usoMaquina()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->load->view('report/usoMaquina',$data);
	}

	public function getdata(){
		$result = $this->report->getIngresos();
		//print_r($result);
		echo json_encode($result);
	}

	public function Mes()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->load->view('report/entreUnMes',$data);
	}


	public function getEntreUnMes(){
		$result = $this->report->getBETWEEN();
		//print_r($result);
		echo json_encode($result);
	}

	public function verEstado()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->load->view('report/status',$data);
	}
	public function getStatus(){
		$result = $this->report->getEstados();
		//print_r($result);
		echo json_encode($result);
	}

	public function historialMaquina(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$data['maquinas']= $this->ma->getallMaquinas();
		$this->load->view('report/maquina-historial',$data);
	}

	public function buscarHistorial(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->form_validation->set_rules('maquina', 'maquina','required|trim',array(
			'required' => 'Seleccione una maquina'
		));
		$this->form_validation->set_rules('fechadesde', 'fechadesde','required',array(
			'required' => 'Seleccione una fecha'
		));
		$this->form_validation->set_rules('fechahasta', 'fechahasta','required',array(
			'required' => 'Seleccione una fecha'
		));
		if ($this->form_validation->run()) {

			$desde =$this->input->post('fechadesde');
			$hasta =$this->input->post('fechahasta');
			$maquina =  $this->input->post('maquina');
			$data['desde'] = $desde;
			$data['hasta'] = $hasta;
			$data['maquina'] = $maquina;
		 // $data['results'] = $this->report->getHistorial($desde,$hasta,$maquina);
		 	$result = $this->report->getHistorial($desde,$hasta,$maquina);
			$data['seguimientos']= $this->report->getSeguimientoJoin();

			$data['results'] =$result;

			// print_r($data);


			$this->load->view('report/historial-result',$data);
		}else {
				$data['maquinas']= $this->ma->getallMaquinas();
				$this->load->view('report/maquina-historial',$data);
		}


	}

	public function historialPersonal(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$data['tecnicos']= $this->report->getTecnicos();
		$this->load->view('report/personal-historial',$data);
	}



	public function buscarTecnicos(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->form_validation->set_rules('persona', 'persona','required|trim',array(
			'required' => 'Seleccione una maquina'
		));
		$this->form_validation->set_rules('fechadesde', 'fechadesde','required',array(
			'required' => 'Seleccione una fecha'
		));
		$this->form_validation->set_rules('fechahasta', 'fechahasta','required',array(
			'required' => 'Seleccione una fecha'
		));
		if ($this->form_validation->run()) {

			$desde =$this->input->post('fechadesde');
			$hasta =$this->input->post('fechahasta');
			$persona =  $this->input->post('persona');
			$data['desde'] = $desde;
			$data['hasta'] = $hasta;
			$data['tipo'] = $this->input->post('customRadio');
			$data['nombre'] =$this->m->verificarCodigo($persona);
			$data['seguimientos']= $this->report->getSeguimientoTecnico($desde,$hasta,$persona);

			$this->load->view('report/person-result',$data);
		}else {
				$data['tecnicos']= $this->report->getTecnicos();
				$this->load->view('report/personal-historial',$data);
		}


	}
	public function indice(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];

		$this->load->view('report/indice-cumplimiento',$data);
	}


	public function cumplimiento(){
		if (!$this->session->userdata('logged_in')) {
			redirect('main/login', 'refresh');
		}
		$session_data = $this->session->userdata('logged_in');
		$data['Codigo'] = $session_data['Codigo'];
		$data['Nombre'] = $session_data['Nombre'];
		$data['Tipo'] = $session_data['Tipo'];
		$this->form_validation->set_rules('fechadesde', 'fechadesde','required',array(
			'required' => 'Seleccione una fecha'
		));
		$this->form_validation->set_rules('fechahasta', 'fechahasta','required',array(
			'required' => 'Seleccione una fecha'
		));
		if ($this->form_validation->run()) {
			$session_data = $this->session->userdata('logged_in');
			$data['Codigo'] = $session_data['Codigo'];
			$data['Nombre'] = $session_data['Nombre'];
			$data['Tipo'] = $session_data['Tipo'];
			$desde =$this->input->post('fechadesde');
			$hasta =$this->input->post('fechahasta');
			$data['desde'] = $desde;
			$data['hasta'] = $hasta;
			$tipo= 'Correctiva';
			$data['correctivas']= $this->report->getIndice($tipo,$desde,$hasta);
			
			$this->load->view('report/indice-result',$data);
		}else {
			$this->load->view('report/indice-cumplimiento',$data);
		}



	}



}
