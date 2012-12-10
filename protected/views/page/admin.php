<?php
$this->breadcrumbs=array(
	'Paginas'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
	array('label'=>'Adicionar Página', 'url'=>array('create')),
	array('label'=>'Gerenciar Usuários', 'url'=>array('users/admin')),
);
?>

<div class="container">
	<div class="row">
	 <section id="intro">
	      <hgroup>
	      <h3>Gerenciador</h3>
	      </hgroup>
	   </section>
	</div>
</div>

   <!--start columns-->

<div class="container">
<div class="row">	
		
<div class="holder_content">
 
<div class="twelvecol last">
<section class="group-unique">
	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'pagina-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'titulo',
			array(
				'class'=>'CButtonColumn',
			),
		),
	)); ?>
</section>
</div>

</div> <!-- end holder -->

</div>
</div>
<!-- end colunms -->
	
