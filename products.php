<?php
//session_start();
require_once("tools.php");
topNav('Products');
styleCurrentNavLink('background-color: #383838; color: white;');
?>

<main>	
    <div id="prod-img">
        <figure>
            <a href="product.php?id=faloril">
                <img src="img/faloril-far.png" height="271" width="180" alt="Faloril, The Claw">
            </a>
            <figcaption>
                <p>
                    <a href="product.php?id=faloril">Faloril, The Claw</a> 
                    <br>
                    This elven-inspired sword is a masterpiece of unparalleled details. 
                </p>
            </figcaption>
        </figure>

        <figure>
            <a href="product.php?id=calfera">
                <img src="img/calfera-far.png" height="271" width="180" alt="Calfera's Hammer">
            <a>
            <figcaption>
                <p>
                    <a href="product.php?id=calfera">Calfera's Hammer</a>
                    <br>
                    The head of this hammer is made of hollow foam, which makes it very safe for LARP battles. 
                </p>
            </figcaption>
        </figure>

        <figure>
            <a href="product.php?id=highlander">
                <img src="img/highlander-far.png" height="271" width="180" alt="Highlander">
            </a>
            <figcaption>
                <p>
                    <a href="product.php?id=highlander">Highlander</a>
                    <br>
                    This two-handed-length, steel-colored blade has a silver edge for an increased realism.
                </p>
            </figcaption>
        </figure>

        <figure>
            <a href="product.php?id=baruk">
                <img src="img/baruk-far.png" height="271" width="180" alt="Baruk, The Judge">
            </a>
            <figcaption>
                <p>
                    <a href="product.php?id=baruk">Baruk, The Judge</a>
                    <br>
                    The Baruk axe features a steel head with a silver edge and a golden cross.
                </p>
            </figcaption>
        </figure>

        <figure>
            <a href="product.php?id=robsharp">
                <img src="img/robsharp-far.png" height="271" width="180" alt="Rob Sharp">
            </a>
            <figcaption>
                <p>
                    <a href="product.php?id=robsharp">Rob Sharp</a>
                    <br>
                     This sword features a gold guard and the handle is covered with leather for a historical look.
                </p>
            </figcaption>
        </figure>

        <figure>
            <a href="product.php?id=captaindeep">
                <img src="img/captaindeep-far.png" height="271" width="180" alt="Captain Deep">
            </a>
            <figcaption>
                <p>
                    <a href="product.php?id=captaindeep">Captain Deep</a>
                    <br>
                     Captain Deep's scimitar is fitted with an iron-coloured foam blade, and includes many small details.
                </p>
            </figcaption>
        </figure>
    </div>
</main>
        
<?php
bottomFooter();
?>
