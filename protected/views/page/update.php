<?php
$this->breadcrumbs=array(
	'Configurações'=>array('/configuracoes/index'),
	$model->titulo,
);

$this->menu=array(
	array('label'=>'Visualizar', 'url'=>array('view', 'id'=>$model->cod_pagina)),
	array('label'=>'Configurações do Site', 'url'=>array('/admin')),
);
?>

<!--start intro-->
<div class="container">
<div class="row">
 <section id="intro">
      <hgroup>
	      <h3><?php echo $model->titulo; ?></h3>
      </hgroup>
   </section>
</div>
</div>
<!--end intro-->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
