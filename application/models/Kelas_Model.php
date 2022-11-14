<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas_Model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('tabel_2001050001')->result_array();
    }
}