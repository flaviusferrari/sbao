
<!-- MENU -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
                <span class="sr-only">Toggle navigation</span> 
            </button> 
            <a class="navbar-brand" href="home">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- Cadastros -->
                <li class="dropdown">
                    <a class="dropdown-toggle" href="" data-toggle="dropdown">Cadastros<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="clientespf">Clientes</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Tutoriais</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Vídeo Aulas</a></li>
                    </ul>
                </li>
                <!-- PRODUTOS -->
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">Produtos<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Jogos</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Tutoriais</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Vídeo Aulas</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('login/logout') ?>">Sair</a></li>
            </ul>            
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>