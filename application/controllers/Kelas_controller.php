<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_controller extends CI_Controller
{

    public function index()
    {
        $data ['mahasiswa'] = $this->Kelas_Model->SemuaData();
        $this->load->view('viewdata', $data);
    }

}


