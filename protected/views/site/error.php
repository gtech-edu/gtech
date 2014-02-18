<?php
$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<div class="container">
	<div class="row">
	 <section id="intro">
	      <hgroup>
	      <h2>Error <?php echo $code; ?></h2>
	      </hgroup>
	   </section>
	</div>
</div>

<div class="error">
<?php echo CHtml::encode($message); ?>
</div>