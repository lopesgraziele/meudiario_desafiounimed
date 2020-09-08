<?php
session_start();

?>



<!DOCTYPE html> 

<html>

	<head>   

		<title> Meu Diário - Cuidado com a minha saúde</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css"></li>
		<script type="text/javascript" src="js/script.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




	</head>


	<body background="#000000"> 	



	<header align="center" class="margem" > 
		<nav class="navbar navbar-dark navbar-default bg-dark" >
		<img src="img/logo.png" style="width:30%" alt="Logo-Meu Diário" max-width="100%" cursor="pointer">
    		<div class="container " >

        		<div class="navbar-header" >
           			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               			<span class="sr-only">Toggle navigation</span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>

             		</button>

             			<a class="navbar-brand" href="#"> Início</a>
       			</div>
       			<div id="navbar" class="navbar-collapse collapse" >
           			<ul class="nav navbar-nav ">
           				<li class="active"><a href="#">Meu Painel</a></li>
           				<li><a href="#">Escrever no diário</a></li>
           				<li><a href="#">Meus médicos</a></li>
              			<li><a href="#">Minhas receitas</a></li>
               			<li><a href="#">Meus remédios</a></li>
               			<li><a href="#">Albúns de fotos</a></li>
               			<li><a href="logout.php">Sair</a></li>
            		</ul>
       			</div>
    		</div>
		</nav>			
	
	</header>


		<section class="bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h3 align="left" id="myClass"><br> <strong> Olá, <?php echo $_SESSION['nome'];?>! </strong>  </h3> <br> 
						<h4 align="left" id="myClass" ><strong> Como você está se sentindo?</strong> </h4><br> 
						<label for="Como me sinto"> </label>
					</div>
					
				</div>
			</div>
	</section> 
		<section class="bg-success" padding="50px">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="img/muita-dor.png" style="width:10%" alt="triste" max-width="100%" cursor="pointer">&nbsp;&nbsp;
						<input type="radio" name="sentimento" value="opcao1" margin="1"> Com muita dor </input>&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="img/com-dor.png" style="width:10%" alt="triste" max-width="100%" cursor="pointer">&nbsp;&nbsp;
						<input type="radio" name="sentimento" value="opcao1"> Com dor</input><br><br>
						<img src="img/pouca-dor.png" style="width:10%" alt="triste" max-width="100%" cursor="pointer">&nbsp;&nbsp;
						<input type="radio" name="sentimento" value="opcao1"> Pouca dor </input>&nbsp;&nbsp;
						<img src="img/sem-dor.png" style="width:10%" alt="triste" max-width="100%" cursor="pointer">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" name="sentimento" value="opcao1"> Sem dor </input>&nbsp;&nbsp;<br><br>
					</div>
					<div class="col-md-7">
						<form action="" class="questionario" align="center">
    									<label for="text"> Conte ao seu médico com se sente neste momento!</label> <br>
    									<textarea rows="10" cols="40" placeholder="Hoje me sinto...">  </textarea> 

    					</form>
    					<div class="col-md-12" align="center" style="padding: 20px"> <br>
                        <input type="submit" class="btn btn-default" value="Enviar para o meu médico">  </input>
  					</div>	
					</div>
				</div>
			</div>	
		</section> 

		<!-- RODAPÉ !-->

		<footer class="bg-success" style="background: #ffffff;>
			<div class="container">
			<div class="col-md-12" align="center">
						<img id="imagem" src="img/logo.png" class="img-resize img-responsive hidden-xs img-thumbnial" width="70" height="70" alt="Meu Diário" title= "Meu Diário"" /> 
						<h5 class="meu-diario"><strong> Meu Diário </strong></h5>
					</div><br>
							
			<div class="container">
			<p align="center"> MVP Mega Hack Woman | 2020 </p> 
			</div>
		</footer>

		
 
			<script>

				classColor();
				myClass();	
		
			</script>
	</body>

</html>