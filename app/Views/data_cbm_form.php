<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan CBM</title>
    <style>
        :root {
            --primary: #3498db;
            --primary-dark: #2980b9;
            --secondary: #2c3e50;
            --light-gray: #f5f7fa;
            --medium-gray: #ecf0f1;
            --dark-gray: #7f8c8d;
            --border-radius: 8px;
            --box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-gray);
            color: var(--secondary);
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: var(--secondary);
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
        }

        input,
        select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input:focus,
        select:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        input[readonly] {
            background-color: var(--medium-gray);
            font-weight: bold;
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 1em;
        }

        button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 14px 20px;
            font-size: 16px;
            border-radius: var(--border-radius);
            cursor: pointer;
            width: 100%;
            font-weight: 500;
            transition: background-color 0.3s;
            margin-top: 10px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        button:hover {
            background-color: var(--primary-dark);
        }

        .result-group {
            background-color: var(--medium-gray);
            padding: 15px;
            border-radius: var(--border-radius);
            margin-top: 20px;
        }

        .result-group label {
            color: var(--primary-dark);
            font-weight: 600;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        @media (max-width: 600px) {
            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Perhitungan CBM Barang</h1>
        <form action="/data-cbm/save" method="post" oninput="hitungCBM()">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="panjang">Panjang (cm)</label>
                    <input type="number" id="panjang" name="panjang" placeholder="0" required>
                </div>

                <div class="form-group">
                    <label for="lebar">Lebar (cm)</label>
                    <input type="number" id="lebar" name="lebar" placeholder="0" required>
                </div>

                <div class="form-group">
                    <label for="tinggi">Tinggi (cm)</label>
                    <input type="number" id="tinggi" name="tinggi" placeholder="0" required>
                </div>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" id="jumlah" name="jumlah" placeholder="0" required>
            </div>

            <div class="form-group">
                <label for="kategori_cbm">Kategori Harga CBM</label>
                <select id="kategori_cbm" name="kategori_cbm" onchange="setHargaCBM()" required>
                    <option value="UMUM">UMUM - Rp 4.750.000</option>
                    <option value="Larangan terbatas">Larangan Terbatas - Rp 6.000.000</option>
                    <option value="Lartas Ringan">Lartas Ringan - Rp 5.250.000</option>
                    <option value="Mesin">Mesin - Rp 5.750.000</option>
                    <option value="Sepatu">Sepatu - Rp 4.750.000</option>
                    <option value="Garment">Garment - Rp 9.750.000</option>
                    <option value="Bag">Bag - Rp 4.750.000</option>
                    <option value="Cosmetic/Food">Cosmetic/Food - Rp 7.250.000</option>
                    <option value="Acc HP">Acc HP - Rp 4.750.000</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga_cbm">Harga per CBM (Rp)</label>
                <input type="number" id="harga_cbm" name="harga_cbm" value="4750000" required readonly>
            </div>

            <div class="result-group">
                <div class="form-group">
                    <label for="total_cbm">Total CBM</label>
                    <input type="number" id="total_cbm" name="total_cbm" step="0.000001" readonly>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="packing_pallet" name="packing_pallet" onchange="hitungCBM()">
                    <label for="packing_pallet">Tambahkan Packing Pallet</label>
                </div>

                <div class="form-group">
                    <label for="biaya_packing">Biaya Packing Pallet (Rp)</label>
                    <input type="number" id="biaya_packing" name="biaya_packing" value="250000" oninput="hitungCBM()">
                </div>

                <div class="form-group">
                    <label for="total_harga">Total Harga (Rp)</label>
                    <input type="number" id="total_harga" name="total_harga" readonly>
                </div>
            </div>

            <button type="submit">Simpan Data</button>
        </form>
    </div>

    <script>
        function setHargaCBM() {
            const kategori = document.getElementById('kategori_cbm').value;
            let harga = 0;

            const hargaMap = {
                'UMUM': 4750000,
                'Larangan terbatas': 6000000,
                'Lartas Ringan': 5250000,
                'Mesin': 5750000,
                'Sepatu': 4750000,
                'Garment': 9750000,
                'Bag': 4750000,
                'Cosmetic/Food': 7250000,
                'Acc HP': 4750000
            };

            document.getElementById('harga_cbm').value = hargaMap[kategori] || 0;
            hitungCBM();
        }

        function hitungCBM() {
            const panjang = parseFloat(document.getElementById('panjang').value) || 0;
            const lebar = parseFloat(document.getElementById('lebar').value) || 0;
            const tinggi = parseFloat(document.getElementById('tinggi').value) || 0;
            const jumlah = parseInt(document.getElementById('jumlah').value) || 0;
            const hargaPerCBM = parseFloat(document.getElementById('harga_cbm').value) || 0;

            const cbmPerItem = (panjang * lebar * tinggi) / 1000000;
            const totalCBM = cbmPerItem * jumlah;
            let totalHarga = totalCBM * hargaPerCBM;

            const packingPalletChecked = document.getElementById('packing_pallet').checked;
            const biayaPacking = parseFloat(document.getElementById('biaya_packing').value) || 0;

            if (packingPalletChecked) {
                totalHarga += biayaPacking;
            }

            document.getElementById('total_cbm').value = totalCBM.toFixed(6);
            document.getElementById('total_harga').value = Math.round(totalHarga);
        }

        

        // Inisialisasi perhitungan pertama kali
        document.addEventListener('DOMContentLoaded', function() {
            hitungCBM();
        });
    </script>
</body>

</html>