<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remedial WEB Programming 1</title>
</head>
<body><pre>
<form method="POST" action="output.php">
                  **Data Pendaftaran Kursus**
              ==================================

Nama Siswa   : <input type="text" name="nama_siswa" id="">

Usia         : <input type="text" name="usia" id="">

Materi       : <input type="checkbox" name="materi" id="" value="fullstack">Fullstack Developer
               <input type="checkbox" name="materi" id="" value="devops">Devops
               <input type="checkbox" name="materi" id="" value="sysadmin">Sysadmin

Tipe Kursus  : <select name="tipe_kursus" id="">
                <option value="private">Privat</option>
                <option value="reguler">Reguler</option>
                <option value="online">Online</option>
        </select>

Pembayaran   : <select name="Pembayaran" id="">
                <option value="cash">Cash</option>
                <option value="transfer">Transfer</option>
        </select>


Status       : <input type="radio" name="status" id=""value="karyawan">Karyawan<input type="radio" name="status" value="mahasiswa">Mahasiswa<input type="radio" name="status" value="umum">umum


               <input type="submit" value="Sumbit"> <input type="reset" value="Batal">
</form>
</pre>

    
</body>
</html>