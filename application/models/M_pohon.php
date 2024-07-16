<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pohon extends CI_Model
{

    public function get_all_pohon()
    {
        $hasil = $this->db->get('pohon');
        return $hasil;
    }

    public function semuaData()
    {
        return $this->db->get('pohon');
    }

    public function getKode($kode)
    {
        $sql = "SELECT * FROM pohon WHERE kode = '$kode'";
        $query = $this->db->query($sql);
        $data = $query->result();
        return $data;
    }

    public function simpan_pohon($kode, $name, $jenis, $penanaman, $image_name)
    {
        $data = array(
            'img'         => 'pohon.svg',
            'kode'         => $kode,
            'name'         => $name,
            'jenis'     => $jenis,
            'tgl_penanaman'     => $penanaman,
            'barcode'     => $image_name,
            'date_created' => time()
        );
        $this->db->insert('pohon', $data);
    }

    public function updatePohon($data, $where, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
