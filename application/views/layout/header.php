<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

        <!-- CSS -->        
        <?php 
        echo link_tag('includes/bootstrap/css/bootstrap.min.css'); 
        echo "\n";
        echo link_tag('includes/css/geral.css'); ?>

        <!-- Latest compiled and minified JavaScript -->
        <script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
        <title>Vigapetro - Sistema de Gestão Empresarial</title>
    </head>
    <body>
        <!-- HEADER -->
        <div id="cabecalho" style="background-color: #ccc;">
            <div class="container">
                <div class="row">
                    <!-- LOGO -->
                    <div id="logo" class="col-md-4">
                        <img src="<?php echo base_url('includes/images/sbao.png') ?>" class="img-responsive" alt="Responsive image">
                    </div>

                    <!-- USUARIO -->
                    <div id="login" class="col-md-2 col-md-offset-6">
                        <font class="txtBem">
                        Bem Vindo,</font>
                        <br>
                        <a href="index.php?sessao=dados_pessoais" title="Clique para exibir os dados" style="text-decoration: none; color: blueviolet;">
                            {USER}</a>
                    </div>
                </div>
            </div>
        </div>
        