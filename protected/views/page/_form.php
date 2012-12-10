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


<div class="form holder_content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	  <div class="row"> 
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo'); ?>
		<?php echo $form->error($model,'titulo'); ?>
	 </div> 
	
	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php //$this->widget('application.extensions.tinymce.ETinyMce', array('htmlOptions'=>array('cols'=>40, 'rows'=>80),'name'=>'Pagina[conteudo]','editorTemplate'=>'full',  'value'=>$model->conteudo)); ?>
		<?php echo $form->textArea($model, 'conteudo'); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::button('Cancelar', array('submit' => array('/page/view', 'id'=>$model->cod_pagina))); ?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->