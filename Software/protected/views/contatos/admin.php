<h3>
	Listagem de Contatos (
	<?php echo Utils::exibeData(); ?>
	)
</h3>
<?php echo CHtml::form();?>
<!-- <form method="post"> -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#select_all").click(function(){
				var checked_status = this.checked;
				$("input[type='checkbox']").each(function(){
					this.checked = checked_status;
				});
			});					
		});
	</script>
	<table class="table table-striped">
		<thead>
			<tr>
				<th><input type="checkbox" id="select_all"></th>
				<th>ID</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Idade</th>
				<th>Telefone</th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($contatos) > 0) : ?>
			<?php foreach ($contatos as $contato) : ?>
			<tr>
				<td><input type="checkbox" name="ids[]"/></td>
				<td><?php echo $contato->id; ?></td>
				<td><?php echo $contato->nome; ?></td>
				<td><?php echo $contato->email; ?></td>
				<td><?php echo $contato->idade; ?></td>
				<td><?php echo $contato->telefone; ?></td>
			</tr>
			<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	
	<hr/>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary" name="submit" value="pdf">Exportar 	PDF</button>
		<button type="submit" class="btn btn-success" name="submit" value="excel">Exportar Excel</button>
	</div>
	
<!-- </form>  -->
<?php echo CHtml::endForm();?>
