<?php

use FontLib\Table\Type\post;

class Kelola_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');

        logged_in();
    }

    public function index()
    {

        // tampil search
        if ($this->input->post('submit')) {
            $data1['keyword'] = $this->input->post('keyword');
            // $this->session->set_userdata('keyword', $data1['keyword']);
        } else {
            $data1['keyword'] = null;
        }

        //konfigurasi pagination
        $config['base_url'] = site_url('kelola_siswa/index'); //site url
        $this->db->like('pendaftaran.no_pendaftaran', $data1['keyword']);
        $this->db->or_like('pendaftaran.nama', $data1['keyword']);
        $this->db->or_like('pendaftaran.jurusan', $data1['keyword']);
        $this->db->join('user', 'user.email = pendaftaran.email');
        $this->db->from('pendaftaran');
        $config['total_rows'] = $this->db->count_all_results(); //total row
        $data1['total'] = $config['total_rows'];
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $this->pagination->initialize($config);
        $data1['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->load->model('Model_admin');
        // $data1['siswa1'] = $this->Model_admin->getAllSiswa();
        $data1['siswa'] = $this->Model_admin->getAll1($config["per_page"], $data1['page'], $data1['keyword']);
        $data1['pagination'] = $this->pagination->create_links();


        $data['judul'] = 'PPDB SMK WIRAKARYA 2';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin');
        $this->load->view('admin/kelola_siswa', $data1);
        $this->load->view('templates/user/footer');
    }

    public function detail()
    {
        $this->load->model('Model_admin');
        echo json_encode($this->Model_admin->getById($_POST['no_pendaftaran']));
    }

    public function detailSiswa()
    {
        $this->load->model('Model_admin');
        echo json_encode($this->Model_admin->getById1($_POST['no_pendaftaran']));
    }

    public function edit()
    {
        $email1 = $this->input->post('email1', true);
        $data1 = [
            'email' => $email1,
            'nama' => $this->input->post('nama1', true),
        ];
        $this->db->where('email', $email1);
        $this->db->update('user', $data1);

        $this->load->model('Model_admin');
        $this->Model_admin->updateSiswa();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Edit data success.</div>');
        redirect('kelola_siswa');
    }

    public function delete($id)
    {
        $this->load->model('Model_admin');
        $this->Model_admin->delete($id);

        $this->db->delete('user', array("email" => $id));
        $this->db->delete('file', array("email" => $id));
        // $this->db->where('pendaftaran.email = user.email');
        // $this->db->where('pendaftaran.email', $id);
        // $this->db->delete(array('pendaftaran', 'user'));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data has deleted.</div>');
        redirect('kelola_siswa');
    }

    public function search()
    {
        $this->load->model('Model_admin');
        $data1['siswa'] = $this->Model_admin->searchSiswa();
        $data1['pagination'] = $this->pagination->create_links();

        $data['judul'] = 'PPDB SMK WIRAKARYA 2';

        $this->load->view('templates/user/header', $data);
        $this->load->view('templates/sidebar/admin', $data1);
        $this->load->view('admin/kelola_siswa', $data1);
        $this->load->view('templates/user/footer');
    }

    public function proses_download($id)
    {
        $this->db->select('image');
        $this->db->from('file');
        $this->db->where('no_pendaftaran', $id);
        $file_name = $this->db->get();
        $this->load->helper(array('url', 'download'));
        force_download('./assets/img/foto/' . $file_name, NULL);
    }
}
