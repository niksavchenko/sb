<?php
$this->breadcrumbs=array(
	'Fifa Rankings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FifaRanking','url'=>array('index')),
	array('label'=>'Manage FifaRanking','url'=>array('admin')),
);
?>

<h1>Create FifaRanking</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>