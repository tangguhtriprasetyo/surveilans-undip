<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Admin_apd extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_apd");
	}

	public function index()
	{

        if($this->session->userdata('logged_in')){ 
            $data["apd"] = $this->m_apd->getAll();
		    $this->load->view('admin/v_admin_apd', $data);
            
		} else{
			$this->load->view('admin/v_login');
		}
		
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_apd->delete($id)) {
            $this->index();
        }
	}
	
	public function export()
     {
          $apd = $this->m_apd->getAll();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Tanggal Pengisian')
                      ->setCellValue('C1', 'Nama Instansi')
                      ->setCellValue('D1', 'Jenis Instansi')
                      ->setCellValue('E1', 'Alamat')
                      ->setCellValue('F1', 'Kontak')
                      ->setCellValue('G1', 'Daerah Asal Instansi')
                      ->setCellValue('H1', 'Status PSBB Wilayah')
                      ->setCellValue('I1', 'Koordinasi Dengan Pemda')
                      ->setCellValue('J1', 'Pelatihan Terkait Covid-19')
                      ->setCellValue('K1', 'Terdapat Kasus Positif')
                      ->setCellValue('L1', 'Terdapat Layanan Rapid Tes')
                      ->setCellValue('M1', 'Terdapat Layanan SWAB')
                      ->setCellValue('N1', 'Tersedia Hand Sanitizer')
                      ->setCellValue('O1', 'Tersedia Thermometer Infrared')
                      ->setCellValue('P1', 'Tersedia Ruang Isolasi')
                      ->setCellValue('Q1', 'Kondisi Ruang Isolasi');

          $kolom = 2;
          $nomor = 1;
          foreach($apd as $key => $apd) {

				$spreadsheet->setActiveSheetIndex(0)
							->setCellValue('A' . $kolom, $nomor)
							->setCellValue('B' . $kolom, $apd->date)
							->setCellValue('C' . $kolom, $apd->nama)
							->setCellValue('D' . $kolom, $apd->jenis)
							->setCellValue('E' . $kolom, $apd->alamat)
							->setCellValue('F' . $kolom, $apd->kontak)
							->setCellValue('G' . $kolom, $apd->daerah)
							->setCellValue('H' . $kolom, $apd->psbb)
							->setCellValue('I' . $kolom, $apd->koordinasi)
							->setCellValue('J' . $kolom, $apd->pelatihan)
							->setCellValue('K' . $kolom, $apd->kasus)
							->setCellValue('L' . $kolom, $apd->rapid)
							->setCellValue('M' . $kolom, $apd->swab)
							->setCellValue('N' . $kolom, $apd->sanitizer)
							->setCellValue('O' . $kolom, $apd->thermo)
							->setCellValue('P' . $kolom, $apd->isolasi)
							->setCellValue('Q' . $kolom, $apd->kondisi);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
		  ob_end_clean();
            header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="data_permohonan_apd.xlsx"');
	        header('Cache-Control: max-age=0');

	  $writer->save('php://output');
	 }
	 
	 public function export2()
     {
          $apd = $this->m_apd->getAll();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Tanggal Pengisian')
                      ->setCellValue('C1', 'Nama Instansi')
                      ->setCellValue('D1', 'Jenis Instansi')
                      ->setCellValue('E1', 'Dokter')
                      ->setCellValue('F1', 'Laboran')
                      ->setCellValue('G1', 'Perawat')
                      ->setCellValue('H1', 'Driver Ambulance')
                      ->setCellValue('I1', 'Cleaning Service')
                      ->setCellValue('J1', 'Security')
                      ->setCellValue('K1', 'Masker Bedah')
                      ->setCellValue('L1', 'Masker N95')
                      ->setCellValue('M1', 'Face Shield')
                      ->setCellValue('N1', 'Goggle')
                      ->setCellValue('O1', 'Sarung Tangan Medis')
                      ->setCellValue('P1', 'Hazmat')
                      ->setCellValue('Q1', 'Shoe Cover')
                      ->setCellValue('R1', 'Caps')
                      ->setCellValue('S1', 'Bilik Dekontaminan')
                      ->setCellValue('T1', 'Headbox');

          $kolom = 2;
          $nomor = 1;
          foreach($apd as $key => $apd) {

				$spreadsheet->setActiveSheetIndex(0)
							->setCellValue('A' . $kolom, $nomor)
							->setCellValue('B' . $kolom, $apd->date)
							->setCellValue('C' . $kolom, $apd->nama)
							->setCellValue('D' . $kolom, $apd->jenis)
							->setCellValue('E' . $kolom, $apd->dokter)
							->setCellValue('F' . $kolom, $apd->laboran)
							->setCellValue('G' . $kolom, $apd->perawat)
							->setCellValue('H' . $kolom, $apd->river)
							->setCellValue('I' . $kolom, $apd->cs)
							->setCellValue('J' . $kolom, $apd->security)
							->setCellValue('K' . $kolom, $apd->bedah)
							->setCellValue('L' . $kolom, $apd->n95)
							->setCellValue('M' . $kolom, $apd->faceshield)
							->setCellValue('N' . $kolom, $apd->goggle)
							->setCellValue('O' . $kolom, $apd->medis)
							->setCellValue('P' . $kolom, $apd->hazmat)
							->setCellValue('Q' . $kolom, $apd->cover)
							->setCellValue('R' . $kolom, $apd->caps)
							->setCellValue('S' . $kolom, $apd->dekon)
							->setCellValue('T' . $kolom, $apd->headbox);

               $kolom++;
               $nomor++;

          }

		  $writer = new Xlsx($spreadsheet);
		  ob_end_clean();
		  header('Content-Type: application/vnd.ms-excel');
		  header('Content-Disposition: attachment;filename="data_apd.xlsx"');
		  header('Cache-Control: max-age=0');

	$writer->save('php://output');
   }
}
