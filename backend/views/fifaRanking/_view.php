<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rank')); ?>:</b>
	<?php echo CHtml::encode($data->rank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fifa3')); ?>:</b>
	<?php echo CHtml::encode($data->fifa3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ranking')); ?>:</b>
	<?php echo CHtml::encode($data->ranking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</b>
	<?php echo CHtml::encode($data->points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_ranking')); ?>:</b>
	<?php echo CHtml::encode($data->change_ranking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('change_status')); ?>:</b>
	<?php echo CHtml::encode($data->change_status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('change_points')); ?>:</b>
	<?php echo CHtml::encode($data->change_points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_ranking')); ?>:</b>
	<?php echo CHtml::encode($data->c_ranking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_change_ranking')); ?>:</b>
	<?php echo CHtml::encode($data->c_change_ranking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_change_status')); ?>:</b>
	<?php echo CHtml::encode($data->c_change_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cn_name')); ?>:</b>
	<?php echo CHtml::encode($data->cn_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cn_id')); ?>:</b>
	<?php echo CHtml::encode($data->cn_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_id')); ?>:</b>
	<?php echo CHtml::encode($data->c_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_fifa_id')); ?>:</b>
	<?php echo CHtml::encode($data->c_fifa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->c_abbreviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</b>
	<?php echo CHtml::encode($data->ts); ?>
	<br />

	*/ ?>

</div>