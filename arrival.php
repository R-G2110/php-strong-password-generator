<?php
	session_start();

  if(isset($_SESSION["password"])){
    $password = $_SESSION["password"];
  }else{
    header("Location: ./index.php");
  }

	require_once __DIR__ . "/partials/head.php";
?>
<body>
	<div class="container">
		<div class="title">
			<h1>Strong Password Generator</h1>
			<h2>La password generata è:</h2>
		</div>

		<div class="message">
			<p><?php echo $password ?></p>
		</div>
		
	</div>
</body>
</html>