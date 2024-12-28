<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("conn.php");    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework</title>
        <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


<style>
    body{
        font-family: "Kanit", serif;
  font-weight: 600;
  font-style: normal;
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 100px;
    }

</style>
</head>
<body>
    <h1>ข้อมูลการ์ดจอ</h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">แบรน</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="brand">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">โมเดล</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="model">
    </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">หน่วยความจำ</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="memory">
  </div>
  <label for="age1" class="col-sm-2">GB</label>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">ชนิดของหน่วยความจำ</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="Memory_Type">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">อินเตอร์เฟซ</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="Interface">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">ชิบเซ็ต</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="Chipset">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">วันวางจำหน่าย</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="Release_Date">
  </div>
  </div>
  <div class="row mb-3">
  <label for="inputEmail3" class="col-sm-2">ราคา</label>
  <div class="col-sm-3">
  <input type="text" class="form-control" id="age" name="price">
  </div>
   <label for="age1" class="col-sm-2">บาท</label>
  </div>
  </div>

  <button type="submit" class="btn btn-primary">บันทึก</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<!-- php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $mem =$_POST["memory"];
    $price = $_POST["price"];
    $memtype = $_POST["Memory_Type"];
    $Interface = $_POST["Interface"];
    $Chipset = $_POST["Chipset"];
    $rdate = $_POST["Release_Date"];


    // เพิ่มข้อมูล
    try {
        $sql = "INSERT INTO gpu (brand, model, memory, price, Memory_Type, Interface, Chipset, Release_Date)
        VALUES ('$brand', '$model', '$mem','$price', '$memtype', '$Interface', '$Chipset', '$rdate')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<div class='alert alert-info'>
        <strong>บันทึกเสร็จแล้ว! </strong>คุณได้บันทึกข้อมูล 1 รายการแล้ว
      </div>";
      } catch(PDOException $e) {
        echo $sql . "บันทึกข้อมูลผืดพลาด<br>" . $e->getMessage();
      }
      
      $conn = null;
    
}
?>

</body>
<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>