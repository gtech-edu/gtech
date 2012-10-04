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
	//alert('teste');
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

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php $this->widget('application.extensions.tinymce.ETinyMce',
							array(
							'htmlOptions'=>array('cols'=>40,'rows'=>80),
						    'name'=>'Pagina[conteudo]',
						    'editorTemplate'=>'full',
							//'onchangeCallback'=>'saveConfirm',
							//'contentCSS'=>Yii::app()->request->baseUrl .'/css/minimalism.css',
						 	'value'=>$conteudo,
							)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::button('Cancelar', array('submit' => array('/home'))); ?>
		<?php echo CHtml::submitButton('Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->