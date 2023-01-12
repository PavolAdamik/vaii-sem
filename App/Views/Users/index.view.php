<?php
/** @var \App\Models\User[] $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\DB\Connection $sql */

//jak to vyselektujem ?
//function get_into($sql, $id_car) {
    $table = $sql->prepare("SELECT id, firstname, lastname, driving_licence, email FROM users WHERE isAdmin 0");
    //$table->execute([':id_car' => $id_car]);
  //  if ($row = $table->fetch()) {
  //      return $row;
  //  }
  //  return false;
//}


?>

<div>
    <h1 class="nadpisH1">Používatelia:</h1>
    <img src="public/images/titulka.jpg" alt="titulna fotka" class="responsive">
</div>

<!--todo: tabulecka-->

<h3 class="nadpisH1">Tabuľka používateľov -----> NEDOROBENE</h3>
<div class="tabulka" >
    <table id="car_rents" >
        <tr>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Vodičský preukaz</th>
            <th>Email</th>
            <th>Zmazať používateľa</th>
        </tr>

                <?php

                //$table =

                    while($row = mysqli_fetch_row($table)){
                        print "\t<tr>\n";
                        for($i = 1; $i < 5; $i++){
                            print "\t\t<td>$row[$i]</td>\n";
                        }
                        print "\t\t<td class='tlacidla kurzor' onclick=\"redirect('del_user',$row[0],'');
                            \"><img src='pictures/delete.png' class='tlacidla' alt='vymazat riadok'></td>\n";
                    }
                    ?>

    </table>

</div>