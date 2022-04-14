<?php defined('BASEPATH') or die('No direct script access allowed');

require('./application/third_party/excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
    }

    public function index()
    {
        $data['user'] = $this->Model_admin->getSiswa();
        $this->load->view('export', $data);
    }

    public function export_file()
    {
        $user = $this->Model_admin->getSiswa()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'No.Pendaftaran')
            ->setCellValue('C1', 'NISN')
            ->setCellValue('D1', 'SKHUN')
            ->setCellValue('E1', 'Nama Lengkap')
            ->setCellValue('F1', 'Sekolah Asal')
            ->setCellValue('G1', 'Tempat Lahir')
            ->setCellValue('H1', 'Tanggal Lahir')
            ->setCellValue('I1', 'Jenis Kelamin')
            ->setCellValue('J1', 'Alamat')
            ->setCellValue('K1', 'Hp')
            ->setCellValue('L1', 'Email')
            ->setCellValue('M1', 'Agama')
            ->setCellValue('N1', 'Bid. Studi Yang Dipilih')
            ->setCellValue('O1', 'Status Dalam Keluarga')
            ->setCellValue('P1', 'Anak-ke')
            ->setCellValue('Q1', 'Kewarganegaraan')
            ->setCellValue('R1', 'Nama Ayah')
            ->setCellValue('S1', 'Pekerjaan Ayah')
            ->setCellValue('T1', 'Nama Ibu')
            ->setCellValue('U1', 'Pekerjaan Ibu')
            ->setCellValue('V1', 'No. Tlp / Hp Orang Tua')
            ->setCellValue('W1', 'Tanggal Pendaftaran');

        $kolom = 2;
        $nomor = 1;
        foreach ($user as $u) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $u->no_pendaftaran)
                ->setCellValue('C' . $kolom, $u->nisn)
                ->setCellValue('D' . $kolom, $u->skhun)
                ->setCellValue('E' . $kolom, $u->nama)
                ->setCellValue('F' . $kolom, $u->sekolah_asal)
                ->setCellValue('G' . $kolom, $u->tempat_lahir)
                ->setCellValue('H' . $kolom, $u->tgl_lahir)
                ->setCellValue('I' . $kolom, $u->jenis_kelamin)
                ->setCellValue('J' . $kolom, $u->alamat)
                ->setCellValue('K' . $kolom, $u->hp)
                ->setCellValue('L' . $kolom, $u->email)
                ->setCellValue('M' . $kolom, $u->agama)
                ->setCellValue('N' . $kolom, $u->jurusan)
                ->setCellValue('O' . $kolom, $u->status)
                ->setCellValue('P' . $kolom, $u->anak_ke)
                ->setCellValue('Q' . $kolom, $u->kewarganegaraan)
                ->setCellValue('R' . $kolom, $u->nama_ayah)
                ->setCellValue('S' . $kolom, $u->pekerjaan_ayah)
                ->setCellValue('T' . $kolom, $u->nama_ibu)
                ->setCellValue('U' . $kolom, $u->pekerjaan_ibu)
                ->setCellValue('V' . $kolom, $u->hp_ortu)
                ->setCellValue('W' . $kolom, $u->tgl_pendaftaran);

            $kolom++;
            $nomor++;
        }


        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="PPDB SMK Wirakarya 2020.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
