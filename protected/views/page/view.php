<?php
 
$this->breadcrumbs=array(
	$model->titulo,
);
?>

 <!--start intro-->

<div class="container">
<div class="row">


 <section id="intro">

      <hgroup>
      <h3><?php echo CHtml::encode($model->titulo);?></h3>
      
      </hgroup>
   </section>
</div>
</div>
<!--end intro-->   

   <!--start columns-->

<div class="container">
<div class="row">	
		
<div class="holder_content content-holder">
 
<div class="twelvecol last">
<section class="group-unique">
	<?php 
		echo $model->conteudo; 
		
			if(!Yii::app()->user->isGuest){
			echo "<hr>";
			echo CHtml::link("Editar", array("/page/update/" .$model->cod_pagina), array("class"=>"button", 'style'=>"color: white; text-decoration: none;"));
	}
	?>
</section>
</div>

</div> <!-- end holder -->

</div>
</div>
<!-- end colunms -->