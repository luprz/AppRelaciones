<?php
class stds extends CWidget
{

	public $model;
	
	public function init()
	{
		?>
		<b>Estudios Realizados</b><br><br>
		<table class="table-bordered" id='tusuario'>
			<tr id='cabezera'>
			<th>Titulo</th>
			<th>Institución</th>
			<th>Año de Graduacion</th>	
			</tr>
			<?php $estudios=Estudios::model()->findAll();
			if (is_array($estudios))
			{
				foreach($estudios as $estudio){ 
					if ($estudio->usuarios_id==$this->model->id) {
						?>		
						<tr id='datos'>
						<td><?php echo $estudio->titulo;?></td>
						<td><?php echo $estudio->institucion;?></td>
						<td><?php echo $estudio->anio_graduacion;?></td>
						</tr>
						<?php 
					}
				}
			} ?>
		</table>
		<?php
	}
	
	/*
	public function run()
	{
	
	}
	*/
}
?>