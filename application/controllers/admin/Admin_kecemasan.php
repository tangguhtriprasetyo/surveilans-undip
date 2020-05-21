<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Admin_kecemasan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_resiko");
	}

	public function index()
	{
		
        
        if($this->session->userdata('logged_in')){ 
            $data["resiko"] = $this->m_resiko->getAll();
            $this->load->view('admin/v_admin_kecemasan', $data);
            
		} else{
			$this->load->view('admin/v_login');
		}
	}

	public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_resiko->delete($id)) {
            $this->index();
        }
	}
	
	public function export()
     {
          $resiko = $this->m_resiko->getAll();

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'Tanggal Pengisian')
                      ->setCellValue('C1', 'Nama')
                      ->setCellValue('D1', 'Email')
                      ->setCellValue('E1', 'Usia')
                      ->setCellValue('F1', 'No HP')
                      ->setCellValue('G1', 'Posisi Sekarang')
                      ->setCellValue('H1', 'Status Wilayah')
                      ->setCellValue('I1', 'Pekerjaan')
                      ->setCellValue('J1', 'WFH')
                      ->setCellValue('K1', 'Kesulitan WFH')
                      ->setCellValue('L1', 'Tempat Kerja')
                      ->setCellValue('M1', 'Skor Survey');

          $kolom = 2;
          $nomor = 1;
          foreach($resiko as $key => $resiko) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $resiko->date)
                           ->setCellValue('C' . $kolom, $resiko->nama)
                           ->setCellValue('D' . $kolom, $resiko->email)
                           ->setCellValue('E' . $kolom, $resiko->usia)
                           ->setCellValue('F' . $kolom, $resiko->hp)
                           ->setCellValue('G' . $kolom, $resiko->posisi)
                           ->setCellValue('H' . $kolom, $resiko->wilayah)
                           ->setCellValue('I' . $kolom, $resiko->pekerjaan)
                           ->setCellValue('J' . $kolom, $resiko->wfh)
                           ->setCellValue('K' . $kolom, $resiko->kesulitan)
                           ->setCellValue('L' . $kolom, $resiko->tempat_kerja)
                           ->setCellValue('M' . $kolom, $resiko->skor);

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
		  ob_end_clean();
            header('Content-Type: application/vnd.ms-excel');
	        header('Content-Disposition: attachment;filename="Data_Penilaian_Tingkat_Kecemasan.xlsx"');
	        header('Cache-Control: max-age=0');

	  $writer->save('php://output');
	 }

}