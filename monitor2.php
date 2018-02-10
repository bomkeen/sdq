<!DOCTYPE html>
<?php
include("condb.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
<style>
header, footer {
    padding: 1em;
    color: white;
 background-color: MediumSeaGreen;
    clear: left;
    text-align: center;
}

</style>
</head>
<body >
  
    <div class="row">
        <div class="col-md-12 ">
           <header>
   <h1>รายชื่อผู้ป่วยที่ผลตรวจ LAB เสร็จแล้ว</h1>
</header> 
        </div>
    </div>

  <?php
$i=1;
$q="
SELECT 
CONCAT(p.pname,' ',p.fname,' ',p.lname) as pname 
from lab_head lh 
JOIN patient p on lh.hn=p.hn
WHERE order_date between '2018-01-01' and '2018-01-20' and lh.confirm_report='Y'
AND lh.department='OPD' AND lh.confirm_report='Y' GROUP BY lh.vn
";
$result = $mysqli->query($q); // ทำการ query คำสั่ง sql 
$total=$result->num_rows;  // นับจำนวนถวที่แสดง ทั้งหมด
// วนลูปแสดงข้อมูล
?>
     
 <div class="row">
      
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>รายชื่อผู้ป่วยนอกทั่วไป</h2>
                </div>
                        <h3><p>
<?php 
while($rs=$result->fetch_object()){ 
    echo $rs->pname.'   ::   ' ;
}
?>
                    </p></h3>
             </div>
        </div>
        <div class="col-md-4">
             <div class="panel panel-warning">
                <div class="panel-heading">
                    <h2>ตามคิว Clinic</h2>
                </div>
            <h3><p>fjfjjfjfjfjfjfjfffffff
                fffffffffffffffffffffffffffffffffffffffffff
                ffffffffffffffffdsadcrdewlkrhnvleshtvlkeshtv
                lnewtj;nevtj;lertvj;tnetjerltvjnewttnrtnrel.eff
                ffffffffffffffffffffffffffffffffffffff</p></h3>
             </div>
        </div>
    </div>

    <?php
mysqli_close();
    ?>
    <script src="bs/js/bootstrap.min.js"></script>
</body>
</html>
