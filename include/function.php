<?php
function loop($array){
    for ($x = 0; $x < count($array); $x++){

        echo "<li>".$array[$x]."</li>";
    };

};
function findFilm($name,$arrayOne){
        foreach($arrayOne as $film){
          
        }

}

function formLoop($array){
    foreach($array as $title => $desc){
        echo "<option value ='" . $title . "'>$title</option>";
    }
}
?>
