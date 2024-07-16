<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        // if ($this->session->userdata('email')) {
        //     redirect('auth');
        // };

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'email salah!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        } else {
            // validasi berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // user ada
        if ($user) {
            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role_id' => $user['role_id']
                ];

                $this->session->set_userdata($data);
                if ($user['role_id'] == 'admin') {
                    redirect('admin');
                } else {
                    redirect('pengelola');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            // user tidak ada
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function lupaPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'email salah!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/lupa-password');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Periksa email anda untuk reset password!. </div>');
                redirect('auth/lupaPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda belum terdaftar!. </div>');
                redirect('auth/lupaPassword');
            }
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ayu805780@gmail.com',
            'smtp_pass' => 'lrrqojwokxlyaokf',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('ayu805780@gmail.com', 'Admin-SiTani');
        $this->email->to($this->input->post('email'));

        if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('Click this link to reset password : 
                <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">
                Reset Password
                </a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->ubahpassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, Token salah! </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Reset password gagal, Email salah! </div>');
            redirect('auth');
        }
    }

    public function ubahpassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
            'min_length' => 'password minimal 8 character',
            'matches' => 'password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[8]|matches[password1]', [
            'min_length' => 'password minimal 8 character',
            'matches' => 'password tidak sama'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/ubah-password');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');
            $this->db->delete('user_token', ['email' => $email]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password berhasil di ubah!, Silahkan Login. </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
        redirect('Auth');
    }
}
