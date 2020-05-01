<?php
//session_start();
require_once("tools.php");

if(isset($_GET['id']) && (($_GET['id'] == 'faloril')||($_GET['id'] == 'calfera')||($_GET['id'] == 'highlander')||($_GET['id'] == 'baruk')||($_GET['id'] == 'robsharp')||($_GET['id'] == 'captaindeep'))){
    $product_array_id = $_GET['id'];
}
else{
    header("Location: products.php");  // redirect if no product id
    exit("Error: Invalid Product ID");
}

styleCurrentNavLink('background-color: #383838; color: white;');

$productsArray; $headings; cells;
$fp = fopen('products.txt','r'); 
if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
    while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=1; $x<count($cells); $x++) 
            $productsArray[$cells[0]][$headings[$x]]=$cells[$x]; 
    } 
} 
fclose($fp); 

topNav($productsArray[$product_array_id]['title']);
$title = str_replace(' ', '_', $productsArray[$product_array_id]['title']); //POST was cutting off after spaces

echo <<<DOC
    <main>
        <section>
            <div id = "product-images" >
                <h1>{$productsArray[$product_array_id]['title']}</h1>
                <img id = "item-close" src="img/{$product_array_id}-close.png" height="542" width="360" alt="{$productsArray[$product_array_id]['title']} Detailed View">
                <img id = "item-far" src="img/{$product_array_id}-far.png" class = "inactive-image" height="180" width="120" alt="{$productsArray[$product_array_id]['title']} Overview" onclick = enlargeProduct();>
            </div>

            <div class="product-description">
                <h2>Legend</h2>
                    <p>{$productsArray[$product_array_id]['legend']}</p>
                    <h2>Workshop</h2>
                    <p>{$productsArray[$product_array_id]['workshop']}</p>
            </div>
            <div class="product-price">
                <span>$<span id = "price">{$productsArray[$product_array_id]['price']}</span></span>	
            </div>
            
            <form id="incrementer" action="cart.php" method="POST">
            <input type="hidden" id="productID" name="productID" value={$productsArray[$product_array_id]['pid']}>
            <input type="hidden" id="productName" name="productName" value={$title}>
            <input type="hidden" id="product-base-price" value={$productsArray[$product_array_id]['price']}>
            <input id="button-decrease" type="button" value="-">
            <input id="quantity" name = "quantity" type="number" value="1" min="0" step="1" readonly>
            <input id="button-increase" type="button" value="+">
            <button class="button-purchase" type="button" onclick='submitForm()'>Purchase</button>
        </form>
    </section>
</main>
DOC;

?>



<!-- Script to enlarge Picture -->		
<script>
function enlargeProduct() {
    var image1 = document.getElementById("item-close")
    var image2 = document.getElementById("item-far")
    var src = image1.src;
    image1.src = image2.src;
    image2.src = src;
}
</script>


<!-- Script for incrementer -->	
<script>
var input = document.getElementById('quantity');
var number = parseInt(input.value, 10);
var price = parseFloat(document.getElementById("price").value).toFixed(2);
var basePrice = parseFloat(document.getElementById("product-base-price").value).toFixed(2);
document.getElementById('button-increase').onclick = function(){
    number = parseInt(input.value, 10);
    input.value = number + 1
    price = parseFloat(basePrice*(number + 1)).toFixed(2);
    document.getElementById("price").textContent=price.toString();
}
document.getElementById('button-decrease').onclick = function(){
    number = parseInt(input.value, 10);
    if (number > 0){
        input.value = number - 1
        price = parseFloat(basePrice*(number - 1)).toFixed(2);
        document.getElementById("price").textContent=price.toString();
    }
}
</script>

<!-- Script for sumbitting purchase order -->	
<script>
//price = basePrice*input.value;
function submitForm() {
    if (input.value > 0){
        //document.getElementById("product-total-price").value=price;
        document.getElementById("incrementer").submit();
        return true;
    }
    else{
        return false;
    }
}
</script>

<br><br><br><br><br><br><br><br><br><br> <!-- Had a little difficulty keeping the footer at the bottom, in hindsight I should have found a better way of styling the page rather than floating the images to the left -->

<?php
bottomFooter();
?>


