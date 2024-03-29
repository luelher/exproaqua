<?php

/**
 * Articulo filter form base class.
 *
 * @package    exproaqua
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArticuloFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_empresa'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'agencia'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'grupo'              => new sfWidgetFormFilterInput(),
      'subgrupo'           => new sfWidgetFormFilterInput(),
      'nombre'             => new sfWidgetFormFilterInput(),
      'nombrecorto'        => new sfWidgetFormFilterInput(),
      'referencia'         => new sfWidgetFormFilterInput(),
      'marca'              => new sfWidgetFormFilterInput(),
      'unidad'             => new sfWidgetFormFilterInput(),
      'usaexist'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio1'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio2'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio3'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio4'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio5'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio6'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio7'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio8'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin3'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin4'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin5'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin6'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin7'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'preciofin8'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'existencia'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'inactiva'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comprometido'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minimo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'maximo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usaserial'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision1'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision2'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision3'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision4'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision5'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision6'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision7'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comision8'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util1'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util2'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util3'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util4'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util5'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util6'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util7'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'util8'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'formato'            => new sfWidgetFormFilterInput(),
      'decimales'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'compuesto'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cfob'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cnacionali'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcnac'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cflete'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcflete'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'carancel'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcarancel'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cgastoper'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prccosoper'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cotroscos'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ccostocyf'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costoex'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costoref'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio1ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio2ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio3ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio4ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio5ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio6ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio7ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio8ex'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'factor'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'garantia'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'empaque'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidadgrp'          => new sfWidgetFormFilterInput(),
      'cntgrp'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costgrp'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio1grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio2grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio3grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio4grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio5grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio6grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio7grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'precio8grp'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp1'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp2'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp3'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp4'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp5'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp6'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp7'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prcgrp8'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'creadopor'          => new sfWidgetFormFilterInput(),
      'modifpor'           => new sfWidgetFormFilterInput(),
      'margenpor'          => new sfWidgetFormFilterInput(),
      'costo_ant'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_prom'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto1'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto2'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto3'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto4'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto5'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'impuesto6'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rutafoto'           => new sfWidgetFormFilterInput(),
      'detalles'           => new sfWidgetFormFilterInput(),
      'contraindi'         => new sfWidgetFormFilterInput(),
      'usointerno'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux1'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux2'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux3'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'simbolo'            => new sfWidgetFormFilterInput(),
      'modelo'             => new sfWidgetFormFilterInput(),
      'discont'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'flotante'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto1'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto2'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto3'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto4'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto5'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cimpuesto6'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fechacrea'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cuentacont'         => new sfWidgetFormFilterInput(),
      'metodo'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sevence'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usalotes'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'controlado'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'volumen'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'peso'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diametro'           => new sfWidgetFormFilterInput(),
      'usabalanza'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'topeminvent'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'topemaxvent'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma'              => new sfWidgetFormFilterInput(),
      'esvehiculo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aceptadscto'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aceptacred'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'metodoround'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'unidinamica'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'             => new sfWidgetFormFilterInput(),
      'campo2'             => new sfWidgetFormFilterInput(),
      'campo3'             => new sfWidgetFormFilterInput(),
      'campo4'             => new sfWidgetFormFilterInput(),
      'campo5'             => new sfWidgetFormFilterInput(),
      'campo6'             => new sfWidgetFormFilterInput(),
      'campo7'             => new sfWidgetFormFilterInput(),
      'campo8'             => new sfWidgetFormFilterInput(),
      'campo9'             => new sfWidgetFormFilterInput(),
      'campo10'            => new sfWidgetFormFilterInput(),
      'imp_nacional'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imp_producc'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gimp_nacional'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'gimp_producc'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ctacontinv'         => new sfWidgetFormFilterInput(),
      'ctacontcostos'      => new sfWidgetFormFilterInput(),
      'ctacontingresos'    => new sfWidgetFormFilterInput(),
      'blocked'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usatallacolor'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'deposito_in'        => new sfWidgetFormFilterInput(),
      'deposito_out'       => new sfWidgetFormFilterInput(),
      'und_simpleagrupado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'usa_servidor'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'id_empresa'         => new sfValidatorPass(array('required' => false)),
      'agencia'            => new sfValidatorPass(array('required' => false)),
      'grupo'              => new sfValidatorPass(array('required' => false)),
      'subgrupo'           => new sfValidatorPass(array('required' => false)),
      'nombre'             => new sfValidatorPass(array('required' => false)),
      'nombrecorto'        => new sfValidatorPass(array('required' => false)),
      'referencia'         => new sfValidatorPass(array('required' => false)),
      'marca'              => new sfValidatorPass(array('required' => false)),
      'unidad'             => new sfValidatorPass(array('required' => false)),
      'usaexist'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio1'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio2'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio3'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio4'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio5'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio6'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio7'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio8'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin3'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin4'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin5'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin6'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin7'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'preciofin8'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'existencia'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'inactiva'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comprometido'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'minimo'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'maximo'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'origen'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usaserial'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision1'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision2'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision3'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision4'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision5'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision6'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision7'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comision8'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util1'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util2'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util3'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util4'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util5'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util6'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util7'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'util8'              => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'formato'            => new sfValidatorPass(array('required' => false)),
      'decimales'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'compuesto'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cfob'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cnacionali'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcnac'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cflete'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcflete'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'carancel'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcarancel'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cgastoper'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prccosoper'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cotroscos'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ccostocyf'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costoex'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costoref'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio1ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio2ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio3ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio4ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio5ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio6ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio7ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio8ex'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'factor'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'garantia'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'empaque'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidadgrp'          => new sfValidatorPass(array('required' => false)),
      'cntgrp'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costgrp'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio1grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio2grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio3grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio4grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio5grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio6grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio7grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'precio8grp'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp1'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp2'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp3'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp4'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp5'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp6'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp7'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prcgrp8'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'creadopor'          => new sfValidatorPass(array('required' => false)),
      'modifpor'           => new sfValidatorPass(array('required' => false)),
      'margenpor'          => new sfValidatorPass(array('required' => false)),
      'costo_ant'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'costo_prom'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto1'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto2'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto3'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto4'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto5'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'impuesto6'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rutafoto'           => new sfValidatorPass(array('required' => false)),
      'detalles'           => new sfValidatorPass(array('required' => false)),
      'contraindi'         => new sfValidatorPass(array('required' => false)),
      'usointerno'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux1'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux2'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux3'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'simbolo'            => new sfValidatorPass(array('required' => false)),
      'modelo'             => new sfValidatorPass(array('required' => false)),
      'discont'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'flotante'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto1'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto2'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto3'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto4'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto5'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cimpuesto6'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fechacrea'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cuentacont'         => new sfValidatorPass(array('required' => false)),
      'metodo'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sevence'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usalotes'           => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'controlado'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'volumen'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'peso'               => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diametro'           => new sfValidatorPass(array('required' => false)),
      'usabalanza'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'topeminvent'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'topemaxvent'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'forma'              => new sfValidatorPass(array('required' => false)),
      'esvehiculo'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aceptadscto'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aceptacred'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'metodoround'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'unidinamica'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'campo1'             => new sfValidatorPass(array('required' => false)),
      'campo2'             => new sfValidatorPass(array('required' => false)),
      'campo3'             => new sfValidatorPass(array('required' => false)),
      'campo4'             => new sfValidatorPass(array('required' => false)),
      'campo5'             => new sfValidatorPass(array('required' => false)),
      'campo6'             => new sfValidatorPass(array('required' => false)),
      'campo7'             => new sfValidatorPass(array('required' => false)),
      'campo8'             => new sfValidatorPass(array('required' => false)),
      'campo9'             => new sfValidatorPass(array('required' => false)),
      'campo10'            => new sfValidatorPass(array('required' => false)),
      'imp_nacional'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_producc'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gimp_nacional'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'gimp_producc'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ctacontinv'         => new sfValidatorPass(array('required' => false)),
      'ctacontcostos'      => new sfValidatorPass(array('required' => false)),
      'ctacontingresos'    => new sfValidatorPass(array('required' => false)),
      'blocked'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usatallacolor'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'deposito_in'        => new sfValidatorPass(array('required' => false)),
      'deposito_out'       => new sfValidatorPass(array('required' => false)),
      'und_simpleagrupado' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'usa_servidor'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('articulo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articulo';
  }

  public function getFields()
  {
    return array(
      'id_empresa'         => 'Text',
      'agencia'            => 'Text',
      'codigo'             => 'Text',
      'grupo'              => 'Text',
      'subgrupo'           => 'Text',
      'nombre'             => 'Text',
      'nombrecorto'        => 'Text',
      'referencia'         => 'Text',
      'marca'              => 'Text',
      'unidad'             => 'Text',
      'usaexist'           => 'Number',
      'costo'              => 'Number',
      'precio1'            => 'Number',
      'precio2'            => 'Number',
      'precio3'            => 'Number',
      'precio4'            => 'Number',
      'precio5'            => 'Number',
      'precio6'            => 'Number',
      'precio7'            => 'Number',
      'precio8'            => 'Number',
      'preciofin1'         => 'Number',
      'preciofin2'         => 'Number',
      'preciofin3'         => 'Number',
      'preciofin4'         => 'Number',
      'preciofin5'         => 'Number',
      'preciofin6'         => 'Number',
      'preciofin7'         => 'Number',
      'preciofin8'         => 'Number',
      'existencia'         => 'Number',
      'inactiva'           => 'Number',
      'comprometido'       => 'Number',
      'minimo'             => 'Number',
      'maximo'             => 'Number',
      'origen'             => 'Number',
      'impuesto'           => 'Number',
      'usaserial'          => 'Number',
      'comision1'          => 'Number',
      'comision2'          => 'Number',
      'comision3'          => 'Number',
      'comision4'          => 'Number',
      'comision5'          => 'Number',
      'comision6'          => 'Number',
      'comision7'          => 'Number',
      'comision8'          => 'Number',
      'util1'              => 'Number',
      'util2'              => 'Number',
      'util3'              => 'Number',
      'util4'              => 'Number',
      'util5'              => 'Number',
      'util6'              => 'Number',
      'util7'              => 'Number',
      'util8'              => 'Number',
      'formato'            => 'Text',
      'decimales'          => 'Number',
      'compuesto'          => 'Number',
      'cfob'               => 'Number',
      'cnacionali'         => 'Number',
      'prcnac'             => 'Number',
      'cflete'             => 'Number',
      'prcflete'           => 'Number',
      'carancel'           => 'Number',
      'prcarancel'         => 'Number',
      'cgastoper'          => 'Number',
      'prccosoper'         => 'Number',
      'cotroscos'          => 'Number',
      'ccostocyf'          => 'Number',
      'costoex'            => 'Number',
      'costoref'           => 'Number',
      'precio1ex'          => 'Number',
      'precio2ex'          => 'Number',
      'precio3ex'          => 'Number',
      'precio4ex'          => 'Number',
      'precio5ex'          => 'Number',
      'precio6ex'          => 'Number',
      'precio7ex'          => 'Number',
      'precio8ex'          => 'Number',
      'factor'             => 'Number',
      'garantia'           => 'Number',
      'empaque'            => 'Number',
      'unidadgrp'          => 'Text',
      'cntgrp'             => 'Number',
      'costgrp'            => 'Number',
      'precio1grp'         => 'Number',
      'precio2grp'         => 'Number',
      'precio3grp'         => 'Number',
      'precio4grp'         => 'Number',
      'precio5grp'         => 'Number',
      'precio6grp'         => 'Number',
      'precio7grp'         => 'Number',
      'precio8grp'         => 'Number',
      'prcgrp1'            => 'Number',
      'prcgrp2'            => 'Number',
      'prcgrp3'            => 'Number',
      'prcgrp4'            => 'Number',
      'prcgrp5'            => 'Number',
      'prcgrp6'            => 'Number',
      'prcgrp7'            => 'Number',
      'prcgrp8'            => 'Number',
      'creadopor'          => 'Text',
      'modifpor'           => 'Text',
      'margenpor'          => 'Text',
      'costo_ant'          => 'Number',
      'costo_prom'         => 'Number',
      'impuesto1'          => 'Number',
      'impuesto2'          => 'Number',
      'impuesto3'          => 'Number',
      'impuesto4'          => 'Number',
      'impuesto5'          => 'Number',
      'impuesto6'          => 'Number',
      'rutafoto'           => 'Text',
      'detalles'           => 'Text',
      'contraindi'         => 'Text',
      'usointerno'         => 'Number',
      'aux1'               => 'Number',
      'aux2'               => 'Number',
      'aux3'               => 'Number',
      'simbolo'            => 'Text',
      'modelo'             => 'Text',
      'discont'            => 'Number',
      'flotante'           => 'Number',
      'cimpuesto1'         => 'Number',
      'cimpuesto2'         => 'Number',
      'cimpuesto3'         => 'Number',
      'cimpuesto4'         => 'Number',
      'cimpuesto5'         => 'Number',
      'cimpuesto6'         => 'Number',
      'fechacrea'          => 'Date',
      'cuentacont'         => 'Text',
      'metodo'             => 'Number',
      'sevence'            => 'Number',
      'usalotes'           => 'Number',
      'controlado'         => 'Number',
      'volumen'            => 'Number',
      'peso'               => 'Number',
      'diametro'           => 'Text',
      'usabalanza'         => 'Number',
      'topeminvent'        => 'Number',
      'topemaxvent'        => 'Number',
      'forma'              => 'Text',
      'esvehiculo'         => 'Number',
      'aceptadscto'        => 'Number',
      'aceptacred'         => 'Number',
      'metodoround'        => 'Number',
      'unidinamica'        => 'Number',
      'campo1'             => 'Text',
      'campo2'             => 'Text',
      'campo3'             => 'Text',
      'campo4'             => 'Text',
      'campo5'             => 'Text',
      'campo6'             => 'Text',
      'campo7'             => 'Text',
      'campo8'             => 'Text',
      'campo9'             => 'Text',
      'campo10'            => 'Text',
      'imp_nacional'       => 'Number',
      'imp_producc'        => 'Number',
      'gimp_nacional'      => 'Number',
      'gimp_producc'       => 'Number',
      'ctacontinv'         => 'Text',
      'ctacontcostos'      => 'Text',
      'ctacontingresos'    => 'Text',
      'blocked'            => 'Number',
      'usatallacolor'      => 'Number',
      'deposito_in'        => 'Text',
      'deposito_out'       => 'Text',
      'und_simpleagrupado' => 'Number',
      'usa_servidor'       => 'Number',
    );
  }
}
