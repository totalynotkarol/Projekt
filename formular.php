<html>
<body>
<style>

    tr {
      border:1px solid rgb(0, 0, 0);
      font-family: Serif ;
      padding: 5px 6px;
      background-color: #EBEDED;

    }
    tr:nth-child(even) {
    background-color: #AFDEDC;
    }
    
    table {border-collapse: collapse;
    margin: 5px; 
    color: #000000;
   }
    </style>
</style>

<?php
$db = new PDO("mysql:host=localhost;dbname=37918108;", "37918108", "Treborak3");
$prikaz = $db->prepare("SET NAMES UTF8 ;");
$prikaz->execute();

if (!empty($_POST["wyslij"]))
{
    if (!empty($_POST["id"]))
    {
        $prikaz = $db->prepare("UPDATE MPRC SET 
        Zamawiajacaf=:zamawiajacaf, 
        Fakturowanaf=:fakturowanaf,
        Osobadokontaktu=:osobadokontaktu,
        Datakontaktu=:datakontaktu,
        Rodzajogloszenia=:rodzajogloszenia,
        Dziennik=:dziennik,
        Nrogloszenia=:nrogloszenia,
        Terminpublikacji=:terminpublikacji,
        Rozmiar=:rozmiar,
        Grafika=:grafika,
        Rabat=:rabat,
        KalkulacjaProjekt=:kalkulacjaprojekt,
        Zamowienie=:zamowienie,
        WWW=:www,
        Akceptacja=:akceptacja,
        Zlecenie=:zlecenie,
        Projektdruk1=:projektdruk1,
        Projektdruk2=:projektdruk2,
        SK=:sk,
        Danedofaktury=:danedofaktury,
        Word=:word,
        IDi=:idi,
        Potwierdzeniepubl=:potwierdzeniepubl,
        Fakturaemail=:fakturaemail,
        Zamowienie2=:zamowienie2,
        Fakturapoczta=:fakturapoczta,
        Zlecenie2=:zlecenie2,
        Skan=:skan,
        Projektdruk3=:projektdruk3,
        Linki=:linki,
        Word2=:word2,
        Wyslane=:wyslane
        WHERE Id=:id");
        $parametry = array(
        ':id' => $_POST["id"],
        ':zamawiajacaf' => $_POST["zamawiajacaf"],
        ':fakturowanaf' => $_POST["fakturowanaf"],
        ':osobadokontaktu' => $_POST["osobadokontaktu"],
        ':datakontaktu' => $_POST["datakontaktu"],
        ':rodzajogloszenia' => $_POST["rodzajogloszenia"],
        ':dziennik' => $_POST["dziennik"],
        ':nrogloszenia' => $_POST["nrogloszenia"],
        ':terminpublikacji' => $_POST["terminpublikacji"],
        ':rozmiar' => $_POST["rozmiar"],
        ':grafika' => $_POST["grafika"],
        ':rabat' => $_POST["rabat"],
        ':kalkulacjaprojekt' => $_POST["kalkulacjaprojekt"],
        ':zamowienie' => $_POST["zamowienie"],
        ':www' => $_POST["www"],
        ':akceptacja' => $_POST["akceptacja"],
        ':zlecenie' => $_POST["zlecenie"],
        ':projektdruk1' => $_POST["projektdruk1"],
        ':projektdruk2' => $_POST["projektdruk2"],
        ':sk' => $_POST["sk"],
        ':danedofaktury' => $_POST["danedofaktury"],
        ':word' => $_POST["word"],
        ':idi' => $_POST["idi"],
        ':potwierdzeniepubl' => $_POST["potwierdzeniepubl"],
        ':fakturaemail' => $_POST["fakturaemail"],
        ':zamowienie2' => $_POST["zamowienie2"],
        ':fakturapoczta' => $_POST["fakturapoczta"],
        ':zlecenie2' => $_POST["zlecenie2"],
        ':skan' => $_POST["skan"],
        ':projektdruk3' => $_POST["projektdruk3"],
        ':linki' => $_POST["linki"],
        ':word2' => $_POST["word2"],
        ':wyslane' => $_POST["wyslane"]
        );
        $prikaz->execute($parametry);
        header("Location: indexM.php");
    } 
    else
    {
        $prikaz = $db->prepare("INSERT INTO MPRC
        (
        Zamawiajacaf, 
        Fakturowanaf, 
        Osobadokontaktu,
        Datakontaktu,
        Rodzajogloszenia,
        Dziennik,
        Nrogloszenia,
        Terminpublikacji,
        Rozmiar,
        Grafika,
        Rabat,
        KalkulacjaProjekt,
        Zamowienie,
        WWW,
        Akceptacja,
        Zlecenie,
        Projektdruk1,
        Projektdruk2,
        SK,
        Danedofaktury,
        Word,
        IDi,
        Potwierdzeniepubl,
        Fakturaemail,
        Zamowienie2,
        Fakturapoczta,
        Zlecenie2,
        Skan,
        Projektdruk3,
        Linki,
        Word2,
        Wyslane
        ) 
        VALUES 
        (
        :zamawiajacaf, 
        :fakturowanaf, 
        :osobadokontaktu,
        :datakontaktu,
        :rodzajogloszenia,
        :dziennik,
        :nrogloszenia,
        :terminpublikacji,
        :rozmiar,
        :grafika,
        :rabat,
        :kalkulacjaprojekt,
        :zamowienie,
        :www,
        :akceptacja,
        :zlecenie,
        :projektdruk1,
        :projektdruk2,
        :sk,
        :danedofaktury,
        :word,
        :idi,
        :potwierdzeniepubl,
        :fakturaemail,
        :zamowienie2,
        :fakturapoczta,
        :zlecenie2,
        :skan,
        :projektdruk3,
        :linki,
        :word2,
        :wyslane
        );
        ");
        $parametry = array(':zamawiajacaf' => $_POST["zamawiajacaf"],
                           ':fakturowanaf' => $_POST["fakturowanaf"],
                           ':osobadokontaktu' => $_POST["osobadokontaktu"],
                           ':datakontaktu' => $_POST["datakontaktu"],
                           ':rodzajogloszenia' => $_POST["rodzajogloszenia"],
                           ':dziennik' => $_POST["dziennik"],
                           ':nrogloszenia' => $_POST["nrogloszenia"],
                           ':terminpublikacji' => $_POST["terminpublikacji"],
                           ':rozmiar' => $_POST["rozmiar"],
                           ':grafika' => $_POST["grafika"],
                           ':rabat' => $_POST["rabat"],
                           ':kalkulacjaprojekt' => $_POST["kalkulacjaprojekt"],
                           ':zamowienie' => $_POST["zamowienie"],
                           ':www' => $_POST["www"],
                           ':akceptacja' => $_POST["akceptacja"],
                           ':zlecenie' => $_POST["zlecenie"],
                           ':projektdruk1' => $_POST["projektdruk1"],
                           ':projektdruk2' => $_POST["projektdruk2"],
                           ':sk' => $_POST["sk"],
                           ':danedofaktury' => $_POST["danedofaktury"],
                           ':word' => $_POST["word"],
                           ':idi' => $_POST["idi"],
                           ':potwierdzeniepubl' => $_POST["potwierdzeniepubl"],
                           ':fakturaemail' => $_POST["fakturaemail"],
                           ':zamowienie2' => $_POST["zamowienie2"],
                           ':fakturapoczta' => $_POST["fakturapoczta"],
                           ':zlecenie2' => $_POST["zlecenie2"],
                           ':skan' => $_POST["skan"],
                           ':projektdruk3' => $_POST["projektdruk3"],
                           ':linki' => $_POST["linki"],
                           ':word2' => $_POST["word2"],
                           ':wyslane' => $_POST["wyslane"]

                        );
        $prikaz->execute($parametry);
        header("Location: indexM.php");
    } 
}

    printf("<form method='post'>");

    $prikaz = $db->prepare("SELECT 
    Id, 
    Zamawiajacaf, 
    Fakturowanaf, 
    Osobadokontaktu,
    Datakontaktu,
    Rodzajogloszenia,
    Dziennik,
    Nrogloszenia,
    Terminpublikacji,
    Rozmiar,
    Grafika,
    Rabat, 
    KalkulacjaProjekt,
    Zamowienie,
    WWW,
    Akceptacja,
    Zlecenie,
    Projektdruk1,
    Projektdruk2,
    SK,
    Danedofaktury,
    Word,
    IDi,
    Potwierdzeniepubl,
    Fakturaemail,
    Zamowienie2,
    Fakturapoczta,
    Zlecenie2,
    Skan,
    Projektdruk3,
    Linki,
    Word2,
    Wyslane

    FROM MPRC WHERE Id=".$_GET["id"]);
    $prikaz->execute();
    printf("<table>");

    if ($zaznam=$prikaz->fetch(PDO::FETCH_ASSOC))
    {
        printf("<tr>");
        printf("<td>ID</td>");
        printf("<td><input type='number' name='id' value='%s'></td>", $zaznam["Id"]);
        printf("</tr>");
        
        printf("<tr>");
        printf("<td>Zamawiająca firma</td>");
        printf("<td><input type='text' name='zamawiajacaf' value='%s'>", $zaznam["Zamawiajacaf"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Fakturowana firma</td>");
        printf("<td><input type='text' name='fakturowanaf' value='%s'>", $zaznam["Fakturowanaf"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Osoba do kontaktu</td>");
        printf("<td><input type='text' name='osobadokontaktu' value='%s'>", $zaznam["Osobadokontaktu"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Data kontaktu</td>");
        printf("<td><input type='date' name='datakontaktu' value='%s'>", $zaznam["Datakontaktu"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Rodzaj ogloszenia</td>");
        printf("<td><input type='text' name='rodzajogloszenia' value='%s'>", $zaznam["Rodzajogloszenia"]);
        printf("</tr>");
        
        printf("<tr>");
        printf("<td>Dziennik</td>");
        printf("<td><input type='text' name='dziennik' value='%s'>", $zaznam["Dziennik"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Nr. ogloszenia</td>");
        printf("<td><input type='text' name='nrogloszenia' value='%s'>", $zaznam["Nrogloszenia"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Termin publikacji</td>");
        printf("<td><input type='date' name='terminpublikacji' value='%s'>", $zaznam["Terminpublikacji"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Rozmiar</td>");
        printf("<td><input type='text' name='rozmiar' value='%s'>", $zaznam["Rozmiar"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Grafika</td>");
        printf("<td><input type='text' name='grafika' value='%s'>", $zaznam["Grafika"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Rabat</td>");
        printf("<td><input type='number' name='rabat' value='%s'>", $zaznam["Rabat"]);
        printf("</tr>");

        printf("</table>");
        printf("<br>");
        printf("<table>");


        printf("<tr>");
        printf("<td>Klient</td>");
        printf("<td></td>");
        printf("<td>Wydawnictwo</td>");
        printf("<td></td>");
        printf("<td>WWW</td>");
        printf("</tr>");

        printf("<tr>");
        printf("<td>Kalkulacja/projekt</td>");
        printf("<td><input type='checkbox' name='kalkulacjaprojekt' value='%s'></td>", $zaznam["KalkulacjaProjekt"]);
        printf("<td>Zamówienie</td>");
        printf("<td><input type='checkbox' name='zamowienie' value='%s'></td>", $zaznam["Zamowienie"]);
        printf("<td>WWW</td>");
        printf("<td><input type='checkbox' name='www' value='%s'></td>", $zaznam["WWW"]);
        printf("</tr>");
        
        printf("<tr>");
        printf("<td>Akceptacja</td>");
        printf("<td><input type='checkbox' name='akceptacja' value='%s'></td>", $zaznam["Akceptacja"]);
        printf("<td>Zlecenie</td>");
        printf("<td><input type='checkbox' name='zlecenie' value='%s'></td>", $zaznam["Zlecenie"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Projekt druk</td>");
        printf("<td><input type='checkbox' name='projektdruk1' value='%s'></td>", $zaznam["Projektdruk1"]);
        printf("<td>Projekt druk</td>");
        printf("<td><input type='checkbox' name='projektdruk2' value='%s'></td>", $zaznam["Projektdruk2"]);
        printf("<td>SK</td>");
        printf("<td><input type='checkbox' name='sk' value='%s'></td>", $zaznam["SK"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Dane do faktury</td>");
        printf("<td><input type='checkbox' name='danedofaktury' value='%s'></td>", $zaznam["Danedofaktury"]);
        printf("<td>Word</td>");
        printf("<td><input type='checkbox' name='word' value='%s'></td>", $zaznam["Word"]);
        printf("<td>IDi</td>");
        printf("<td><input type='checkbox' name='idi' value='%s'></td>", $zaznam["IDi"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Potwierdzenie publ</td>");
        printf("<td><input type='checkbox' name='potwierdzeniepubl' value='%s'></td>", $zaznam["Potwierdzeniepubl"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Faktura e-mail</td>");
        printf("<td><input type='checkbox' name='fakturaemail' value='%s'></td>", $zaznam["Fakturaemail"]);
        printf("<td>Zamówienie</td>");
        printf("<td><input type='checkbox' name='zamowienie2' value='%s'></td>", $zaznam["Zamowienie2"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Faktura poczta</td>");
        printf("<td><input type='checkbox' name='fakturapoczta' value='%s'></td>", $zaznam["Fakturapoczta"]);
        printf("<td>Zlecenie</td>");
        printf("<td><input type='checkbox' name='zlecenie2' value='%s'></td>", $zaznam["Zlecenie2"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Skan</td>");
        printf("<td><input type='checkbox' name='skan' value='%s'></td>", $zaznam["Skan"]);
        printf("<td>Projekt druk</td>");
        printf("<td><input type='checkbox' name='projektdruk3' value='%s'></td>", $zaznam["Projektdruk3"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Linki</td>");
        printf("<td><input type='checkbox' name='linki' value='%s'></td>", $zaznam["Linki"]);
        printf("<td>Word</td>");
        printf("<td><input type='checkbox' name='word2' value='%s'></td>", $zaznam["Word2"]);
        printf("</tr>");

        printf("<tr>");
        printf("<td>Wysłane</td>");
        printf("<td><input type='checkbox' name='wyslane' value='%s'></td>", $zaznam["Wyslane"]);
        
    
        printf("</tr>");

    
    printf("</table>");
    print("<input type='submit' name='wyslij' value='Wyślij'></form>");
}
?>
</body>
</html>