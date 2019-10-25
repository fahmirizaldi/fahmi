<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Education_model extends CI_Model
{
    public function rules()
    {
        return [
			
		
            ['field' => 'Nama_Sekolah',
            'label' => 'Nama_Sekolah',
            'rules' => 'required'],

            ['field' => 'Tahun_Ajar',
            'label' => 'Tahun_Ajar',
            'rules' => 'required'],
			
			['field' => 'Keterangan',
            'label' => 'Keterangan',
            'rules' => 'required']

            
        ];
    }

    public function getAll()
    {
        $hasil = $this->db->order_by('id_pendidikan', 'DESC');
        $hasil = $this->db->get('pendidikan');       
        return $hasil->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('pendidikan', ["id_pendidikan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pendidikan = uniqid();
        $this->Nama_Sekolah         	= $post["Nama_Sekolah"];
        $this->Tahun_Ajar        		= $post["Tahun_Ajar"];
        $this->Keterangan         		= $post["Keterangan"];
        $this->foto     	= $this->_uploadImage();
        $this->db->insert('pendidikan', $this);
    }

    public function update($id = null)
    {
        $post = $this->input->post();
        $this->id_pendidikan 	= $post["id"];
        $this->Nama_Sekolah     = $post["Nama_Sekolah"];
        $this->Tahun_Ajar     	= $post["Tahun_Ajar"];
        $this->Keterangan     	= $post["Keterangan"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update('pendidikan', $this, array('id_pendidikan' => $post['id']));        
    }

    public function delete($id)
    {
        return $this->db->delete('pendidikan', array("id_pendidikan" => $id));
    }
	private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/pendidikan/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id_pendidikan;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

}