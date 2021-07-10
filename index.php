<!-- Esercizio:
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Aggiungete una pagina (vista) in cui creare istanze delle classi create e mostrare alcuni dati. Su cosa sia la pagina siete liberi (potrebbe essere la pagina di account dell'utente, oppure una pagina di elenco prodotti o dettaglio prodotto, con visualizzazione dello username utente in alto a destra). -->

<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Premium.php';
require_once __DIR__ . '/classes/PremiumUser.php';
require_once __DIR__ . '/classes/Products.php';

$user = new User("Maurizio","Rossi","mrossi@mail.com");
$premiumUser1 = new PremiumUser("Pietro","Bianchi","bianchipietro@gmail.com","free_shipment");
$premiumUser2 = new PremiumUser("Luisa","Neri","lneri@gmail.com","20_discount");
$product1 = new Products("PS5",399,10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>E-Shop</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <h1>Vantaggi premium:</h1>
            <div class="product">
                <h3>Utente Base</h3>
                <?= $user->getFullName() ?>
                <br>
                <?= $product1->productName ?>
                <br>
                Prezzo di spedizione: 
                <?= $product1->getBasicShipmentPrice() ?>
                <br>
                Prezzo prodotto: 
                <?= $product1->getBasicProdutPrice()?>
                <br> 
            </div>
            <div class="product">
                <h3>Utente Premium 1 Diamond</h3>
                <?= $premiumUser1->getFullName() ?>
                <br>
                <?= $product1->productName ?>
                <br>
                Prezzo di spedizione: 
                <?= $product1-> setFinalShippingPrice($premiumUser1) ?>
                <br>
                Prezzo prodotto: 
                <?= $product1->setFinalPrice($premiumUser1)?>
                <br> 
            </div>
            <div class="product">
                <h3>Utente Premium 2 Diamond</h3>
                <?= $premiumUser2->getFullName() ?>
                <br>
                <?= $product1->productName ?>
                <br>
                Prezzo di spedizione: 
                <?= $product1->setFinalShippingPrice($premiumUser2) ?>
                <br>
                Prezzo prodotto: 
                <?= $product1->setFinalPrice($premiumUser2)?>
                <br> 
            </div>
        </div>
    </main>
</body>
</html>