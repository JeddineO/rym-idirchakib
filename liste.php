<?php
$dsn = "mysql:host=localhost;dbname=rym";
$bdd = new PDO($dsn, "root", "");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <button type="button" class="btn btn-success" onclick="print()">Download</button>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">Email</th>
                <th scope="col">phone</th>
                <th scope="col">Attend</th>
                <th scope="col">Meal</th>
                <th scope="col">Comments</th>
                <th scope="col">guest1</th>
                <th scope="col">guest2</th>
                <th scope="col">guest3</th>
                <th scope="col">guest4</th>
                <th scope="col">guest5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $bdd->query("SELECT * FROM guests");
            $guests = $result->fetchAll();

            foreach ($guests as $guest) {
                echo "<tr>
        <th>" . $guest['firstName'] . "</th>
        <th>" . $guest['lastName'] . "</th>
        <th>" . $guest['email'] . "</th>
        <th>" . $guest['phone'] . "</th>
        <th>" . $guest['attending'] . "</th>
        <th>" . $guest['meal'] . "</th>
        <th>" . $guest['comments'] . "</th>
        <th>" . $guest['guest1'] . "</th>
        <th>" . $guest['guest2'] . "</th>
        <th>" . $guest['guest3'] . "</th>
        <th>" . $guest['guest4'] . "</th>
        <th>" . $guest['guest5'] . "</th>
        
    </tr>";
            }
            ?>



    </table>
</body>

</html>