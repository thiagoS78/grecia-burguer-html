<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.css">
    <link rel="stylesheet" href="/assets/css/estilo-tema.css">
    <link rel="icon" href="/assets/img/favicon.png" sizes="32x32" type="image/png">
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <title>Grécia Burguer</title>
  </head>
  <body>
    <header id="header" class="">
      <div class="img-topo"></div>

      <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu-principal">
          <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="col-md-3 text-center" id="logo-menu">
                <figure>
                  <img src="/assets/img/logo.png" class="img-fluid" width="213" alt="Logo" title="Logo Grécia Burger">
                  
                </figure>
              </div>
              <div class="collapse navbar-collapse col-md-9 offset-3 menu-principal" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">CARDÁPIO <span class="sr-only">(página atual)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">SOBRE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ENTREGAS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">CONTATO</a>
                  </li>
                  <li class="nav-item menu-login">
                    <a class="nav-link" href="#">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#" id="menu-meu-pedido">MEU PEDIDO</a>
                  </li>
                 <li class="nav-item">
                    <a class="nav-link bag-pedido" href="#">
                      <i class="fas fa-shopping-bag"></i>
                      <span class="badge badge-pill badge-danger num-pedidos">3</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header><!-- /header -->

    <!-- carrosel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/assets/img/slide1.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/slide2.png" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/assets/img/slide3.png" alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
    <!-- /carrosel -->
    <main class="container">
      <div class="row titulo-cardapio">
        <div class="col-md-4">
          <h1>CARDÁPIO</h1>
        </div>
        <div class="col-md-4">
          <form class="form-inline">
            <select name="categoria" class="form-control w-100" id="inlineFormInputName2" placeholder="Filtrar categoria">
              <option value="">Filtrar categoria</option>
            </select>
          </form>
          </div>
          <div class="col-md-4">
            <form class="form-inline">
              <input type="text" name="pesquisa" class="form-control w-100" id="inlineFormInputGroupUsername2" placeholder="Pesquisar">
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="lista-produto">
            <figure>
              <img src="/assets/img/produtos/produto1.png" alt="">
            </figure>
            <div class="descricao-produto">
              <h3>Duplo Bacon</h3>
              <p>Com salada, queijo chedar, molho especial, cebola</p>
              <span class="preco">
                R$ 19,90
              </span>
              <button type="" class="btn btn-primary btn-sm">COMPRAR</button>
            </div>
          </article>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <article class="lista-produto">
            <figure>
              <img src="/assets/img/produtos/produto1.png" alt="">
            </figure>
            <div class="descricao-produto">
              <h3>Duplo Bacon</h3>
              <p>Com salada, queijo chedar, molho especial, cebola</p>
              <span class="preco">
                R$ 19,90
              </span>
              <button type="" class="btn btn-primary btn-sm">COMPRAR</button>
            </div>
          </article>
        </div>
        <!-- programar isso aqui -->
      </div>
      
    </main>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>