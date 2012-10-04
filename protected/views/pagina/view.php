<?php
 
$this->breadcrumbs=array(
	$model->titulo,
);
?>

<?php 
	Yii::app()->clientScript->registerScript('ready', "
	$(document).ready(function(){
		$('.view').show('fast');
	});
	
	");
?>

 <!--start intro-->

<div class="container">
<div class="row">


 <section id="intro">

      <hgroup>
<!--      <h1></h1>-->	
      <h3><?php echo CHtml::encode($model->titulo);?></h3>
      
      </hgroup>
   </section>
</div>
</div>
<!--end intro-->   

   <!--start columns-->

<div class="container">
<div class="row">	
		
<div class="holder_content">
 
<div class="twelvecol last">
<section class="group-unique">
	<?php 
		echo $model->conteudo; 
		
			if(!Yii::app()->user->isGuest){
			echo "<hr>";
			echo CHtml::link("Editar", array("/pagina/update/" .$model->cod_pagina), array("class"=>"button", 'style'=>"color: white; text-decoration: none;"));
	}
	?>
</section>
</div>

</div> <!-- end holder -->

</div>
</div>
<!-- end colunms -->