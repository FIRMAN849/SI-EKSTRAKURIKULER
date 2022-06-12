<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_ekskul extends CI_Model
{


    function hapusEkskul($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("tb_ekskul");
    }
}
