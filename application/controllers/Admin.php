<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data'] = $this->M_pohon->get_all_pohon();

        $this->load->view('admin/index', $data);
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/profile/profile', $data);
    }
    public function editProfile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/profile/edit-profile', $data);
        } else {
            $email = $this->input->post('email');
            $nama = $this->input->post('nama');

            // cek kalu ada gambar yang akan diupdate
            $upload_img = $_FILES['img']['nama'];
            if ($upload_img) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png|svg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {
                    $old_img = $data['user']['img'];
                    if ($old_img != 'default.png') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                    $this->db->set('img', $new_img);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('email', $email);
            $this->db->set('nama', $nama);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profile anda sudah diubah! </div>');
            redirect('admin/editProfile');
        }
    }
    public function tambahUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'email sudah terdaftar!',
            'valid_email' => 'email salah!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password minimal 8 charakter'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/profile/tambah-user');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => $email,
                'img' => 'default.png',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'is_active' => '1',
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User berhasil ditambahkan!</div>');
            redirect('admin/tambahUser');
        }
    }

    public function jadwal()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/tugas/jadwal.php', $data);
    }
}
