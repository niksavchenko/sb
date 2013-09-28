<?php
$this->breadcrumbs=array(
	'Fifa Ranks'=>array('index'),
	$model->rank=>array('view','id'=>$model->rank),
	'Update',
);

$this->menu=array(
	array('label'=>'List FifaRanks','url'=>array('index')),
	array('label'=>'Create FifaRanks','url'=>array('create')),
	array('label'=>'View FifaRanks','url'=>array('view','id'=>$model->rank)),
	array('label'=>'Manage FifaRanks','url'=>array('admin')),
);
?>

<h1>Update FifaRanks <?php echo $model->rank; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>