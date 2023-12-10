<!-- import excel ke mysql -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
?>

<?php
 if (isset($_POST['upload'])) {

  require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
  require('spreadsheet-reader-master/SpreadsheetReader.php');

  //upload data excel kedalam folder uploads
  $target_dir = "uploads/".basename($_FILES['dataforecasting']['name']);
  
  move_uploaded_file($_FILES['dataforecasting']['tmp_name'],$target_dir);

  $Reader = new SpreadsheetReader($target_dir);

  foreach ($Reader as $Key => $Row)
  {
   // import data excel mulai baris ke-2 (karena ada header pada baris 1)
   if ($Key < 1) continue;   
   $query=mysqli_query($koneksi,"INSERT INTO data_forecasting(periode,harga) VALUES ('$Row[0]', '$Row[1]')");
  }
  if ($query) {
    echo "Import data berhasil";
   }else{
    echo mysqli_error($koneksi);
   }
 }
 ?>
<?php
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['dataforecasting']['name']);

// alihkan halaman ke index.php
header("location:upload.php");
?>


<?php
// ...

if (isset($_POST['input_manual'])) {
    $periode = $_POST['periode'];
    $harga = $_POST['harga'];

    // Validasi input jika diperlukan

    // Lakukan penambahan data ke database
    $query = mysqli_query($koneksi, "INSERT INTO data_forecasting(periode, harga) VALUES ('$periode', '$harga')");

    if ($query) {
        echo "Input manual berhasil";
    } else {
        echo mysqli_error($koneksi);
    }
}

// ...
?>

