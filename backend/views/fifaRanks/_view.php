<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rank),array('view','id'=>$data->rank)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mf_id')); ?>:</b>
	<?php echo CHtml::encode($data->mf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank_date')); ?>:</b>
	<?php echo CHtml::encode($data->rank_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_rank')); ?>:</b>
	<?php echo CHtml::encode($data->next_rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />


</div>