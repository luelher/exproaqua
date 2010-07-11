<?php


class PDFInforme extends sfTCPDF {

	var $flowingBlockAttr;
	var $widths;
	var $aligns;
	var $conf;
	var $angle=0;
  var $jump=6;

  public function __construct($orientation='P', $unit='mm', $format='A4', $unicode=true, $encoding='UTF-8', $diskcache=false)
  {
    parent::__construct($orientation, $unit, $format, $unicode, $encoding, $diskcache);
    $this->headerCallback = 'MyHeader';
            
  }

  /**
   * This method is used to render the page header.
   * It is automatically called by AddPage() and could be overwritten using a Callback.
   *
   * @access public
   * @see $headerCallback
   */
  public function Header()
  {
    if ($this->print_header)
    {
      $this->MyHeader();
    }
  }

  public function MyHeader()
  {
    $ormargins = $this->getOriginalMargins();
    $headerfont = $this->getHeaderFont();
    $headerdata = $this->getHeaderData();
    if (($headerdata['logo']) AND ($headerdata['logo'] != K_BLANK_IMAGE)) {
      $this->Image(K_PATH_IMAGES.$headerdata['logo'], '', '', $headerdata['logo_width']);
      $imgy = $this->getImageRBY();
    } else {
      $imgy = $this->GetY();
    }
    $cell_height = round(($this->getCellHeightRatio() * $headerfont[2]) / $this->getScaleFactor(), 2);
    // set starting margin for text data cell
    if ($this->getRTL()) {
      $header_x = $ormargins['right'] + ($headerdata['logo_width'] * 1.1);
    } else {
      $header_x = $ormargins['left'] + ($headerdata['logo_width'] * 1.1);
    }
    $this->SetTextColor(0, 0, 0);
    // header title
    $this->SetFont($headerfont[0], 'B', $headerfont[2] + 1);
    $this->SetX($header_x);
    $this->Cell(0, $cell_height, $headerdata['author'], 0, 1, '', 0, '', 0);
    // header string
    $this->SetFont($headerfont[0], $headerfont[1], $headerfont[2]);
    $this->SetX($header_x);
    $this->MultiCell(0, $cell_height, $headerdata['string'], 0, '', 0, 1, '', '', true, 0, false);

    // my header title
    $this->SetFont($headerfont[0], 'B', $headerfont[2] + 4);
    $this->SetXY($header_x + 30,25);
    $this->MultiCell(0, $cell_height, $headerdata['title'], 0, '', 0, 1, '', '', true, 0, false);

    //$this->Cell(0, $cell_height, $headerdata['title'], 0, 1, '', 0, '', 0);
    
    // print an ending header line
    $this->SetLineStyle(array('width' => 0.85 / $this->getScaleFactor(), 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0)));
    $this->SetY((2.835 / $this->getScaleFactor()) + max($imgy, $this->GetY()));
    if ($this->getRTL()) {
      $this->SetX($ormargins['right']);
    } else {
      $this->SetX($ormargins['left']);
    }
    $this->Cell(0, 0, '', 'T', 0, 'C');
  }


		/**
	 	 * Set header data.
		 * @param string $ln header image logo
		 * @param string $lw header image logo width in mm
		 * @param string $ht string to print as title on document header
		 * @param string $hs string to print on document header
		 * @access public
		 */
		public function setHeaderData($ln='', $lw=0, $ht='', $hs='', $a) {
			$this->header_logo = $ln;
			$this->header_logo_width = $lw;
			$this->header_title = $ht;
			$this->header_string = $hs;
      $this->author = $a;
		}

		/**
	 	 * Returns header data:
	 	 * <ul><li>$ret['logo'] = logo image</li><li>$ret['logo_width'] = width of the image logo in user units</li><li>$ret['title'] = header title</li><li>$ret['string'] = header description string</li></ul>
		 * @return array()
		 * @access public
		 * @since 4.0.012 (2008-07-24)
		 */
		public function getHeaderData() {
			$ret = array();
			$ret['logo'] = $this->header_logo;
			$ret['logo_width'] = $this->header_logo_width;
			$ret['title'] = $this->header_title;
			$ret['string'] = $this->header_string;
      $ret['author'] = $this->author;
			return $ret;
		}

    public function Body($id)
    {

      // init pdf doc
      $this->AliasNbPages();
      $this->AddPage();
      $this->Ln(8);

      // Encabezado del detalle del reporte
      $ordpro = Doctrine::getTable('OrdPro')->findOneBy('id', $id);
      if($ordpro){

        $this->border = false;
        $this->setX(15);
        $this->SetFont('helvetica', 'B', 12);
        $this->setwidths(array(45,65));
        $this->jump = 5;
        $this->setaligns(array("L","L"));
        $this->rowm(array('Nro. de Orden: ',$ordpro->getNumord()));

        $this->SetFont('helvetica', '', 9);
        $this->setwidths(array(30,65,35,35));
        $this->jump = 5;
        $this->setaligns(array("L","L","L","L"));
        $fecrep=date('d/m/Y',strtotime($ordpro->getFecrep()));
        $this->rowm(array('Fecha Petición: ',date('d/m/Y',strtotime($ordpro->getFecord())),'Fecha Reporte: ',($fecrep=='31/12/1969' ? 'Sin Reporte' : $fecrep)));

        $this->setwidths(array(30,65));
        $this->jump = 5;
        $this->setaligns(array("L","L"));
        $this->rowm(array('Descripción: ',$ordpro->getDesord()));

        $this->ln();

        $this->SetFont('helvetica', 'B', 12);
        $this->jump = 6;
        $this->rowm(array('Productos',''));

        //$this->setXY(15,10+10+10+15+15);

        $ordpropro = $ordpro->getProductos();
        $this->setwidths(array(30,65  ,35,35));
        $this->setaligns(array("L","L","R","R"));
        $this->SetFont('helvetica', 'B', 9);
        $this->border = true;
        $this->rowm(array("Codigo Producto","Descripción","Cantidad a Producir", "Cantidad Producida"));
        $this->SetFont('helvetica', '', 8);
        foreach($ordpropro as $opp)
        {
          $articulo = $opp->getArticuloCompuesto();
          $this->rowm(array($opp->artcomp,$articulo->nombre,$opp->cantidad, $opp->resultado));
        }

        $this->ln();

        $this->border = false;
        $this->SetFont('helvetica', 'B', 12);
        $this->setaligns(array("L","L"));
        $this->setwidths(array(65,65));
        $this->jump = 6;
        $this->rowm(array('Materia Prima',''));

        $this->SetFont('helvetica', 'B', 9);
        $this->setwidths(array(30,65  ,35,35));
        $this->setaligns(array("L","L","R","R"));
        $this->border = true;
        $this->rowm(array("Codigo Producto","Descripción","Cantidad a Usar", "Residuo"));
        $this->SetFont('helvetica', '', 8);

        $ordmatpri = $ordpro->getMateriaPrima();
        foreach($ordmatpri as $matpri)
        {
          $articulo = $matpri->getMateriaPrima();
          $this->rowm(array($matpri->artcomp,$articulo->nombre,$matpri->cantidad, $matpri->resultado));
        }

      }else{
        $this->Cell(20,10, 'Sin Datos Para Mostrar');
      }
    }


	function SetAligns($a='L')
	{
		//Set the array of column alignments
		if(!is_array($a))
		{
			$this->aligns=array();
			$this->aligns=array_pad($this->aligns,count($this->widths),$a);
		}
		else
		$this->aligns=$a;
	}

	function Row($data)
	{
		//Calculate the height of the row
		$nb=0;
		for($i=0;$i<count($data);$i++)
			$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
		$h=$this->jump*$nb;
		//Issue a page break first if needed
		$this->CheckPageBreak($h);
		//Draw the cells of the row
		for($i=0;$i<count($data);$i++)
		{
			$w=$this->widths[$i];
			$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
			//Save the current position
			$x=$this->GetX();
			$y=$this->GetY();
			//Draw the border
			if($this->border)
			{
				$this->Rect($x,$y,$w,$h,$this->mcfill);
			}
			//Print the text
			$this->MCPlus($w,$this->jump,$data[$i],0,$a);
			//Put the position to the right of the cell
			$this->SetXY($x+$w,$y);
		}
		//Go to the next line
		$this->Ln($h);
	}

	function RowM($data)
	{
    try{
      //Calculate the height of the row
      $nb=0;
      for($i=0;$i<count($data);$i++)
        $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
      $h=$this->jump*$nb;
      //Issue a page break first if needed
      $this->CheckPageBreak($h);
      //Draw the cells of the row
      for($i=0;$i<count($data);$i++)
      {
        $w=$this->widths[$i];
        $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
        //Save the current position
        $x=$this->GetX();
        $y=$this->GetY();
        //Draw the border
        if($this->border)
        {
          $this->Rect($x,$y,$w,$h,$this->mcfill);
        }
        //Print the text
        $this->MultiCell($w,$this->jump,$data[$i],0,$a);
        //Put the position to the right of the cell
        $this->SetXY($x+$w,$y);
      }
      //Go to the next line
      $this->Ln($h);
    }catch(Exception $e){
      print $e->getMessage();
    }
	}

	function SetWidths($w)
	{
		//Set the array of column widths
		$this->widths=$w;
		//Set the borders for de table
		$this->border=false;
		$this->jump=6;
		$this->mcfill="D";

	}

	function NbLines($w,$txt)
	{
		//Computes the number of lines a MultiCell of width w will take
		$cw=&$this->CurrentFont['cw'];
		if($w==0)
			$w=$this->w-$this->rMargin-$this->x;
		$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
		$s=str_replace("\r",'',$txt);
		$nb=strlen($s);
		if($nb>0 and $s[$nb-1]=="\n")
			$nb--;
		$sep=-1;
		$i=0;
		$j=0;
		$l=0;
		$nl=1;
		while($i<$nb)
		{
			$c=$s[$i];
			if($c=="\n")
			{
				$i++;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
				continue;
			}
			if($c==' ')
				$sep=$i;
			$l+=$cw[$c];
			if($l>$wmax)
			{
				if($sep==-1)
				{
					if($i==$j)
						$i++;
				}
				else
					$i=$sep+1;
				$sep=-1;
				$j=$i;
				$l=0;
				$nl++;
			}
			else
				$i++;
		}
		return $nl;
	}

}


?>
