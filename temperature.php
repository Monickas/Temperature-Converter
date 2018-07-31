
<?php
include "index.php";
function converter(){
  //celsjusz na farenheit i kelwin
  if(isset($_GET["celsjusz"]) && !empty($_GET["celsjusz"])){
    $c=$_GET["celsjusz"];
    $fc=$c*1.8+32;
    $kc=$c+273.15;
    echo "Stopnie Farentheita: ".$fc.", Stopnie Kelvina: ".$kc;
  }
  //farenheit na celsjusz i Kelwin
  if (isset ($_GET["farenheit"]) && !empty($_GET["farenheit"])){
    $f=$_GET["farenheit"];
    $cf=($f-32)*1.8;
    $kf=$f*1.8-459.67;
    echo "Stopnie Celsjusza: ".$cf.", Stopnie Farentheita: ".$kf;
  }
  //kelwin na celsjusz i Farenheit
  if (isset($_GET["kelvin"]) && !empty($_GET["kelvin"])) {
    $k=$_GET["kelvin"];
    $ck=$k-273.15;
    $fk=($k+459.67)*(5/9);
    echo "Stopnie Celsjusza: ".$ck.", Stopnie Kelvina: ".$fk;
  }
  if (empty($_GET["celsjusz"]) && empty($_GET["farenheit"]) && empty($_GET["kelwin"]))
  {
    echo "Wprowadź temperature";
  }
}



 ?>
