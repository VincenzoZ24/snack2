

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
	if (isset($_GET['mail'])) {
		$mail = $_GET['mail'];
        $nome = $_GET['nome'];
        $eta = $_GET['eta'];

		$pos_at = strpos($mail, '@');

		if ($pos_at && strpos($mail, '.', $pos_at) && strlen($nome) > 3  && is_numeric($eta)) {
			$message = 'ACCESSO CONSENTITO';
		} else {
			$message = 'ACCESSO NEGATO';
		}
	}
 
?>
	<form action="" method="get">
		<label for="mail">
        <input type="text" id="nome" name="nome" placeholder="inserisci nome">
        <input type="text" name="eta" id="eta" placeholder="inserisci età">
		<input type="text" name="mail" id="mail" placeholder="e-mail ">

        </label>
		<button>Controlla</button>
	</form>

	<h1><?= $message ?></h1>
</body>
</html>