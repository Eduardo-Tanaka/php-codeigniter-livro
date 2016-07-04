<div class="container">
	<h1 class="jumbotron">Lista de Livros</h1>

	<!-- Mostra a mensagem em caso de tentativa de cadatro -->
	<?php if($this->session->flashdata('msg')): ?>
		<div class="alert alert-dismissible alert-success ?>" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?= $this->session->flashdata('msg') ?>
		</div>
	<?php endif; ?>

	<table class="table">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Autor</th>
				<th>Data</th>
				<th colspan="2">Ação</th>
			</tr>
		</thead>
		<tbody>
			<?= $linhas ?>
		</tbody>
	</table>

</div>