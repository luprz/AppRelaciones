<b>Experiencia Laboral</b><br><br>
<table class="table-bordered" id='tusuario'>
	<tr id='cabezera'>
	<th>Empresa/Proyecto</th>
	<th>Inicio</th>
	<th>Fin</th>	
	</tr>
	<?php $experiencia=Experiencia::model()->findAll();
	if (is_array($experiencia))
	{
		foreach($experiencia as $exp){ 
			if ($exp->usuarios_id==$model->id) {
				?>		
				<tr id='datos'>
				<td><?php echo $exp->empresa;?></td>
				<td><?php echo $exp->inicio;?></td>
				<td><?php echo $exp->finalizacion;?></td>
				</tr>
				<?php 
			}
		}
	} ?>
</table>