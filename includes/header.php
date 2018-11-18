<?php require_once 'dados.php' ?>
<?php   
    $sqlMenu = "SELECT tropaID, nome FROM tropas";
    $queryMenu = mysqli_query($link, $sqlMenu);
    

    $l = "gigante"
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo utf8_encode($tropaElixir[$l]->getNome()) ?> - Clash Of Clans</title>
<link rel="stylesheet" type="text/css" href="css/custom.css"/>
 <!-- Compiled and minified CSS -->
<link rel="stylesheet" href="css/materialize.min.css">
<!--Import Google Icon Font
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      -->
</head>