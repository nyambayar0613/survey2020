<?php

require_once "test/XLSXWriter.php";

class excel_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function export_excel($query, $excelfilename, $excelheader)
    {
        $qry = $this->db->prepare($query);
        $qry->execute();
        $datatest = array();

        while ($rows = $qry->fetch(PDO::FETCH_ASSOC)) {
            $num = 0;
            $row2 = array();
            foreach ($rows as $key => $value) {
                $row2[] = $value;
            }

            $datatest[] = $row2;
        }


        ini_set('display_errors', 0);
        ini_set('log_errors', 1);
        error_reporting(E_ALL & ~E_NOTICE);

        $filename = $excelfilename;


        ob_end_clean();
        ob_start();

        header('Content-disposition: attachment; filename="' . XLSXWriter::sanitize_filename($filename) . '"');
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');


        $header = $excelheader;

//         $header = array(
//             'Ãâ€“ÃÂ¸ÃÂ»'=>'string',
//             'month'=>'string',
//             'amount'=>'money',
//             'first_event'=>'datetime',
//             'second_event'=>'date',
//         );
//         $data2 = array(
//             array('2003','1','-50.5','2010-01-01 23:00:00','2012-12-31 23:00:00'),
//             array('2003','=B1', '23.5','2010-01-01 00:00:00','2012-12-31 00:00:00'),
//         );

        $writer = new XLSXWriter();
        $writer->setAuthor('Nyambayar');
        $writer->writeSheet($datatest, 'Sheet1', $header);


        // $writer->writeSheet($data1,'Sheet1',$header);
        //$writer->writeSheet($data2,'Sheet2', $header);


        $writer->writeToStdOut();

        //$writer->writeToFile('example.xlsx');
        //echo $writer->writeToString();

        exit(0);
    }
}