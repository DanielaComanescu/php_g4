    <?php

    $name = 'Joh'; // string
    $email = "jon@gmail.com" ; //string
    $age = 12 ; // integer
    $bool = true; //boolean
    $users = [ 'Maurice', 'Geotgette', 'Marc', 'Odile']; //tableau
    $null = null; //il y a rien dedans
    // $obj = { }; //objet

    /*echo $name . ' ' . $age ;
    echo '<br>';
    echo $email;

    echo "<br>";

    echo "mon nom est"." ".$name;
    echo "<br>";
    echo $name." "."a"." ".$age." "."ans";
    echo "<br>";
    echo $name." "."a une adresse email"." ".$email;*/

   /* for ($i=0; $i < 20; $i++) {
        echo "<p>$i</p>";
    } */

   /* for ($i=0; $i < count($array); $i++) {
        echo "<p> $array[$i] </p>";
    } */

    foreach ($users as $key => $user) { //on va parcourir le tableau $users et pour chaque element on va appeler la valeur $user !!!attention $users ≠ $user
        echo "<p> $user à la clé $key </p>";
    }
