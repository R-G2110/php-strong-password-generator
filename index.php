<?php

require_once __DIR__ . './partials/functions.php';

$min = 8;
$max = 32;
$message ="Scegliere una password con un minimo di $min caratteri e un massimo di $max caratteri.";

$password = '';

if (isset($_GET["password_length"]) && !empty($_GET["password_length"])){
	$password_length = $_GET["password_length"];

	if($password_length < $min || $password_length > $max){
		$message = "Errore! Il valore inserito deve essere compreso fra $min e $max";
	}else{

		
    session_start();

    $_SESSION['password'] = passwordGenerator($password_length);

    header('Location: ./arrival.php');
  }
	
}

require_once __DIR__ . "/partials/head.php";
?>
<body>
	<div class="container">
		<div class="title">
			<h1>Strong Password Generator</h1>
			<h2>Genera una password sicura</h2>
		</div>
		<div class="message">
			<p><?php echo $message ?></p>
		</div>
		<div class="generator">
			<form action="index.php" method="GET">
				<div class="row">
					<div class="col-6 ">
						<span>Lunghezza password:</span>
					</div>
					<div class="col-4 ">
						<select class="form-select" id="password_length" name="password_length">
							<option selected value="">Scegliere lunghezza password</option>
							<?php for($i=1; $i<=$max; $i++): ?>
							<option value="<?php echo $i ?>"><?php echo $i ?></option>
							<?php endfor; ?>
						</select>
					</div>
				</div>
				<div class=" col-auto  my-3  ">
					<button type="submit" class="btn btn-primary">Invia</button>
					<button type="reset" class="btn btn-secondary">Annulla</button>
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>