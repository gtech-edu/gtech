<?php
$this->breadcrumbs=array(
	'Configurações'=>array('configuracoes/index'),
	'Gerenciar Usuários' => array('users/admin'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Gerenciar Usuários', 'url'=>array('admin')),
);
?>

 <?php foreach($paginas as $p):?>
     	<li><?php echo CHtml::link(CHtml::encode($p->titulo), array("page/view", 'id'=>$p->cod_pagina), array("class"=>"aba-href", "id"=>$p->cod_pagina));?></li>
    <?php endforeach;?>

<h1>Editar Usuário</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>