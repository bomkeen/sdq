<!DOCTYPE html>
<?php
include("condb.php");

$i=1;
$q="
SELECT 
CONCAT(p.pname,' ',p.fname,' ',p.lname) as pname 
from lab_head lh 
JOIN patient p on lh.hn=p.hn
WHERE order_date between '2018-01-01' and '2018-01-20' and lh.confirm_report='Y'
AND lh.department='OPD' AND lh.confirm_report='Y' GROUP BY lh.vn limit 50
";
$result = $mysqli->query($q); 
//$rs=$result->fetch_object();
$total=$result->num_rows; 
$rows = 0;
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bs/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { margin: 0; }
            #container { background: PaleGreen ; }
            #header { background: gray; }
            #content { background: red; }
            #details { background: green; }
            html, body, #container { height: 100%; }
            #header { height: 80px; }
            #main { display: flex; height: calc(100% - 80px); }
            #row1 {  display: flex;  height: 60%; width: 100%}
            #row2 {  display: flex;  height: 30%; width: 100%}
            #left { border-style: solid; overflow-y: auto; background: GhostWhite ;height: 100%; width: 20%; }
            #lefttext { border-style: solid; display: flex; background: Aquamarine  ; height: 100%; min-width: 80%; }
            #left2 { border-style: solid; overflow-y: auto; background: GhostWhite ;height: 100%; width: 20%; }
            #lefttext2 { border-style: solid; display: flex;  background: Bisque  ; height: 100%; min-width: 80%; }

        </style>
    </head>
    <body >
        <div id="container">
            <div id="row1">
                <div id="left">
                    <center><h2><b>รายชื่อคนไข้ที่ผล LAB ออกแล้ว</b></h2></center>
                </div>
               

                <div id="lefttext">
                    <div class="col-md-12">
                        
                        <?php
                        echo "<table  border='2' > <tr>";
while ($rs = $result->fetch_object()) {
    $rows++;
    echo "<td align='center'>";
    echo "<h5><b>".$rs->pname."</b></h4>"; 
    echo"</td>";
    if (($rows) % 5 == 0) {
                        echo"<tr></tr>";
                    }
                }
                echo"</tr></table>";
                ?>

                    </div>                    
                </div>
            </div>
             <div id="row2">
                <div id="left2">
                   <center><h2><b>คิวเบาหวานที่ผล LAB ออกแล้ว</b></h2></center>
                </div>
                <div id="lefttext2">ข้อความ 2 </div>
            </div>
            <marquee direction="left"><h3><font color="red"><b>
                       โรงพยาบาลสมเด็จพระสังฑราช
                    </b></h3></marquee>
        </div>
  <?php
mysqli_close();
    ?>
        <script src="bs/js/bootstrap.min.js"></script>
    </body>
</html>
