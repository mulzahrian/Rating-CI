<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . "/third_party/TCPDF-master/tcpdf.php";

class Pdf extends TCPDF {

    function __construct() {
        parent::__construct();
    }

    public function Header() {
        //$this->SetFont('helvetica', '', 10);
        $pageN = $this->PageNo();
        $pageTot = $this->getAliasNbPages();
        //$image_file = K_PATH_IMAGES.'logo.jpg';
        //$this->Image($image_file, 10, 10, 20, 18, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->SetFont('helvetica', '', 10);
        // Title
        //$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        //$image_file = "<img src=\"" . base_url() . 'assets/app/media/img/logos/logo.png' . "\" width=\"55\" height=\"45\"/>";
        //$this->SetY(10);
        //$isi_header = "<table align=\"right\"> <tr> <td>" . $image_file . "</td> </tr> </table>";
        //$this->writeHTML($isi_header, true, false, false, false, '');
        $image_file = "<img src=\"" . base_url() . 'assets/app/media/img/logos/logo.jpg' . "\" width=\"55\" height=\"45\"/>";
        //$this->SetY(15);
        $isi_header = '<br><br><br><table border="1" cellpadding="1">'
                . '<tr>'
                . '     <td rowspan="3" width="10%" align="center" valign="bottom"><img src="' . base_url() . 'assets/app/media/img/logos/logo2.jpg" height="47" style="margin:20px"/></td>'
                . '     <td colspan="4" width="90%" align="center">'
                . '         <b>FORMULIR LAMARAN KERJA</b><br><i>EMPLOYMENT APPLICATION FORM</i>'
                . '     </td>'
                . '</tr>'
                . '<tr>'
                . '     <td width="15%" align="center">Rev</td>'
                . '     <td width="30%" align="center">Tanggal Terbit</td>'
                . '     <td width="15%" align="center">Hal</td>'
                . '     <td width="30%" align="center">No. Dokumen</td>'
                . '</tr>'
                . '<tr>'
                . '     <td align="center">00</td>'
                . '     <td align="center">1 April 2013</td>'
                . '     <td align="center">' . $pageN . '/' . $pageTot . '</td>'
                . '     <td align="center">VI-F-HRD-002</td>'
                . '</tr>'
                . '</table>';
        $this->writeHTML($isi_header, true, false, false, false, '');

        $this->SetLineStyle(array('width' => 2, 'color' => array(119, 69, 0)));
        //set line top
        $this->Line(9, 5, $this->getPageWidth() - 9, 5);
        //set line right
        $this->Line($this->getPageWidth() - 10, 5, $this->getPageWidth() - 10, $this->getPageHeight() - 9);
        //set line bottom
        $this->Line(10, $this->getPageHeight() - 10, $this->getPageWidth() - 10, $this->getPageHeight() - 10);
        //set line left
        $this->Line(10, 5, 11, $this->getPageHeight() - 10);
    }

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */