<?php
function writeThisMovie($movies, $selectedFilm){
   ?> <h1> Allt du behöver veta om: <br/></h1> <h3> 
    <?php echo "<h2>". $movies[$selectedFilm]["namn"]."</h2>". "<br>"."<p>". $movies[$selectedFilm]["beskrivning"]."</p>";
?>
   </h3>
  <?php
}


function loop($movies){
    foreach($movies as $key => $value){

        echo "<li>".$value["namn"].":".$value["poäng"]. "</li>";
    };

};


function formLoop($movies){
    foreach($movies as $key => $value){
        echo "<option value ='" . $key ."'>" . $value['namn'] . "</option>";
    }
}



$movies = array(
    array('namn' => 'The dark knight', 'poäng' => 9 , 'beskrivning' => 'nanananana Batman!'),
    array('namn' => 'Sagan Om Ringen', 'poäng' => 8 , 'beskrivning' => 'Jobbig hobbit'),
    array('namn' => 'Django', 'poäng' => 9 , 'beskrivning' => 'Ball film'),
    array('namn' => 'Star Wars', 'poäng' => 8 , 'beskrivning' => 'Rymden och grejer'),
    array('namn' => 'Terminator', 'poäng' => 6 , 'beskrivning' => 'Avsluta!!'),
    array('namn' => 'Alien', 'poäng' => 7 , 'beskrivning' => 'Rymden igen'),
    array('namn' => 'The Wolf Of Wall Street', 'poäng' => 7 , 'beskrivning' => 'Cash flow'),
  

);
?>