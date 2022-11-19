<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_Model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tabel_2001050001')->result_array();
    }


    // METHOD MENAMPILKAN DATA DARI TABEL ASET
    public function AmbilSemua()
    {
        return $this->db->get('tabel_aset')->result_array();
    }

    // METHOD TAMBAH DATA KE TABEL ASET
    public function method_model_tambahdata()
    {
        $dataaset = [
            //"name dari database" =>..... ('name dari form') , ...
            "nama_aset" => $this->input->post('namaaset') ,
            "jenis" => $this->input->post('jenis') ,
            "lokasi" => $this->input->post('lokasi') ,
            "jumlah" => $this->input->post('jumlah') ,
        ];
        $this->db->insert('tabel_aset',$dataaset);
    }
}