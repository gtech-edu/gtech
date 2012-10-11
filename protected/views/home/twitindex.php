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


 <section id="intro">

      <hgroup>
		<?php 
		
		echo  $header; 
		if(!Yii::app()->user->isGuest){
			echo "<br>";
			echo CHtml::link("Editar", array("/home/updateHeader"), array("class"=>"button"));
			}
			
		?>
	<!--	
      <h1>Bem Vindo</h1>

      <h2></h2>
	-->
      </hgroup>

   </section>

<div class="row-fluid">
<div class="span4">

	<?php 
		echo  $colunm_left; 
		
			if(!Yii::app()->user->isGuest){
			echo "<br>";
			echo CHtml::link("Editar", array("/home/updateLeft"), array("class"=>"button"));
	}
	?>

</div>


<div class="span4">
	<?php 
		echo  $colunm_center; 
		
			if(!Yii::app()->user->isGuest){
			echo "<br>";
			echo CHtml::link("Editar", array("/home/updateCenter"), array("class"=>"button"));
	}
	?>
</div>


<div class="span4">
	<?php 
		echo $colunm_right; 
		
			if(!Yii::app()->user->isGuest){
			echo "<br>";
			echo CHtml::link("Editar", array("/home/updateRight"), array("class"=>"button"));
	}
	?>
</div>
</div>