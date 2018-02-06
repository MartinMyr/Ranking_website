<?php $selectedFilm = $_GET["selected"];

?>

<?php include "include/header.php";
    include "include/function.php";
?>


<?php
writeThisMovie($movies,$selectedFilm);
?>

<?php include "include/footer.php";
?>