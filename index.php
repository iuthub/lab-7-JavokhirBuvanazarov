<?php
include("connection.php");

$searchValue="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $searchValue=$_POST["searchValue"];
}

$stmt=$worlddb->prepare("SELECT * FROM countries WHERE name LIKE ?");

$stmt->execute(array("{$searchValue}%"));
$rows=$stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>World Countries</title>
    </head>
    <body>
        <form action="index.php" method="post">
            Search Country: <input type="text" name="searchValue" value="<?= $searchValue ?>">
            <input type="submit" value="Search">
        </form>

         <table>
            <tr>
                <th>Name</th>
                <th>Continent</th>
                <th>Population</th>
            </tr>
            
            <?php foreach($rows as $country) { ?>         
                <tr>
                    <td><?= $country["name"] ?></td>
                    <td><?= $country["continent"] ?></td>
                    <td><?= $country["population"] ?></td>
                </tr>
            <?php } ?>
        </table>

    </body>
</html>