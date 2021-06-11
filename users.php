<?php
//ici on va se creer un tableau $users
// un nom, une couleur préférée, un age

$users = [
    ['Paulette', 'rouge', 85],
    ['Martin', 'bleu', 12],
    ['Octarine', 'orange', 30],
];
//var_dump($users);


/* foreach ($users as $user) { //on va parcourir le tableau $users et pour chaque element on va appeler la valeur $user !!!attention $users ≠ $user
    echo "<p> $user </p>";
} */

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=].0">
     <title>Utilisateurs</title>
 </head>
 <body>
     <table>
         <tr> 
             <th> Nom</th>
             <th> Couleur</th>
             <th> Age</th>
         </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td> <?php echo $user[0] ?> </td>
                <td> <?php echo $user[1] ?> </td>
                <td> <?php echo $user[2] ?> </td>
            </tr>
        <?php } ?>
             
     </table>
 </body>
 </html>
