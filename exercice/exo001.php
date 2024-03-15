<?php
include("partials/header.php");
include("partials/menu.php");
?>

<?php
$prix_ht = 10;
$taux_tva = 20;
$prix_ttc = $prix_ht + ($prix_ht * $taux_tva / 100);
echo "Voici le prix : ", $prix_ht, " € HT - ", $prix_ttc, " € TTC";
?>
<br>
<script>
    var prix_ht = 10;
    var taux_tva = 20;
    var prix_ttc = prix_ht + (prix_ht * taux_tva / 100);
    document.write("Voici le prix : ", prix_ht, "€ HT - ", prix_ttc, "€ TTC");
</script>

<?php
include("partials/footer.php");
?>