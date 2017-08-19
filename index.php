<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
<head>
	<title>portfólio</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/mascara.js"></script>
	<script type="text/javascript" src="js/funcao.js"></script>
</head>
<body>
<div id="fundo">
<section id="box">
	<section id="left">
		<figure>
			<img src="imagens/rhuan.jpg" />
				<small>Rhuan Felipe</small>
		</figure>
	</section>
	<section id="right">
		<nav id="menu">
			<ul>
				<li>
					<a href="#sobre"><img src="imagens/brain.png"></a>
					<span> + Sobre</span>
				</li>
				<li>
					<a href="#curriculo"><img src="imagens/graduacao.png"></a>
					<span>Curriculo</span>
				</li>
				<li>
					<a href="#trabalhos"><img src="imagens/jobs.png"></a>
					<span>Trabalhos</span>
				</li>
				<li>
					<a href="#videos"><img src="imagens/videos.png"></a>
					<span>Videos</span>
				</li>
				<li>
					<a href="#contatos"><img src="imagens/contatos.png"></a>
					<span>Contatos</span>
				</li>
			</ul>
		</nav>
	</section>
</section>
<div id="fundo_box">
	<div id="page">
		<div class="quadros">
			<span class="close">X</span>
			<h1>SOBRE MIM</h1>
			<img src="imagens/rhuan_port.jpg">
			<p>
				Meu nome é Rhuan Felipe da Silva tenho 25 anos sou Técnico de Informática formado, 		Atualmente curso Sistemas de Informação na Faculdade Joaquim Nabuco e estou no 4° periodo.
			</p>
            <p>
            	Trabalho com PHP há mais de 2 ano e possuo conhecimento em Back-end  sou Apaixonado por PHP, técnologias Web e afins, sempre aceito novos desafios e estou sempre a procura de experiência.
            </p>
			<h3>Principais Habilidades</h3>
			<div id="caixa">
				<div class="caixa_page">PHP</div>
				<div class="caixa_page">PHP OO</div>
				<div class="caixa_page">CSS</div>
				<div class="caixa_page">HTML</div>
                <div class="caixa_page">JQUERY</div>
				<div class="caixa_page">JAVASCRIPT</div>
				<div class="caixa_page">AJAX</div>
				<div class="caixa_page">MYSQL</div>
			</div>
		</div>
		<div class="quadros">
			<span class="close">X</span>
			<h1>FORMATOS</h1>
			<a href="upload/CURRICULO_RHUAN.pdf" class="caixa_curriculo" target="_blank">
				<span>PDF</span>
			</a>
			<a href="upload/CURRICULO_RHUAN.docx" class="caixa_curriculo">
				<span>WORD</span>
			</a>
		</div>
		<div class="quadros">
			<span class="close">X</span>
			<h1>TRABALHOS</h1>
			<a href="http://tiemfoco.esy.es/lojaVirtual/" target="_blank" class="caixa_trabalho">
				<span>LOJA VIRTUAL</span>
			</a>
			
		</div>
		<div class="quadros">
			<span class="close">X</span>
			<h1>VIDEO</h1>
			<h2>Galeria de Imagem</h2>
			<br />
			<iframe width="600" height="350" src="https://www.youtube.com/embed/JotiYqUW4Ss" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="quadros">
			<span class="close">X</span>
			<h1>CONTATO</h1>

			<form name="form" onSubmit="return valida()">
			<p>
				<label>NOME:</label> 
<input type="text" name="nome" id="nome" class="campo" placeholder="Informe seu nome">
			</p>
			<p>
				<label>TELEFONE:</label> 
<input type="text" name="telefone" id="telefone" class="campo" onKeyPress="return Enum(event)" placeholder="Informe seu telefone" id="telefone" >
			</p>
			<p>
				<label>ASSUNTO:</label> 
<textarea name="nome" class="campo" placeholder="Escreva seu comentário" ></textarea>
			</p>
			<p>
				<input type="submit" value="ENVIAR" class="btn">
			</p>
			</form>
		</div>
	</div>

</div>
</div>

</body>
</html>

