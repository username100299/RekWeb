<?php
/**
 * 
 */
class Mahasiswa_Model extends CI_Model
{
	
	public function getAllMahasiswa{

		return $this->db->get('mahasiswa')
	}
}

?>