<?php
	Class Home_model extends CI_Model{
		public function getUser()
		{
			return $this->db->get('user')->row_array();

		}
		public function getBiodata()
		{
			return $this->db->get('biodata')->row_array();

		}
		public function getPendidikan()
		{

			return $this->db->get('pendidikan')->result();

		}
		public function getPengalaman()
		{

			return $this->db->get('pengalaman')->row_array();

		}
		public function getPortofolio()
		{

			return $this->db->get('portofolio')->result();
		}
		public function getSkill()
		{

			return $this->db->get('skill')->result();
		}
		public function getSosmed()
		{

			return $this->db->get('sosmed')->row_array();
		}
		public function getById($id)
		{
			return $this->db->get_where('user',["id" => $id])->row();
			return $this->db->get_where('biodata',["kode_biodata" => $id])->row();
			return $this->db->get_where('pendidikan',["id_pendidikan" => $id])->row();
			return $this->db->get_where('pengalaman',["id_pengalaman" => $id])->row();
			return $this->db->get_where('portfolio',["id_portfolio" => $id])->row();
			return $this->db->get_where('skill',["id_skill" => $id])->row();
			return $this->db->get_where('sosmed',["id_sosmed" => $id])->row();
		}
		
	}
?>