<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl ."/js/tiny_mce/tiny_mce.js");
Yii::app()->clientScript->registerScript('text-areas',"
		tinyMCE.init({
								mode : 'textareas',
								theme : 'advanced',
								width: '100%',
        						height: '450',
        						relative_urls : false,
        						file_browser_callback : 'filebrowser'
							});
	");
?>
<!--start intro-->
<div class="container">
<div class="row">
 <section id="intro">
      <hgroup>
	      <h3><?php echo CHtml::encode($titulo);?></h3>
      </hgroup>
   </section>
</div>
</div>
<!--end intro-->   

<div class="form holder_content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
	 <?php echo CHtml::textArea('Pagina[conteudo]', $conteudo, array('id'=>'Pagina_conteudo')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::button('Cancelar', array('submit' => array('/'))); ?>
		<?php echo CHtml::button('Save', array('submit' => array('/home/updateLeft'))); ?>
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
