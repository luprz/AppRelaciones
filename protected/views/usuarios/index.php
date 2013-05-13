<?php
/* @var $this UsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);
?><h1>Lista de Usuarios</h1><?php
$this->menu=array(
	array('label'=>'Crear Nuevo Usuario', 'url'=>array('create'))
);
?>
<br><br>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<table class="table-bordered" id='tusuario'>
	<tr id='cabezera'>
	<th>ID</th>
	<th>Ciudad</th>
	<th>Nombres</th>
	<th>Cedula</th>
	<th>Experiencia</th>
	<th>Estudios</th>
	<th>Estado</th>
	<th>Ver</th>
	<!--<th>Editar</th>
	<th>Borrar</th>-->
	</tr>
	<?php foreach($dataProvider as $u){ ?>
	<tr id='datos'>
	<td><?php echo $u->id;?></td>
	<td><?php echo $u->ciudad->nombre;?></td>
	<td><?php echo $u->nombres;?></td>
	<td><?php echo $u->identificacion;?></td>
	<td><?php echo $u->experienciaCount.' trabajo(s)';?></td>
	<td><?php echo $u->estudiosCount.' titulo(s)';?></td>
	<td><?php if ($u->estado=='1') {
		echo "Activo";
	}else{
		echo "Inactivo";
	} ?></td>	
	<td><div class='btn'><?php echo CHtml::link('Ver',array('ver','id'=>$u->id));?></div></td>
	<!--<td><div class='btn'><?php echo CHtml::link('Editar',array('update','id'=>$u->id));?></div></td>
	<td><div class='btn'><?php echo CHtml::link('Borrar',array('delete','id'=>$u->id),array('confirm'=>'¿Seguro desea eliminar este usuario?'));?></div></td>-->
	</tr>
	<?php } ?>

	<!--<?php/* foreach($dataProvider as $u){
		echo 'Usuario: '.$u->nombres.' ';
		foreach ($u->experiencias  as $exp) {			
			echo 'Jefe: '.$exp->jefe;
		}
	}*/ ?>-->
</table>
