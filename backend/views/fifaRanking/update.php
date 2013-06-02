<?php
$this->breadcrumbs=array(
	'Fifa Rankings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FifaRanking','url'=>array('index')),
	array('label'=>'Create FifaRanking','url'=>array('create')),
	array('label'=>'View FifaRanking','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage FifaRanking','url'=>array('admin')),
);
?>

<h1>Update FifaRanking <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>