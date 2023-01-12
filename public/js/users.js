function deleteUser(user) {

}

function sortTable(n) {
    var tabulka, riadky, vymena, pozicia, aktualnyRiadok, nasledujuciRiadok, nastalaVymena, smer;
    tabulka = document.getElementById("pouzivatelia");
    vymena = true;

    // Zmenim smer triedenia na vzostupne
    smer = "vzostupne";

    //vymienam kym bola vymena
    while (vymena) {
        vymena = false;
        riadky = tabulka.rows;

        //poz 0 -> nazov tabulecky
        for (pozicia = 1; pozicia < (riadky.length - 1); pozicia++) {
            nastalaVymena = false;
            aktualnyRiadok = riadky[pozicia].getElementsByTagName("TD")[n];
            nasledujuciRiadok = riadky[pozicia + 1].getElementsByTagName("TD")[n];
            //porovnavanie aktualneho a nasledujuceho riadku
            if (aktualnyRiadok.innerHTML.toLowerCase() > nasledujuciRiadok.innerHTML.toLowerCase()) {
                nastalaVymena = true;
                break;
            }
        }

        //ak nastala vymena, vymenim
        if (nastalaVymena) {
            riadky[pozicia].parentNode.insertBefore(riadky[pozicia + 1], riadky[pozicia]);
            vymena = true;
        }
    }
}
