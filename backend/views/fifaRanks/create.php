<?php
$this->breadcrumbs=array(
	'Fifa Ranks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FifaRanks','url'=>array('index')),
	array('label'=>'Manage FifaRanks','url'=>array('admin')),
);
?>

<h1>Create FifaRanks</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>