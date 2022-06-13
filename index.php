<?php
    if (!empty($_GET["id"])) header("Location: detail.php?id=" . $_GET["id"]);
    // instance databázové třídy PDO pro práci s SQL DB v připojeném režimu (používá se driver pro MySQL)
    $db = new PDO("mysql:host=localhost;dbname=37918108;", "37918108", "Treborak3");
    // chceme posílat řetězce kódované v UTF-8
    $prikaz = $db->prepare("SET NAMES UTF8 ;");
    $prikaz->execute();

$prikaz = $db->prepare("SELECT Id, Zkratka, Rocnik FROM Tridy;");
$prikaz->execute();
printf("<table border='1'>");
while($zaznam=$prikaz->fetch(PDO::FETCH_ASSOC))
{
    
    printf("
        <tr>
            <td>%s</td>
            <td><a href='detail?id=%s'>%s</a></td>
            <td>%s</td>
        </tr>
  ", $zaznam["Id"], $zaznam["Id"], $zaznam["Zkratka"], $zaznam["Rocnik"]) ;
  printf("<br><a href='?id=''>novy</a>");

}
  printf("</table>");
?>
