<?php
/** @var \App\Models\User[] $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\DB\Connection $sql */

//jak to vyselektujem ?
//function get_into($sql, $id_car) {
    //$table = $sql->prepare("SELECT id, firstname, lastname, driving_licence, email FROM users WHERE isAdmin 0");
    //$table->execute([':id_car' => $id_car]);
  //  if ($row = $table->fetch()) {
  //      return $row;
  //  }
  //  return false;
//}


?>

<div>
    <h1 class="nadpisH1">Používatelia:</h1>
    <img src="/public/images/titulka.jpg" alt="titulna fotka" class="responsive">
</div>

<script src="/public/js/users.js"></script>
<link rel="stylesheet" href="/public/css/users.css">

<h3 class="nadpisH1">Tabuľka používateľov</h3>
<div class="tabulka" >
    <table id="pouzivatelia" >
        <tr>
            <th class="tb" onclick="sortTable(0)">Meno</th>
            <th class="tb" onclick="sortTable(1)">Priezvisko</th>
            <th class="tb" onclick="sortTable(2)">Vodičský preukaz</th>
            <th class="tb" onclick="sortTable(3)">Email</th>
<!--            <th>Zmazať používateľa</th>-->
        </tr>
        <tr>
            <?php

            foreach ($data as $user) {
                // print "\t\t<td> $user->getFirstname()</td>\n";
                echo "\t\t<td>".$user->getFirstname()."</td>\n";
                echo "\t\t<td>".$user->getLastname()."</td>\n";
                echo "\t\t<td>".$user->getDrivingLicence()."</td>\n";
                echo "\t\t<td>".$user->getEmail()."</td>\n";
//                echo "\t\t<td class='tlacidla kurzor' onclick='deleteUser(user)'>\n";

//                    print "\t\t<td class='tlacidla kurzor' onclick='$user->delete()' ;
//                            \"><img src='public/images/delete.png' class='tlacidla' alt='vymazat riadok'></td>\n";
//
                /*                    <a href="?c=questions&a=delete&id=<?php echo $question->getId() ?>" class="btn btn-danger">Zmazat</a>*/

                print "\t<tr>\n";
            }
            ?>
        </tr>
    </table>
</div>
<div class="col">
    <p>*ak chceš utriediť tabuľku podľa nejakého stĺpca, klikni na jeho hlavičku</p>
</div>