<?php
include("partials/header.php");
include("partials/menu.php");
?>

<?php
$nombre = rand(0, 20);

if ($nombre < 7) {
    echo "Bonjour";
} elseif ($nombre >= 7 && $nombre < 14) {
    echo "Salut";
} else {
    echo "Hello";
}

echo "<br> le nombre est : ", $nombre;
?>
<br>
<br>
<script>
    var nombre = Math.floor(Math.random() * 21);

    if (nombre < 7) {
        document.write("Bonjour");
    } else if (nombre >= 7 && nombre < 14) {
        document.write("Salut");
    } else {
        document.write("Hello");
    }
    document.write(" <br> le nombre est: ", nombre);
</script>


<?php
include("partials/footer.php");
?>