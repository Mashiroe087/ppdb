<?php

class Model_user extends CI_Model
{
    function getData()
    {
        $data_siswa = $this->db->get('pendaftaran');
        return $data_siswa->result();
    }
}
