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
		$data["deteksi"] = $this->m_deteksi->getAll();
		$this->load->view('admin/v_admin_deteksi', $data);
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
          foreach($deteksi as $key => $deteksi) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $deteksi->date)
                           ->setCellValue('C' . $kolom, $deteksi->nama)
                           ->setCellValue('D' . $kolom, $deteksi->email)
                           ->setCellValue('E' . $kolom, $deteksi->usia)
                           ->setCellValue('F' . $kolom, $deteksi->hp)
                           ->setCellValue('G' . $kolom, $deteksi->posisi)
                           ->setCellValue('H' . $kolom, $deteksi->wilayah)
                           ->setCellValue('I' . $kolom, $deteksi->pekerjaan)
                           ->setCellValue('J' . $kolom, $deteksi->wfh)
                           ->setCellValue('K' . $kolom, $deteksi->kesulitan)
                           ->setCellValue('L' . $kolom, $deteksi->tempat_kerja)
                           ->setCellValue('M' . $kolom, $deteksi->skor);

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
