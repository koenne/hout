<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Hout</title>
</head>
<body>
    <div class="header">
        <h1>Hout invoegen</h1>
        <a href="index.html"><button>Home</button></a>
        <a href="invoegen.php"><button>Invoegen</button></a>
        <a href="overzicht.php"><button>Overzicht</button></a><br>
    </div>
    <div class="content">
        <?php
            include 'db.php'; 
            $sql = "SELECT * FROM `hout`"; 
            $result = mysqli_query($con, $sql ); 

            echo '<form action = "toevoegen.php" method= "POST">';
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div id='producten'>";
                echo "Product naam:".$row['name']."<br>";
                echo "Prijs: €".$row['price']."<br>";
                echo "Lengte in CM:".$row['lengteCM']."<br>";
                echo "Dikte in MM:".$row['dikteMM']."<br>";
                if($row["bijzonderheden"] == "-") {
                    echo "Geen bijzonderheden<br>";
                }
                else{
                    echo "Bijzonderheden:".$row['bijzonderheden']."<br>";
                }

                echo "<input type='number' name='". $row["houtID"] ."' value='0' min='0'>";
                echo "</div>";     
            }
        ?>
    </div>
    <div class="submit-button"><br><br><br><br><br><br>
        <input type="submit" value="Bestellen"></form>
    </div>
</body>
</html>