<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio_model extends CI_Model
{
    public function rules()
    {
        return [
            


            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get('portofolio')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('portofolio', ["id_portofolio" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_portofolio 	= uniqid();
        $this->foto     		= $this->_uploadImage();
        $this->judul     		= $post["judul"];
        $this->db->insert('portfolio', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_portofolio 	= $post["id"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->judul     	= $post["judul"];

        

        $this->db->update('portofolio', $this, array('id_portofolio' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('portofolio', array("id_portofolio" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './assets/img/portofolio/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id_portofolio;
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