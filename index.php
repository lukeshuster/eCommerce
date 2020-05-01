<?php
//session_start();
require_once("tools.php");
topNav('Home');
styleCurrentNavLink('background-color: #383838; color: white;');
?>

<main>	
    <section>
        <h1>Welcome to Kongas Kreations</h1>
        <p>
            Kongas Kreations was launched by a LARPer who was struggling to find a variety of LARP equipment. Konga decided to begin importing and supplying the local market directly.
            <br>
            Since its inception in 2012 Kongas Kreations has taken on a wide range of commission work has to date produced hundreds of unique pieces, including weapons, armour and jewellery.
            <br>
            Do you have something special in mind but don't know where to get it from? Kongas Kreations may be able to help. Contact us today!
        </p>
    </section>

    <section>
        <h2> Our Brands </h2>
        <p>We stock equipment from all the most popular brands including:</p>
        <ul>
            <li>Calimacil</li>
            <li>Epic Armoury</li>
            <li>Mytholon</li>
            <li>Konga's Kreations</li>
        </ul>
    </section>
    <img style="display:block;padding-top:10px;padding-bottom:1em;margin-left:auto;margin-right:auto;width: 90%;" src="img/banner.jpg" alt="Calimacil Official Retailer">      <!-- Inline styling as this image will only appear on this page -->
</main>
<?php
bottomFooter();
?>
