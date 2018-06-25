<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelCalendario extends CI_Model
{



  public function insertData($data)
	{
		return $this->db->insert('Calendario', $data);
	}

  public function getCalendario()
	{
    $this->db->order_by('id_calendario', 'asc');
    $query = $this->db->get('Calendario');
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return false;
    }
	}



}

?>
