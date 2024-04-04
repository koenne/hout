<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Hout</title>
</head>
<body>
    <div class="content">
        <h1>Hout invoegen</h1>
        <a href="index.html"><button>Home</button></a>
        <a href="invoegen.php"><button>Invoegen</button></a>
        <a href="overzicht.php"><button>Overzicht</button></a>
        <h2>Hout per m³ invullen</h2>
        <?php
            include 'db.php'; 
            $sql = "SELECT * FROM `hout`"; 
            $result = mysqli_query($con, $sql ); 

            echo '<form action = "toevoegen.php" method= "POST">';
            while($row = mysqli_fetch_assoc($result)) {
                echo $row['name']."<br>";
                echo $row['price']."<br>";
                echo $row['lengteCM']."<br>";
                echo $row['dikteMM']."<br>";
                echo $row['bijzonderheden']."<br>";
            
            }
            echo '<input type="submit" value="Bestellen"></form>';
        ?>
    </div>
</body>
</html>