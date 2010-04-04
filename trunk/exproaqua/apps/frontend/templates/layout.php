<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <!-- start header -->
    <div id="header">
      <div id="logo">
        <h1><a href="#">Exproaqua</a></h1>
        <p><a href="#">Procesadora de Productos Acuícolas</a></p>
      </div>
      <div id="menu">
        <ul>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='home' ? 'active' : '' ?>"><a href="<?php echo url_for('home/index') ?>">Home</a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='ordenes' ? 'active' : '' ?>"><a href="<?php echo url_for('ordenes/index') ?>">Ordenes Producción </a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='reportes' ? 'active' : '' ?>"><a href="<?php echo url_for('reportes/index') ?>">Reporte Producción</a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='informenes' ? 'active' : '' ?>"><a href="<?php echo url_for('informenes/index') ?>">Informe Producción</a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='articulos' ? 'active' : '' ?>"><a href="<?php echo url_for('articulos/index') ?>">Ver Artículos</a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='configuracion' ? 'active' : '' ?>"><a href="<?php echo url_for('configuracion/index') ?>">Configuración</a></li>
          <li class="<?php echo $sf_request->getParameterHolder()->get('module')=='seguridad' ? 'active' : '' ?>"><a href="<?php echo url_for('seguridad/index') ?>">Seguridad</a></li>
        </ul>
      </div>
    </div>
    <hr />
    <!-- end header -->
    <!-- start page -->
    <div id="wrapper">
      <div id="page">
        <!-- start content -->
        <div class="user">
          <?php if($sf_user->isAnonymous()) echo '<b>Usuario No Autenticado.</b> <a href="'.url_for('login/index').'">Iniciar Sesión</a>'; else echo 'Bienvenido <b>'.$sf_user.'</b>, (<a href="'.url_for('logout/index').'">Cerrar Sesión</a>)'; ?>
        </div>
        <div id="content">
          <div class="post">
            <?php echo $sf_content ?>
          </div>
        </div>
        <!-- end content -->
        <br style="clear: both;" />
      </div>
    </div>
    <!-- end page -->
    <!-- start footer -->
    <div id="wrapper2">
      <p id="legal"> &copy;2010 Grupo Emporium. Todos los Derechos Reservados.
        &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        Diseñado por <a href="http://www.freecsstemplates.org/">Free CSS Templates</a> &nbsp;&nbsp;&bull;&nbsp;&nbsp;
        <a href="http://validator.w3.org/check/referer" class="xhtml" title="Esta página esta validada como XHTML">Valido <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> &nbsp;&nbsp;&bull;&nbsp;&nbsp; <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css" title="Esta página esta validada como CSS">Valido <abbr title="Cascading Style Sheets">CSS</abbr></a> </p>
    </div>
    <!-- end footer -->
    
  </body>
</html>
