<?php
 
$this->breadcrumbs=array(
	"Home",
);
?>

<?php 
	Yii::app()->clientScript->registerScript('ready', "
	$(document).ready(function(){
		$('.view').show('fast');
	});
	
	");
?>


 <div class="container">
	<div class="row">
	 <section id="intro">
	      <hgroup>
	      <h3>Bem Vindo</h3>
	      </hgroup>
	   </section>
	</div>
</div>

			
<div class="holder_content">
<section class="group1">
	<?php 
		echo $group1->conteudo; 
		
			if(!Yii::app()->user->isGuest){
			echo "<hr>";
			echo CHtml::link("Editar", array("/pagina/update/" .$group1->cod_pagina), array("class"=>"button"));
	}
	?>
</section>

<section class="group2">
	<?php 
		echo $group2->conteudo; 
		
			if(!Yii::app()->user->isGuest){
			echo "<hr>";
			echo CHtml::link("Editar", array("/pagina/update/" .$group2->cod_pagina), array("class"=>"button"));
	}
	?>
</section>

<section class="group3">
	<?php 
		echo $group3->conteudo; 
		
			if(!Yii::app()->user->isGuest){
			echo "<hr>";
			echo CHtml::link("Editar", array("/pagina/update/" .$group3->cod_pagina), array("class"=>"button"));
	}
	?>
</section>


</div>




