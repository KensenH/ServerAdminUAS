<?php
echo "BISA euy 3";
$link = mysqli_connect("172.21.0.2","root","root", "trucorp-db");
if (!$link){
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}
//echo "Sukses: Koneksi telah terbuat!" . PHP_EOL;
echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;
$sql = "SELECT * FROM users";
$counter = 0;
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $counter = $counter + 1;
    echo "<br>id: " . $row["ID"]. "<br>" .  "Name: " . $row["Nama"]. "<br>" . "Kantor: " . $row["Kantor"]. "<br><br>";
}
 echo "<br>Jumlah User = " . $counter;
} else {
  echo "0 results";
}

mysqli_close($link);
?>

