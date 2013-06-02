<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'rank',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'fifa3',array('class'=>'span5','maxlength'=>3)); ?>

	<?php echo $form->textFieldRow($model,'ranking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'points',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'change_ranking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'change_status',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'change_points',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_ranking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_change_ranking',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_change_status',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'cn_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'cn_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_fifa_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'c_abbreviation',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'ts',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
