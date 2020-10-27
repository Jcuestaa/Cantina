<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nomError = $emailError = $telErr = "";
$nom = $email = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomError = "Nom obligatori";
  } else {
    $nom = test_input($_POST["nom"]);
  }
  
  if (empty($_POST["tel"])) {
    $telError = "Telefon obligatori";
    }
    else if(preg_match('/[0-9]{9}/',"Telefons")){
        $tel = test_input($_POST["tel"]);
    }
    
  if (empty($_POST["email"])) {
      $emailError = "Email obligatori";
  } else {
    $email = test_input($_POST["email"]);
  }
    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Dades per Comanda</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nom: <input type="text" name="nom">
  <span class="error">* <?php echo $nomError;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>
  Telefon: <input type="text" name="tel">
  <span class="error">*<?php echo $telError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nom;
echo "<br>";
echo $email;
echo "<br>";
echo $tel;
echo "<br>";

?>

</body>
</html>