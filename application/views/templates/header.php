<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="<?=base_url('includes/js/jquery-1.12.3.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('includes/js/bootstrap.min.js')?>"></script>
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/bootstrap.min.css')?>" />
	<link type="text/css" rel="stylesheet" href="<?=base_url('includes/css/font-awesome.min.css')?>" />
	<title><?=$title?></title>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url('home')?>">Livros</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=base_url('livro/cadastro')?>">Cadastro Livro</a></li>
        <li><a href="<?=base_url('livro/lista')?>">Lista Livros</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Entrar</a></li>
        <li><a href="#">Registrar</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>