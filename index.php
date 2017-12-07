
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php 
session_start(); 
?>
	<meta charset="UTF-8">
	<!-- __________________ Css ____________________________________________________________________________  -->
      
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
   	  
    <!-- __________________ _____________ ____________________________________________________________________-->
	<title>Day 1(Skymsg)</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container-fluid-head">
			
			<img class="img-fluid" src="img/msg-icon.png" alt="desenho de carta">
			<h1> Sky Msg</h1>	
		</div>	
	</div>
	<div class="box-msg">
		<div class="row">
		 <div class="col-lg-6">
	    	<div class="input-group">
	      		<input type="text" class="form-control" id="mensagem" placeholder="Sua mensagem..." aria-label="escreva a sua mensagem aqui">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary" type="button" onclick="Send();">Enviar</button>
			      </span>
			      <button type="button" class="btn btn-danger clean" onclick="limpa();">Clean all</button>
	    	</div>
		  </div>
		</div>
	</div>
	<div class="aviso vanish">
		<h1>Escreva a sua mensagem antes de enviar.</h1>
	</div>
	<div class="container-fluid">
		<div class="box-show-msg" id="box-show-msgs">
			  
			<?php 

				if(!empty($_SESSION['msgs'])){
						$arrayMsgs = array_reverse($_SESSION['msgs']);
						foreach ($arrayMsgs as $key) {
							echo "<div class='card'>"."<div class='card-body'>".$key."</div>"."</div>"."<br>";
						}
				}
				
			?>
		</div>
		
	</div>

	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/jquerry.js"></script>
</body>
</html>