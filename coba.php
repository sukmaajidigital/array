<?php 

$siswa = [
["andi", "XIIA", "2"],
["nita", "XIIB", "8"],
["beni", "XIID", "5"],
];

// echo $siswa[1]["0"];
// echo " kelas ";
// echo $siswa[2]["1"];
// echo " absen ";
// echo $siswa[0]["2"];


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
echo $siswa[0][0]." Kelas ".$siswa[0][1]." Absen ". $siswa[0][2];

	 ?>
	 <br>

	 <?php 
echo $siswa[1][0]." Kelas ".$siswa[1][1]." Absen ". $siswa[1][2];
	  ?>
	  <br>

	 <?php 
echo $siswa[2][0]." Kelas ".$siswa[2][1]." Absen ". $siswa[2][2];
	  ?>

</body>
</html>

<?php

$benda = ["meja" => 7, "kursi" => 9, "lampu" => 5];
 echo $benda["lampu"];
?>