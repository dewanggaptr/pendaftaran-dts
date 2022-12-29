<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Peserta</title>
</head>

<body>
    <h1><img src="logo.png" align="middle" style="width:80px;height:80px"> DIGITAL TALENT</h1>
    <header>
        <h3>Formulir Pendaftaran Peserta DIGITAL TALENT</h3>
    </header>

    <form action="" method="POST">

        <fieldset>

            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" required />
            </p>
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" required></textarea>
            </p>
            <p>
                <label for="jenisKelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenisKelamin" value="laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jenisKelamin" value="perempuan"> Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama: </label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah">Sekolah Asal: </label>
                <input type="text" name="sekolah" required />
            </p>
            <p>
                <input type="submit" value="Simpan" name="simpan" style="padding:0.4% 0.8%; background-color:#1E90FF; color:white; text-decoration:none;" />
                <a href="list-peserta.php" style="padding:0.4% 0.8%; background-color:#1E90FF; color:white; text-decoration:none;">Kembali</a>
            </p>

        </fieldset>

    </form>
    <?php
    include 'koneksi.php';
    if (isset($_POST['simpan'])) {
        $insert = mysqli_query($db, "INSERT INTO peserta VALUES(
                                    '" . $_POST['id'] . "',
									'" . $_POST['nama'] . "',
									'" . $_POST['alamat'] . "', 
									'" . $_POST['jenisKelamin'] . "',
									'" . $_POST['agama'] . "',
									'" . $_POST['sekolah'] . "')");
        if ($insert) {
            echo 'Data Berhasil Disimpan';
        } else {
            echo 'Data Gagal Ditambahkan';
        }
    }
    ?>

</body>

</html>