<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pohon extends CI_Controller
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

        $this->load->view('pohon/daftar-pohon', $data);
    }

    public function tambahpohon()
    {
        $data['data'] = $this->M_pohon->get_all_pohon();

        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('penanaman', 'Penanaman', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('pohon/tambah-pohon', $data);
        } else {
            $kode = $this->input->post('kode');
            $name = $this->input->post('name');
            $jenis = $this->input->post('jenis');
            $penanaman = $this->input->post('penanaman');

            $this->load->library('ciqrcode'); //pemanggilan library QR CODE

            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']        = './assets/'; //string, the default is application/cache/
            $config['errorlog']        = './assets/'; //string, the default is application/logs/
            $config['imagedir']        = './assets/images/pohon/barcode/'; //direktori penyimpanan qr code
            $config['quality']        = true; //boolean, the default is true
            $config['size']            = '1024'; //interger, the default is 1024
            $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
            $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);

            $image_name = $name . '.png'; //buat name dari qr code sesuai dengan nama

            $params['data'] = "http://localhost/kerjapraktek/pohon/cek/" . $kode; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

            $this->M_pohon->simpan_pohon($kode, $name, $jenis, $penanaman, $image_name); //simpan ke database
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">pohon baru berhasil ditambahkan!</div>');
            redirect('pohon/tambahpohon');
        }
    }

    public function cek($kode)
    {
        $data['data'] = $this->M_pohon->getKode($kode);
        $this->load->view('pohon/detail-qr', $data);
    }

    public function detailpohon()
    {
        $this->load->view('pohon/detail-pohon');
    }

    public function editdetailqr($kode)
    {
        $data['data'] = $this->M_pohon->getKode($kode);
        $data['pohon'] = $this->db->get('pohon')->result_array();
        $this->load->view('pohon/editdetail-qr', $data);
    }

    public function updatePohon()
    {
        $data['data'] = $this->db->get('pohon')->result_array();
        $data['pohon'] = $this->M_pohon->semuaData()->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim');
        $this->form_validation->set_rules('usia', 'Usia', 'required|trim');
        $this->form_validation->set_rules('penanaman', 'Penanaman', 'required|trim');
        $this->form_validation->set_rules('penyemprotan', 'Penyemprotan', 'required|trim');
        $this->form_validation->set_rules('pemupukan', 'Pemupukan', 'required|trim');
        $this->form_validation->set_rules('pemanenan', 'Pemanenan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('pohon/editdetail-qr', $data);
        } else {
            $id = $this->input->post('id');
            $kode = $this->input->post('kode');
            $name = $this->input->post('name');
            $jenis = $this->input->post('jenis');
            $usia = $this->input->post('usia');
            $penanaman = $this->input->post('penanaman');
            $penyemprotan = $this->input->post('penyemprotan');
            $pemupukan = $this->input->post('pemupukan');
            $pemanenan = $this->input->post('pemanenan');

            // cek kalu ada gambar yang akan diupdate
            $upload_img = $_FILES['img']['name'];
            if ($upload_img) {
                $config['allowed_types'] = 'jpg|jpeg|png|svg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/pohon/img/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('img')) {
                    $old_img = $data['pohon']['img'];
                    if ($old_img != 'pohon.svg') {
                        unlink(FCPATH . 'assets/images/pohon/img/' . $old_img);
                    }
                    $new_img = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode' => $kode,
                'name' => $name,
                'jenis' => $jenis,
                'usia' => $usia,
                'tgl_penanaman' => $penanaman,
                'tgl_penyemprotan' => $penyemprotan,
                'tgl_pemupukan' => $pemupukan,
                'tgl_pemanenan' => $pemanenan,
                'img' => $new_img
            );

            $where = array(
                'id' => $id
            );

            $this->M_pohon->updatePohon($data, $where, 'pohon');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">data pohon berhasil di update!</div>');
            redirect('scan');
        }
    }
}
