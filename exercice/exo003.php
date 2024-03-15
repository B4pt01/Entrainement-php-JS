<?php
include("partials/header.php");
include("partials/menu.php");
?>

<?php
$essais = 1;

while (true) {
    $nombre = readline("Entrez un nombre : ");

    if ($nombre % 2 != 0 || $nombre % 3 != 0) {
        echo "Le nombre saisi n'est pas pair ou n'est pas divisible par 3. Essai n°", $essais, "\n";
        $essais++;
    } else {
        echo "Le nombre saisi est pair et divisible par 3. Essai n°", $essais, "\n";
        break;
    }
}
?>

<script>
    var essais = 1;

    while (true) {
        var nombre = prompt("Entrez un nombre : ");

        if (nombre % 2 != 0 || nombre % 3 != 0) {
            console.log("Le nombre saisi n'est pas pair ou n'est pas divisible par 3. Essai n°", essais);
            essais++;
        } else {
            console.log("Le nombre saisi est pair et divisible par 3. Essai n°", essais);
            break;
        }
    }
</script>


<?php
include("partials/footer.php");
?>