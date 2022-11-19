<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class AsetController extends CI_Controller
{

    //FUNGSI MENAMPILKAN DATA KE HALAMAN VIEWDATA_ASET
    public function index()
    {
        //$var_bebas['var dari view'] = ....
        $data['aset'] = $this->Kelas_Model->AmbilSemua();
        $this->load->view('viewdata_aset',$data);
    }

    //FUNGSI MENAMPILKAN HALAMAN TAMBAH DATA
    public function tambah()
    {
        $this->load->view('v_tambah');
    }

    //FUNGSI UNTUK PROSES FORM TAMBAH DATA
    public function proses_tambahdata()
    {
        $this->Kelas_Model->method_model_tambahdata();
        redirect('asetcontroller/index');
        
    }

}