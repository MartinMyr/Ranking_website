<?php
    define('page_title', 'Mina Sköningar');
    $page_Name = " - Listan";
    include 'include/header.php';
    include 'include/function.php';
    
?>  
<ul>
    <?php
        loop($movies);
    ?>

</ul>     

<form method = "GET" action = "details.php">
    <select name = "selected">
        <?php
            formLoop($movies);
        ?>
        </select>
        <br/><br/>
        <button type = "submit">skicka </button>
    
</form>



<?php
    include 'include/footer.php';
?>