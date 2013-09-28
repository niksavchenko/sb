<?php
$this->breadcrumbs=array(
	'Fifa Ranks'=>array('index'),
	$model->rank,
);

$this->menu=array(
	array('label'=>'List FifaRanks','url'=>array('index')),
	array('label'=>'Create FifaRanks','url'=>array('create')),
	array('label'=>'Update FifaRanks','url'=>array('update','id'=>$model->rank)),
	array('label'=>'Delete FifaRanks','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->rank),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FifaRanks','url'=>array('admin')),
);
?>

<h1>View FifaRanks #<?php echo $model->rank; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'rank',
		'mf_id',
		'rank_date',
		'next_rank',
		'description',
		'ts',
	),
)); ?>
