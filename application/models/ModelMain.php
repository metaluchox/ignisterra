<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelMain extends CI_Model
{



	public function login($codigo)
	{
		$this->db->select('*');
		$this->db->from('personal');
		$this->db->join('area as a', 'a.CodArea = personal.Area');
		$this->db->where('NomUser', $codigo);
		// $this->db->where('password',$pwd));
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else {
			return false;
		}
	}

	public function getPersona($id)
	{
    $query = $this->db->get_where('personal', array(
			'Codigo' => $id
		));
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}
	public function checkUser($id)
	{
    $query = $this->db->get_where('personal', array(
			'Codigo' => $id
		));
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	public function getallPersona()
	{
		$this->db->order_by('Codigo', 'asc');
		$query = $this->db->get('personal');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	public function whereCodigoPersona($codigo){
		$this->db->like("Codigo",$codigo);
		$query = $this->db->get("personal");
		return $query->result();
	}

	public function verificarCodigo($codigo)
	{
	  $query = $this->db->get_where('personal', array(
			'Codigo' => $codigo
		));
		if ($query->num_rows() > 0) {
			return $query->row();
		}

	}
	public function getCorreo($codigo)
	{
		$query = $this->db->get_where('personal', array(
			'Codigo' => $codigo
		));
		if ($query->num_rows() > 0) {
			return $query->result();
		}

	}
	public function getAP()
	{
		$query = $this->db->get_where('personal', array(
			'Area' => 'AP',
			'Cargo'=>'JA'
		));
		if ($query->num_rows() > 0) {
			return $query->result();
		}

}

	public function getEmail()
	{
		return $this->db->get("Email")->result();
	}

	public function saveEmail($data)
	{
		return $this->db->insert('Email', $data);
	}
	public function editEmail($id,$data)
	{
		return $this->db->where('id', $id)->update('Email', $data);
	}

	public function deleteEmail($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Email');
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}

	public function persona($id)
	{
		$this->db->select('*');
    $this->db->from('personal');
    $this->db->where('Codigo',$id);
    $res2 = $this->db->get();
    return $res2;
	}
	public function saveActividad($data)
	{
		return $this->db->insert('MAN_Actividades', $data);
	}
	public function getAllPersonal()
	{
		$this->db->order_by('Codigo', 'asc');
		$query = $this->db->get('personal');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	public function editUser($id,$data)
	{
		return $this->db->where('Codigo', $id)->update('personal', $data);
	}


}

?>
