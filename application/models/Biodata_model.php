<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            //['field' => 'id_biodata',
            //'label' => 'id_biodata',
            //'rules' => 'required'],
			
			['field' => 'Nama',
            'label' => 'Nama',
            'rules' => 'required'],
			
            ['field' => 'Jenis_Kelamin',
            'label' => 'Jenis_Kelamin',
            'rules' => 'required'],
			
            ['field' => 'TTL',
            'label' => 'TTL',
            'rules' => 'required'],
			
            ['field' => 'Alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
			
            ['field' => 'Agama',
            'label' => 'Agama',
            'rules' => 'required'],
			
            ['field' => 'Status',
            'label' => 'Status',
            'rules' => 'required'],
			
			['field' => 'Keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],
			
			['field' => 'Resume',
            'label' => 'Resume',
            'rules' => 'required']
        ];
    }
    public function getAll()
    {
        return $this->db->get('biodata')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biodata', ["kode_biodata" => $id])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->kode_biodata 			= uniqid();
        $this->Nama     				= $post["Nama"];
        $this->Jenis_Kelamin  			= $post["Jenis_Kelamin"];
        $this->TTL     					= $post["TTL"];
        $this->Alamat    				= $post["Alamat"];
        $this->Agama 					= $post["Agama"];
        $this->Status    				= $post["Status"];
        $this->foto     				= $this->_uploadImage();
        $this->Keterangan   			= $post["Keterangan"];
		$this->Resume   				= $post["Resume"];
        
        
        $this->db->insert('biodata', $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->kode_biodata 			= $post["kode_biodata"];
        $this->Nama    					= $post["Nama"];
        $this->Jenis_Kelamin     		= $post["Jenis_Kelamin"];
        $this->TTL  					= $post["TTL"];
        $this->Alamat     				= $post["Alamat"];
        $this->Agama    				= $post["Agama"];
        $this->Status 					= $post["Status"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
		$this->Keterangan      			= $post["Keterangan"];
		$this->Resume   				= $post["Resume"];
        
		
		
        $this->db->update('biodata', $this, array('kode_biodata' => $post['kode_biodata']));
        
    }
    public function delete($id)
    {
        return $this->db->delete('biodata', array("kode_biodata" => $id));
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/biodata/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->kode_biodata;
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