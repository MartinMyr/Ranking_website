<?php
    define('page_title', 'Mina Sköningar');
    $page_Name = " - Listan";
    include 'include/header.php';
    include 'include/function.php';
    
    
    $array = array( '9. The Dark Knight',
        '8. Sagan Om Ringen','9. Django',
        '8. Star Wars', '7. Terminator',
        '7. Alien',
        '7 The Wolf Of Wall Street');
    $arrayOne = array( 'The Dark Knight'=> 'nanananan Batman',
        'Sagan Om Ringen' => 'Jobbig hobbit',
        'Django' =>'Ball film', 'Star Wars' => 'Rymden',
        'Terminator'=> ' Skynet is real',
        'Alien' => 'Space again',
        'The Wolf Of Wall Street' => 'Pengar');
   
    rsort($array);
   
?>  
<ul>
    <?php
        loop($array);
    ?>

</ul>     

<form method = "GET" action = "details.php">
    <select name = "selected">
        <?php
            formLoop($arrayOne);
        ?>
        </select>
        <br/><br/>
        <button type = "submit">skicka </button>
    
</form>



<?php
    include 'include/footer.php';
?>