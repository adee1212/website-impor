<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2c3e50;
        }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }

        input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: 500;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background-color: #2980b9;
        }

        .status-note {
            font-size: 14px;
            color: #7f8c8d;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Barang</h2>
        <form action="/barang/store" method="post">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required>
            </div>

            <div class="form-group">
                <label for="hs_code">HS Code</label>
                <input type="text" id="hs_code" name="hs_code" placeholder="Masukkan HS Code" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" placeholder="Masukkan jumlah barang" required>
            </div>

            <div class="form-group">
                <label for="harga">Harga (Rp)</label>
                <input type="number" id="harga" name="harga" placeholder="Masukkan harga barang" required>
            </div>

            <div class="form-group">
                <label for="cbm">Volume (CBM)</label>
                <input type="number" id="cbm" name="cbm" step="0.01" min="0" placeholder="Masukkan volume dalam CBM" required>
            </div>

            <div class="form-group">
                <label for="status_pengiriman">Status Pengiriman</label>
                <input type="text" id="status_pengiriman" name="status_pengiriman" value="belum dikirim" readonly>
                <p class="status-note">Status default "belum dikirim" akan otomatis terisi</p>
            </div>

            <div class="form-group">
                <label for="cost_modal">Cost Modal</label>
                <input name="cost_modal" placeholder="Biaya Modal" type="number" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="harga_aktual">Harga Aktual</label>
                <input name="harga_aktual" placeholder="Harga Aktual Produk" type="number" step="0.01" required>
            </div>

            <!-- ✅ Tambahkan input nomor resi -->
            <div class="form-group">
                <label for="nomor_resi">Nomor Resi</label>
                <input type="text" id="nomor_resi" name="nomor_resi" value="<?= esc($nomor_resi) ?>" readonly>
            </div>


            <button type="submit">Simpan Barang</button>
        </form>
    </div>
</body>

</html>