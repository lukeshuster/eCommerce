<?php
//session_start();
require_once("tools.php");

if (isset($_GET['cartSessionClear'])) {
  unset($_SESSION['cart']);
  header("Location: products.php");
}


topNav('Cart');
styleCurrentNavLink('background-color: #383838; color: white;');

//$productsArray; $headings; cells;
$fp = fopen('products.txt','r'); 
if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
    while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=1; $x<count($cells); $x++) 
            $productsArray[$cells[0]][$headings[$x]]=$cells[$x]; 
    } 
} 
fclose($fp); 

if( $_POST["quantity"] || $_POST["productID"] || $_POST["productName"])
{
$title = str_replace('_', ' ', $_POST["productName"]);
$priceCalc = $productsArray[$_POST['productID']]['price'] * $_POST['quantity'];
$priceCalc = number_format($priceCalc,2); //two decimal places
$_SESSION['cart'][] = array (
    'qty' => $_POST['quantity'],
    'pid' => $_POST['productID'],
    'name' => $title,
    'price' => $priceCalc,
);
}


?>

<body>
  <div id="wrapper">
      <h1 id ="carth1">Shopping Cart</h1>
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="firstcol">Qty</th>
            <th class="secondcol">Product Name</th>
            <th class="thirdcol">Price</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
<?php

$GLOBALS['totalPrice'] = 0;        
foreach($_SESSION['cart'] as $x){
$GLOBALS['totalPrice'] += $x['price'];
echo <<<DOC
            <tr class="productitm">
            <td><input type="number" value={$x['qty']} min="0" max="99" class="qtyinput" readonly></td>
            <td>{$x['name']}</td>
            <td>{$x['price']}</td>
            <td><span class="remove">X</span></td>
          </tr>
DOC;
}

?>
          <tr class="price">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span class="thick">$<?php echo number_format($totalPrice,2); ?></span></td>
          </tr>
          
          <tr class="checkoutrow">
            <form id="thecheckoutrow" action="cart.php" method="GET">
            <input type="hidden" id="productName" name="cartSessionClear" value=1>
            <td colspan="3" class="checkout"><button id="emptycartbtn" onclick='submitForm()'>Empty Cart</button></td>
            </form>
            <td colspan="3" class="checkout"><button id="submitcartbtn">Checkout!</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

<!-- Script for sumbitting cart clear -->	
<script>
function submitForm() {
    document.getElementById("thecheckoutrow").submit();
    return true;

}
</script>

<?php
bottomFooter();
?>