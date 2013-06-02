<?php
$this->breadcrumbs=array(
	'Fifa Rankings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FifaRanking','url'=>array('index')),
	array('label'=>'Create FifaRanking','url'=>array('create')),
	array('label'=>'Update FifaRanking','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete FifaRanking','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FifaRanking','url'=>array('admin')),
);
?>

<h1>View FifaRanking #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rank',
		'fifa3',
		'ranking',
		'points',
		'change_ranking',
		'change_status',
		'change_points',
		'c_ranking',
		'c_change_ranking',
		'c_change_status',
		'cn_name',
		'cn_id',
		'c_id',
		'c_fifa_id',
		'c_abbreviation',
		'ts',
	),
)); ?>
