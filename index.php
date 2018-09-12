<?php
		/*require_once 'Crud.php';
	require_once 'Paginacao.php';

	if(isset($_GET['page']) && !empty($_GET['page'])){
		$pg = $_GET['page'];
	} else {
		$pg = 1;
	}

	$uf = isset($_GET['city']) ? $_GET['city'] : 'null';
	
	/* CRIAR CONEXÃO COM O BANCO DE DADOS COM PDO 
	$crud = new Crud();

	foreach ($crud->selecionar($uf) as $value) {
		echo $value['CIDADE']."<br/>";
	}

	echo "<hr>";
	echo 'Pagina anterior: '.$paginacao->getPgAnterior().'<br/>';
	echo '<strong>Pagina atual: '.$paginacao->getPgAtual().'</strong><br/>';
	echo 'Pagina próxima: '.$paginacao->getPgProxima().'<br/>';
	*/
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
    <title>Anglesson Araújo - Sistemas Web</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
	<div id="site">
	  <div id="content-left">
	    <div id="photo">
	    </div>
	    <div id="name">
	      <h3>Anglesson Araújo</h3>
	      <h6>Web Development</h6>
	    </div>
	    <nav id="menu">
	      <ul>
	        <li><a id="alterMenu" href="#">Home</a></li>
	        <li><a class="alterMenu" href="#">About Me</a></li>
	        <li><a class="alterMenu" href="#">Projects</a></li>
	      </ul>
	      <div id="social">
	        <ul>
	          <li><a href="#facebook"><i class="fab fa-facebook-square"></i></a></li>
	          <li><a href="#linkedin"><i class="fab fa-linkedin"></i></a></li>
	          <li><a href="#github"><i class="fab fa-github"></i></a></li>
	        </ul>
	    	</div>
	    </nav>
	  </div>
	  <main id="main">
			<section id="home" hidden>
	    	<h2>Home</h2>
	    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis mi at felis dignissim posuere nec vel ipsum. Praesent nibh enim, eleifend id orci nec, molestie mollis libero. Vivamus eu dui sodales, pharetra dolor a, fermentum erat. In dictum lorem vitae nunc placerat ullamcorper vitae a odio. Curabitur cursus diam vitae facilisis lobortis. Ut fermentum, metus sed suscipit egestas, mauris lorem fringilla massa, quis tincidunt ipsum dui id ipsum. Donec blandit at velit sed condimentum. Donec eleifend sollicitudin dui quis aliquam. Aenean at accumsan ligula. Etiam aliquet lectus non lorem ultricies malesuada. Curabitur vulputate felis nec ipsum molestie, nec lacinia ligula accumsan. Vestibulum egestas scelerisque diam. Nulla facilisi. Quisque sit amet tellus quis purus dignissim bibendum.</p>
	    </section>
			<section id="about" hidden>
				<h2>Sobre</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis mi at felis dignissim posuere nec vel ipsum. Praesent nibh enim, eleifend id orci nec, molestie mollis libero. Vivamus eu dui sodales, pharetra dolor a, fermentum erat. In dictum lorem vitae nunc placerat ullamcorper vitae a odio. Curabitur cursus diam vitae facilisis lobortis. Ut fermentum, metus sed suscipit egestas, mauris lorem fringilla massa, quis tincidunt ipsum dui id ipsum. Donec blandit at velit sed condimentum. Donec eleifend sollicitudin dui quis aliquam. Aenean at accumsan ligula. Etiam aliquet lectus non lorem ultricies malesuada. Curabitur vulputate felis nec ipsum molestie, nec lacinia ligula accumsan. Vestibulum egestas scelerisque diam. Nulla facilisi. Quisque sit amet tellus quis purus dignissim bibendum.</p>
			</section>
			<section id="projects" hidden>
				<h2>Projetos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis mi at felis dignissim posuere nec vel ipsum. Praesent nibh enim, eleifend id orci nec, molestie mollis libero. Vivamus eu dui sodales, pharetra dolor a, fermentum erat. In dictum lorem vitae nunc placerat ullamcorper vitae a odio. Curabitur cursus diam vitae facilisis lobortis. Ut fermentum, metus sed suscipit egestas, mauris lorem fringilla massa, quis tincidunt ipsum dui id ipsum. Donec blandit at velit sed condimentum. Donec eleifend sollicitudin dui quis aliquam. Aenean at accumsan ligula. Etiam aliquet lectus non lorem ultricies malesuada. Curabitur vulputate felis nec ipsum molestie, nec lacinia ligula accumsan. Vestibulum egestas scelerisque diam. Nulla facilisi. Quisque sit amet tellus quis purus dignissim bibendum.</p>
			</section>
	  </main>
	</div>
	<script>

		</script>
  </body>
</html>

