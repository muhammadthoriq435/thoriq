<?php
$nama=$_POST['nama_siswa'];
$usia=$_POST['usia'];
$materi=$_POST['materi'];
$tipe_kursus=$_POST['tipe_kursus'];
$pembayaran=$_POST['cash'];
$status=$_POST['status'];




if($tipe_kursus="Private (15.000.000)"){
        $harga=15000000;
}elseif($tipe_kursus="Reguler (10.000.000)"){
    $harga=10000000;
}elseif($tipe_kursus="Online (5.000.000)"){
    $harga=5000000;
}

if ($usia <= 20){
    $diskon=0.20 * $harga;
    }
else{
    $diskon=0;
    }

if($pembayaran="Cash (cashback 5.000.0000)"){
        $hargap=5000000;
}elseif($pembayaran=="Transfer"){
}

if($status="Karyawan (biaya admin: 30.000)"){
        $hargas=30000;
}elseif($status=="mahasiswa (20.000)"){
    $hargas=20000;
}elseif($status=="umum (25.000)"){
    $hargas=25000;
}

if($materi="fullstack (25.000.000.000)"){
    $hargam=25000000;
}elseif($asuransi=="devops (30.000.000)"){
$hargam=30000000;
}elseif($asuransi=="sysadmin (15.000.000)"){
$hargam=15000000;
}


$totalharga = $harga * $usia - $diskon + $hargap  + $hargas + $hargam;



?>
<body><pre>
<form method="POST" action="output.php">
            **Data Pendaftaran Kursus**
        ==================================

<table border="1">
<tr>
  <th>Nama Siswa</th>
  <th>:</th>
  <th><?php echo $nama;?></th>
</tr>
<tr>
<td>Usia</td><td>:</td><td><?php echo $usia;?></td>
</tr>
<tr>
<td>Materi</td><td>:</td><td><?php echo $materi;?></td>
</tr>
<tr>
<td>Tipe Khusus</td><td>:</td><td><?php echo $tipe_kursus;?></td>
</tr>
<tr>
<td>Pembayaran</td><td>:</td><td><?php echo $pembayaran;?></td>
</tr>
<tr>
<td>Status</td><td>:</td><td><?php echo $status;?></td>
</tr>
<tr>
<td>Total Harga</td><td>:</td><td><?php echo $totalharga;?></td>
</tr>
</table>