
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Buah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
  <h4>Daftar Buah Buahan</h4>
  <div class="row">
    <?php
      $buah = array(
        array("nama"=>"Mangga","deskripsi"=>"manis kadang kecut"), array("nama"=>"Jeruk","deskripsi"=>"kecut"), array("nama"=>"Alpukat","deskripsi"=>"ya gitu aja")
      );
    for($i=0;$i<count($buah);$i++){
      if($buah[$i]["nama"]=="Jeruk"){
        $kelas="border-warning bg-warning-subtle";
      }else{
        $kelas="border-secondary";
      };
      echo "<div class='col-md-4 mb-3'>
        <div class='card $kelas'>
        <div class='card-body'>
          <h5 class='card-title'>".$buah[$i]["nama"]."</h5>
            <p class='card-text'>".$buah[$i]["deskripsi"]."</p>
        </div>
        </div>
        </div>";
      }
    ?>
  </div>
</div>

</body>
</html>