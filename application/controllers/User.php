<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nisn')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'SI EKSKUL SMAN 1 LUMAJANG';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('user/index', $data);
    }

    public function profil()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('user/profil', $data);
    }

    public function galeri()
    {
        $data['title'] = 'Galeri Ekstrakurikuler';
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('user/galeri', $data);
    }
    public function about()
    {
        $data['title'] = 'About';
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->load->view('user/about', $data);
    }

    public function editprofil()
    {
        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('rombongan', 'Rombongan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/editprofil', $data);
        } else {
            $nama      = $this->input->post('nama');
            $nisn      = $this->input->post('nisn');
            $email     = $this->input->post('email');
            $alamat    = $this->input->post('alamat');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $kelas     = $this->input->post('kelas');
            $rombongan = $this->input->post('rombongan');

            //cek jika ada gambar yang akan diuplod
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = '2048';
                $config['upload_path']     = './assets/img/profil/';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profil/' . $old_image);
                    }


                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->set('email', $email);
            $this->db->set('alamat', $alamat);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('kelas', $kelas);
            $this->db->set('rombongan', $rombongan);

            $this->db->where('nisn', $nisn);
            $this->db->update('user',);


            $this->session->set_flashdata('message', '<div class="text-success pt-3">
            anda sudah memperbarui profil
            </div>');
            redirect('user/profil');
        }
    }


    public function ubahpassword()
    {
        $data['title'] = 'Ubah Password';
        //mengambil nilai session
        $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password_lama', 'required|trim');
        $this->form_validation->set_rules('password_baru1', 'Password_baru1', 'required|trim|min_length[3]|matches[password_baru2]', [
            'matches' => 'password dont match'
        ]);
        $this->form_validation->set_rules('password_baru2', 'Confirm Password', 'required|trim|min_length[3]|matches[password_baru1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/ubahpassword', $data);
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="text-danger pt-3">
            Password Salah
            </div>');
                redirect('user/ubahpassword');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="text-danger pt-3">
                Password Baru tidak boleh sama dengan password lama
                </div>');
                    redirect('user/ubahpassword');
                } else {
                    //password sudah ok
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('nisn', $this->session->userdata('nisn'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="text-success pt-3">
                    Password Telah di ubah
                    </div>');
                    redirect('user/ubahpassword');
                }
            }
        }
    }

    public function daftarEkskul()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nisn', 'Nisn', 'required|trim');
        $this->form_validation->set_rules('no_wa', 'No Whatsapp', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('ekskul', 'Ekstrakurikuler', 'required');
        $this->form_validation->set_rules('tgl-lahir', 'Tgl-lahir', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('rombongan', 'Rombongan', 'required');
        $this->form_validation->set_rules('alasan', 'Alasan', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Ekstrakurikuler';
            $data['user'] = $this->db->get_where('user', ['nisn' => $this->session->userdata('nisn')])->row_array();
            $data['kategori_ekskul'] = $this->db->get('tb_ekskul')->result();
            $this->load->view('user/daftar-ekstrakurikuler', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'no_hp' => $this->input->post('no_wa'),
                'alamat' => $this->input->post('alamat'),
                'ekskul' => $this->input->post('ekskul'),
                'kelas' => $this->input->post('kelas'),
                'rombongan' => $this->input->post('rombongan'),
                'tgl_lahir' => $this->input->post('tgl-lahir'),
                'alasan' => $this->input->post('alasan')
            ];

            $this->db->insert('daftar_ekskul', $data);

            $this->session->set_flashdata('message', '<div class="text-success pt-3 text-center">
            anda berhasil mendaftar ekskul
            </div>');
            redirect('user/daftarekskul');
        }
    }
}
