<form method=get action="<?php $_SERVER["PHP_SELF"] ?>">
<input name="site" type="url" required>
  <input type="submit">
</form>
<?php
$server = $_SERVER["PHP_SELF"];
$site = $_GET["site"];
$open = $site ? $site : "https://www.eelcogreidanus.nl";
?>
