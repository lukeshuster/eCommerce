<?php
error_reporting(0); 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
function topNav($pageTitle){
echo <<<DOC
<html lang='en'>
<head>
    <link href="//fonts.googleapis.com/css?family=Berkshire+Swash|Lato" rel="stylesheet">
    <meta charset="utf-8">
    <title>$pageTitle</title>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <nav class="main-nav">
        <img class="logo" src="img/KKlogo.png" alt="Konga's Kreations">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="login.php">Log In</a>
        <a href="cart.php">My Cart</a>
        </nav>
</header>
DOC;

}

function bottomFooter(){
echo <<<DOC
<footer>
    <div>&copy;<script>
    document.write(new Date().getFullYear());
    </script> Luke Shuster s3725150</div>
    <div>Disclaimer: This website is not a real website. It is an incomplete sample eCommerce website developed as a part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here.</div>
</footer>
</body>
</html>
DOC;
}

function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME']; 
  $bits = explode('/',$here); 
  $filename = $bits[count($bits)-1]; 
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}

?>




