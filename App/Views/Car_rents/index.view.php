<?php
/** @var \App\Models\Car_rent[] $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\DB\Connection $sql */

//jak to vyselektujem ?
function get_into($sql, $id_car) {
    $table = $sql->prepare("SELECT c.name, u.firstname, u.lastname, cr.dat_rent, cr.dat_return 
                                FROM cars AS c 
                                INNER JOIN car_rents AS cr
                                    ON c.id = cr.id_car
                                INNER JOIN users AS u
                                ON u.id = cr.id_user;");
    $table->execute([':id_car' => $id_car]);
    if ($row = $table->fetch()) {
        return $row;
    }
    return false;
}

?>

<div>
    <h1 class="nadpisH1">Aktuálne prenájmy vozidiel:</h1>
    <img src="public/images/titulka.jpg" alt="titulna fotka" class="responsive">
</div>

<!--todo: tabulecka-->

<h3 class="nadpisH1">Tabuľka prenájmov -----> NEDOROBENE</h3>
<div class="tabulka" >
    <table id="car_rents" >
        <tr>
            <th>Názov vozidla</th>
            <th>Meno nájomcu</th>
            <th>Priezvisko nájomcu</th>
            <th>Požičané od</th>
            <th>Požičané do</th>
        </tr>

        <?php
        foreach ($data as $question) {
            //print "\t\t<td>$row[$i]</td>\n";
         } ?>

<!--        --><?php
//
//        //$table =
//
//            while($row = mysqli_fetch_row($data)){
//                print "\t<tr>\n";
//                for($i = 1; $i < 5; $i++){
//                    print "\t\t<td>$row[$i]</td>\n";
//                }
//                print "\t\t<td class='tlacidla kurzor' onclick=\"redirect('del_user',$row[0],'');
//                    \"><img src='pictures/delete.png' class='tlacidla' alt='vymazat riadok'></td>\n";
//            }
//            ?>

    </table>

</div>