<h1>Bienvenidos al Sistema de Control de Inventario de Producción de Exproaqua</h1>
<p>Mediante esta aplicación se realiza el control de las ordenes de materia prima almacenada en los diferentes almacenes de la empresa Exproaqua.</p>
<p>Esta aplicación contiene las siguientes funcionalidades:</p>
<ul>
  <li>
    Generación de Ordenes de Producción
  </li>
  <li>
    Carga de Informenes de Producción (En base a un orden de producción previa)
  </li>
  <li>
    Generación de Informe de Producción (En base a una orden de producción previa)
  </li>
</ul>
    
    

<p>La aplicación interactúa directamente con el sistema adminsitrativo Premium, de manera que al realizar una orden de producción, la materia prima es movida del almacén de "Materia Prima" al de "Materia en Proceso" y al final al de "Materia Procesada"</p>
<p>Para una correcta integración con Premium, se deben configurar los diferentes productos de la empresa como "artículos compuesto en premium", de manera pueda ser identificado y usado por el Sistema de Control de Inventario de Producción para su uso en las ordenes de producción. </p>

<h2>Configuración Inicial</h2>

<p>Para trabajar adecuadamente con el Sistema de Control de Inventario de Producción, se debe realizar los siguientes pasos:</p>

  <ul>
    <li>
    Crear los productos en el sistema Premium como "Artículos compuestos"
    </li>
    <li>
      Configurar los diferentes almacenes a ser usados en el sistema mediante el sistema Premium: Materia Prima, Materia en Proceso, Producto Terminado
    </li>
    <li>
      Enlazar con en el Sistema de Control de Inventario de Producción los almacenes creados en Premium. <a href="<?php echo url_for('configuracion/index') ?>">Ir a Configuración</a>
    </li>
  </ul>


