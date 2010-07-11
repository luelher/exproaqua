<?php

require_once dirname(__FILE__).'/../lib/informenesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/informenesGeneratorHelper.class.php';

/**
 * informenes actions.
 *
 * @package    exproaqua
 * @subpackage informenes
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class informenesActions extends autoInformenesActions
{
  public function executeEdit(sfWebRequest $request) {
    $this->redirect('@ord_pro_informenes');
  }


  public function executeInforme(sfWebRequest $request)
  {
    $config = sfTCPDFPluginConfigHandler::loadConfig();

    // pdf object
    $pdf = new PDFInforme();

    // settings
    //$pdf->SetFont('FreeSerif', '', 12);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->Body($request->getParameter('id'));
    // output
    $pdf->Output();

    // Stop symfony process
    throw new sfStopException();
  }

}
