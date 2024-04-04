<?php
$con = mysqli_connect("localhost","root","","hout"); //Gaat hij connecten naar de database, host is localhost, username is root, password is niks en database naam is autos_van_een_verhuurbedrijf

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); //Als hij niet goed is geeft hij een error
  exit();
}