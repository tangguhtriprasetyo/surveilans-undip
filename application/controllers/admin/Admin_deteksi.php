<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin_deteksi extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_deteksi");
	}

	public function index()
	{

        if($this->session->userdata('logged_in')){ 
            $data["deteksi"] = $this->m_deteksi->getAll();
		    $this->load->view('admin/v_admin_deteksi', $data);
            
		} else{
			$this->load->view('admin/v_login');
		}
		
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_deteksi->delete($id)) {
            $this->index();
        }
	}
	
	public function export()
     {
          $deteksi = $this->m_deteksi->getAll();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Tanggal Pengisian')
                      ->setCellValue('C1', 'Nama')
                      ->setCellValue('D1', 'Jenis Kelamin')
                      ->setCellValue('E1', 'Tanggal Lahir')
                      ->setCellValue('F1', 'Email')
                      ->setCellValue('G1', 'No. HP')
                      ->setCellValue('H1', 'No. Kerabat')
                      ->setCellValue('I1', 'Tempat Tinggal')
                      ->setCellValue('J1', 'Alamat')
                      ->setCellValue('K1', 'Daerah Asal')
                      ->setCellValue('L1', 'Pendidikan')
                      ->setCellValue('M1', 'Pekerjaan')
                      ->setCellValue('N1', 'Skor Survey');

          $kolom = 2;
          $nomor = 1;
          foreach($deteksi as $key => $deteksi) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $deteksi->date)
                           ->setCellValue('C' . $kolom, $deteksi->nama)
                           ->setCellValue('D' . $kolom, $deteksi->gender)
                           ->setCellValue('E' . $kolom, $deteksi->ttl)
                           ->setCellValue('F' . $kolom, $deteksi->email)
                           ->setCellValue('G' . $kolom, $deteksi->hp)
                           ->setCellValue('H' . $kolom, $deteksi->kerabat)
                           ->setCellValue('I' . $kolom, $deteksi->tinggal)
                           ->setCellValue('J' . $kolom, $deteksi->alamat)
                           ->setCellValue('K' . $kolom, $deteksi->asal)
                           ->setCellValue('L' . $kolom, $deteksi->pendidikan)
                           ->setCellValue('M' . $kolom, $deteksi->pekerjaan)
                           ->setCellValue('N' . $kolom, $deteksi->skor);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
		  ob_end_clean();
            header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="Data_Hasil_Deteksi_dan_Penilaian_Resiko.xlsx"');
	        header('Cache-Control: max-age=0');

	  $writer->save('php://output');
     }
}
