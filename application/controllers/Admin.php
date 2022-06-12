<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nisn')) {
            redirect('auth');
        }
        $this->load->model('kategori_ekskul');
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer',);
    }

    public function daftarEkskul()
    {


        $data['title'] = 'Daftar Ekskul';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $data['daftar'] = $this->db->get('tb_ekskul')->result_array();

        $this->form_validation->set_rules('ekskul', 'Ekskul', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/daftar_ekskul', $data);
            $this->load->view('templates/footer',);
        } else {
            $this->db->insert('tb_ekskul', ['nama_ekskul' => $this->input->post('ekskul')]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Tambah Ekskul Berhasil
            </div>');
            redirect('admin/daftarekskul');
        }
    }

    public function editdaftarEkskul()
    {

        $nama = $this->input->post('ekskul');

        $this->db->set('nama_ekskul', $nama);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_ekskul');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil Mengedit Ekskul
        </div>');
        redirect('admin/daftarekskul');
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_ekskul');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Berhasil Menghapus Ekskul
            </div>');
        redirect('admin/daftarekskul');
    }

    //pendaftar
    public function hapuspendaftar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('daftar_ekskul');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Berhasil Menghapus Pendaftar
            </div>');
        redirect('admin/pendaftarekskul');
    }


    public function pendaftarEkskul()
    {


        $data['title'] = 'Pendaftar Ekskul';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $data['pendaftar'] = $this->db->get('daftar_ekskul')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pendaftar', $data);
        $this->load->view('templates/footer',);
    }

    public function printPendaftar()
    {
        $this->load->library('dompdf_gen');

        $data['pendaftar'] = $this->db->get('daftar_ekskul')->result_array();

        $this->load->view('admin/laporan_pdf', $data);

        $paper_size     = 'A4';
        $orientation    = 'landscape';
        $html           =  $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_pendaftar.pdf", array('Attachment' => 0));
    }


    //daftar user
    public function daftarUser()
    {

        $data['title'] = 'Daftar Siswa';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $data['siswa'] = $this->db->get('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/daftar_user', $data);
        $this->load->view('templates/footer',);
    }

    public function hapusUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Berhasil Menghapus Ekskul
            </div>');
        redirect('admin/daftarekskul');
    }
}
