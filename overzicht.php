<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Hout</title>
</head>

<body>
    <div class="header">
        <h1>Overzicht</h1>
        <a href="index.html"><button>Home</button></a>
        <a href="invoegen.php"><button>Invoegen</button></a>
        <a href="overzicht.php"><button>Overzicht</button></a><br>
    </div>
    <div id="content">
        <?php
        $total = 0;
            include 'db.php'; 
            $sql = "SELECT * FROM `orders`"; 
            $result = mysqli_query($con, $sql ); 
            while($row = mysqli_fetch_assoc($result)) {
                $houtID = $row['houtID'];
                $amount = $row['hoeveelheid'];
                $date = $row['date'];
                $sql2 = "SELECT * FROM `hout` where houtID = $houtID"; 
                $result2 = mysqli_query($con, $sql2 ); 
                while($rowNew = mysqli_fetch_assoc($result2)){
                    $price = $rowNew['price'] * $amount;
                echo "<div id='producten'>";
                echo "Product naam:".$rowNew['name']."<br>";   
                echo "Hoeveel keer: " . $amount . "<br>";
                echo "Prijs: €".$price."<br>";
                echo "Datum besteld: " . $date . "<br>";
                echo "</div>";     
                $total = $total + $price;
                }

            }
            ?>
            <div class="submit-button"><br><br><br><br><br><br>
            <?php
                        echo "Total paid = €" . $total;
            ?>
            </div>

    </div>
</body>

</html>