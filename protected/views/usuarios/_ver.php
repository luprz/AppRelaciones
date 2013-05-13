	
	<!--<b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
	<br />-->

	<b><?php echo CHtml::encode($model->getAttributeLabel('ciudad_id')); ?>:</b>
	<?php echo CHtml::encode($model->ciudad->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($model->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($model->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($model->email); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('estado')); ?>:</b>
	<?php if ($model->estado=='1') {
		echo "Activo";
	}else{
		echo "Inactivo";
	} ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('genero')); ?>:</b>
	<?php if ($model->genero=='F'){
		echo "Femenino";
	}else{
		echo "Masculino";
	} ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('folio')); ?>:</b>
	<?php echo $model->folio?$model->folio->lugar:'N/A'; ?>
	<br />