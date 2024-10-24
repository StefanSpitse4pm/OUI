<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->setCellValue('A1', 'Naam');
    $sheet->setCellValue('B1', 'Email');
    $sheet->setCellValue('C1', 'Bericht');

    $sheet->setCellValue('A2', $naam);
    $sheet->setCellValue('B2', $email);
    $sheet->setCellValue('C2', $bericht);

    $writer = new Xlsx($spreadsheet);

    ob_end_clean();

    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="form_data.xlsx"');
    header('Cache-Control: max-age=0');

    try {
        $writer->save('php://output');
    } catch (Exception $e) {
        echo 'Error saving file: ', $e->getMessage();
    }
    exit;
}

?>
