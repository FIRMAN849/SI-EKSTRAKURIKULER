<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori_ekskul extends CI_Model
{

    function getdata()
    {
        $query = $this->db->query("SELECT * FROM tb_ekskul order by nama_ekskul asc");

        return $query->result();
    }

    public function hapusEkskul($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ekskul');
    }

    function getEkskulById($id)
    {
        return $this->db->get_where('tb_ekskul', ['id' => $id])->row_array();
    }

    function getkeyword($keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            $this->db->or_like('nisn', $keyword);
            $this->db->or_like('nisn', $keyword);
            $this->db->or_like('alamat', $keyword);
            $this->db->or_like('kelas', $keyword);
            $this->db->or_like('rombongan', $keyword);
            $this->db->or_like('tgl_lahir', $keyword);
        }
        return $this->db->get('user');
    }
}
