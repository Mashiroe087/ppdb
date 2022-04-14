<?php

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('form_validation');
        $this->load->model('Model_pendaftaran');
        // $kode1 = $this->Model_pendaftaran->kodePassword();

    }
    public function index()
    {
        $kode['kodeunik'] = $this->Model_pendaftaran->kode();
        $kode1 = $this->Model_pendaftaran->kodePassword();

        $data['judul'] = 'Pendaftaran | SMK Wirakarya 2';

        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim|min_length[10]|max_length[10]', array('required' => 'The field is required'));
        $this->form_validation->set_rules('skhu', 'SKHU', 'required|trim|min_length[13]|max_length[13]', array('required' => 'The field is required'));
        $this->form_validation->set_rules('name', 'Name', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('sekolah_asal', 'Sekolah_asal', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('hp', 'Hp', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftaran.email]', array('required' => 'The field is required', 'is_unique' => 'This email has already registered'));
        $this->form_validation->set_rules('status', 'Status', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('anak', 'Anak', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('name_ayah', 'Name_ayah', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('pkr_ayah', 'Pkr_ayah', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('name_ibu', 'Name_ibu', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('pkr_ibu', 'Pkr_ibu', 'required|trim', array('required' => 'The field is required'));
        $this->form_validation->set_rules('hp_ortu', 'Hp_ortu', 'required|trim', array('required' => 'The field is required'));

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftaran_view', $kode);
            $this->load->view('templates/footer');
        } else {
            $email = $this->input->post('email', true);
            $data1 = [
                'nama' => $this->input->post('name', true),
                'email' => $email,
                'image' => 'default.png',
                'password' => password_hash($kode1, PASSWORD_DEFAULT),
                'role_id' => '2',
                'is_active' => '1',
            ];

            $this->db->insert('user', $data1);
            $this->Model_pendaftaran->savePendaftaran();

            $this->_sendEmail();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Thank You For Your Registration. Please Check Your Email.</div>');
            redirect('login');
        }
    }

    private function _sendEmail()
    {
        $kode1 = $this->Model_pendaftaran->kodePassword();
        $email = $this->input->post('email');
        $kode2 = intval($kode1) - 1;

        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'kuro.mashiroe@gmail.com';
        $config['smtp_pass'] = 'musaku087';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";


        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('kuro.mashiroe@gmail.com', 'SMK Wirakarya 2');
        $this->email->to($email);
        $this->email->subject('Registerasi SMK Wirakarya 2');
        $this->email->message(
            'Terima kasih telah mendaftar ke SMK Wirakarya 2. Silahkan menyelesaikan pembayaran ke rekening berikut :
        <br>BCA : 3931****
        <br>MANDIRI : 3123****
        <br>* Harap upload bukti pembayaran ke website PPDB SMK Wirakarya 2
        <br><br>
        YOUR ACCOUNT
        <br>USERNAME : ' . $this->input->post('email') . '
        <br>PASSWORD : ' . $kode2 . ''
        );

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
