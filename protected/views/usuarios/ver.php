<h1><?php echo $model->nombres; ?> </h1>
<br>

<?php 
$this->menu=array(
	array('label'=>'Listado de Empleados', 'url'=>array('index')),
	array('label'=>'Editar Datos Personales', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Agregar Estudios', 'url'=>array('estudios/index')),
	array('label'=>'Agregar Experiencia', 'url'=>array('experiencia/index')),
	array('label'=>'Eliminar Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<?php echo $this->renderPartial('_ver', array('model'=>$model)); ?>	
<hr>
<?php echo $this->renderPartial('_estudios', array('model'=>$model)); ?>
<hr>
<?php echo $this->renderPartial('_experiencia', array('model'=>$model)); ?>