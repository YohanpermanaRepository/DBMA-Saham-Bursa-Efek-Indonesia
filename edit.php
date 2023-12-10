<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>

    <style>
        /* style.css */

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .frame {
            margin: 20px;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
        }

        label {
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
            font-size: 18px; /* Ukuran tulisan diperbesar */
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 6px;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px; /* Ukuran tulisan diperbesar */
        }

        button {
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 16px; /* Ukuran tulisan diperbesar */
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            transition: color 0.3s ease;
            font-size: 16px; /* Ukuran tulisan diperbesar */
        }

        a:hover {
            color: #0056b3;
        }

        /* Style untuk responsifitas */
        @media (max-width: 600px) {
            .container {
                margin: 30px 10px;
                padding: 20px;
            }
            input {
                margin-bottom: 15px;
            }
        }
    </style>


</head>

<body>
    <?php
    include "koneksi.php";

    if (isset($_GET['periode'])) {
        $periode = $_GET['periode'];

        // Ambil data berdasarkan periode
        $query = mysqli_query($koneksi, "SELECT * FROM data_forecasting WHERE periode = '$periode'");
        $data = mysqli_fetch_assoc($query);

        if (!$data) {
            echo "Data tidak ditemukan.";
            exit;
        }
    } else {
        echo "Periode tidak ditemukan.";
        exit;
    }

    if (isset($_POST['update'])) {
        // Ambil data yang diinputkan pengguna
        $harga_baru = $_POST['harga'];

        // Hindari SQL injection menggunakan prepared statement
        $query = mysqli_prepare($koneksi, "UPDATE data_forecasting SET harga = ? WHERE periode = ?");
        mysqli_stmt_bind_param($query, 'ss', $harga_baru, $periode);

        if (mysqli_stmt_execute($query)) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data: " . mysqli_error($koneksi);
        }

        mysqli_stmt_close($query);
    }
    ?>
    <div class="frame">
        <!-- Container untuk form edit data -->
        <div class="container">
            <!-- Form untuk mengedit data -->
            <form action="" method="post">
                <label for="harga">Value:</label>
                <input type="text" name="harga" value="<?php echo $data['harga']; ?>" required>
                <button type="submit" name="update">Perbarui</button>
            </form>

            <a href="upload.php">Kembali ke Upload</a>
        </div>
    </div>
</body>

</html>
