<?php
$this->breadcrumbs=array(
	'Gerenciar Usuários',
);

$this->menu=array(
	array('label'=>'Adicionar Usuário', 'url'=>array('create')),
	array('label'=>'Gerenciar Páginas', 'url'=>array('/admin')),
);
?>

<div class="container">
	<div class="row">
	 <section id="intro">
	      <hgroup>
	      <h3>Gerenciador de Usuários</h3>
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
	'id'=>'users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'username',
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