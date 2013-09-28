<?php
$this->breadcrumbs=array(
	'Fifa Ranks',
);

$this->menu=array(
	array('label'=>'Create FifaRanks','url'=>array('create')),
	array('label'=>'Manage FifaRanks','url'=>array('admin')),
);
?>

<h1>Fifa Ranks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
