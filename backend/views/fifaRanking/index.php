<?php
$this->breadcrumbs=array(
	'Fifa Rankings',
);

$this->menu=array(
	array('label'=>'Create FifaRanking','url'=>array('create')),
	array('label'=>'Manage FifaRanking','url'=>array('admin')),
);
?>

<h1>Fifa Rankings</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
