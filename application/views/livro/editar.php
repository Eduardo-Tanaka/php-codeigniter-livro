<div class="container">
	<h1 class="jumbotron">Edição de Livro</h1>

	<div class="row">
		<!-- Mostra a mensagem em caso de tentativa de atualização -->
		<?php if($msg["mensagem"]): ?>
			<div class="alert alert-dismissible alert-<?= $msg['class'] ?>" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?= $msg['mensagem'] ?>
			</div>
		<?php endif; ?>
		
		<!-- Formulário para cadatro de livro -->
		<form method="post" action="">
			<input type='hidden' value="<?= $livro['id'] ?>" name="id" />
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome" class="form-control" value="<?= $livro['nome'] ?>" />
			</div>
			<div class="form-group">
				<label for="autor">Autor:</label>
				<input type="text" id="autor" name="autor" class="form-control" value="<?= $livro['autor'] ?>" />
			</div>
			<div class="form-group">
				<input type="submit" value="Cadastrar" class="btn btn-lg btn-primary" />
			</div>
		</form>
	</div>
</div>