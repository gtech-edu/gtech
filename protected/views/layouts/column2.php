<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row">
		<?php echo $content; ?>
	</div><!-- /row-->
	<div class="row">
		<?php  
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operações',
				'htmlOptions'=>array('visible'=>!Yii::app()->user->isGuest),
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();  
		?>
	</div><!-- /row-->
</div>
<?php $this->endContent(); ?>
