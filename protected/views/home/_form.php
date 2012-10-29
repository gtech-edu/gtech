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

<script type="text/javascript">
function filebrowser(field_name, url, type, win) {
	
	fileBrowserURL = "http://gtech.ufrgs.br/pdw/index.php?filter=" + type;
			
	tinyMCE.activeEditor.windowManager.open({
		title: "PDW File Browser",
		url: fileBrowserURL,
		width: 950,
		height: 650,
		inline: 0,
		maximizable: 1,
		close_previous: 0
	},{
		window : win,
		input : field_name
	});		
}

function saveConfirm(){
//	confirm('Voce fez alteracoes');
}
</script>
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
	 <?php echo CHtml::textArea('Paginga[conteudo]', $conteudo, array('id'=>'Paginga_conteudo')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::button('Cancelar', array('submit' => array('/home'))); ?>
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
