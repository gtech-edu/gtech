<?php
$this->breadcrumbs=array(
	'Serviços'=>array('index'),
	'Adicionar',
);

$this->menu=array(
	array('label'=>'Gerenciar Serviços', 'url'=>array('admin')),
);
?>

<!--start intro-->
<div class="container">
<div class="row">
 <section id="intro">
      <hgroup>
	      <h3>Adicionar Página</h3>
      </hgroup>
   </section>
</div>
</div>
<!--end intro-->   

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>