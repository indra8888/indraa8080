<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data mahasiswa</title>
            <link rel="stylesheet" href="assets/css/style.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 align="center">
            WEB TI UNIMUS
        </h1>
        <table border="1" align="center" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>
                    <a href="index.php">Home</a>
                </td>
                <td>
                    <a href="kontak.php">kontak</a>
                </td>
                <td>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                </td>
            </tr>
        </table>
        <h2 align="center">
            data mahasiswa
        </h2>
    <a href="tambahdata.html">tambahdata</a>
        <table align="center" border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No_hp</th>
                <th>Foto</th>
                <th>Aksi</th>
                <!-- <td>bari 1, kolom2</td> -->
                </tr>
                <tr>
                 <td align="center">1</td>
            <td>indra nur wahyu saputra</td>
            <td>13242520026</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">wowokgeming6670@gmail.com</td>
            <td align="center">0898772537354</td>
            <td><img src="assets/img/foto.jpg" width="70px"></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletdata.php"><button>Hapus</button></a>
            </td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>andika bagus setiawan </td>
            <td>13242520036</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">andikabagussetiawan@gmail.com</td>
            <td align="center">08983321427</td>
            <td><img src="assets/img/foto2.jpg" width="70px"></td>
             <td>

                    <a href="editdata.php"><button>Edit</button></a>
                    <a href="editdata.php"><button>Edit</button></a>
                <td>
             </tr>
           </table>
            <hr>
                <!-- <td>Baris 2, Kolom 1</td> -->
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Indra nur ws</td>
                <td>13242520026</td>
                <td><img src="assets/image/jokowi.jpg" alt="jokowi" width="50px"></td>
            </tr>
        </table>
        <hr>
        <table align="center" border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2"></td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>
</body>
</html>