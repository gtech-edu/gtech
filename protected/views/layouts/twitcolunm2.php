<?php $this->beginContent('//layouts/twitter-main'); ?>
	<div class="span9">
		<?php echo $content; ?>
	</div>
	<div class="span3 sidebar">
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
	</div><!-- sidebar -->
<?php $this->endContent(); ?>
