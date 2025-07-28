<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0"><i class="fas fa-edit mr-2"></i>Edit Barang Impor</h2>
        </div>
        <div class="card-body">
            <form action="/barang/update/<?= $barang['id'] ?>" method="post">
                <?= csrf_field() ?>

                <div class="form-row mb-3">
                    <div class="form-group col-md-6">
                        <label for="nama_barang" class="font-weight-bold">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" 
                               value="<?= esc($barang['nama_barang']) ?>" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="hs_code" class="font-weight-bold">HS Code</label>
                        <input type="text" class="form-control" id="hs_code" name="hs_code" 
                               value="<?= esc($barang['hs_code']) ?>" required>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="form-group col-md-6">
                        <label for="nomor_resi" class="font-weight-bold">Nomor Resi</label>
                        <input type="text" class="form-control" id="nomor_resi" name="nomor_resi" 
                               value="<?= esc($barang['nomor_resi']) ?>" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status_pengiriman" class="font-weight-bold">Status Pengiriman</label>
                        <select class="form-control" id="status_pengiriman" name="status_pengiriman" required>
                            <option value="Dalam Pengiriman" <?= $barang['status_pengiriman'] == 'Dalam Pengiriman' ? 'selected' : '' ?>>Dalam Pengiriman</option>
                            <option value="Tiba di Gudang" <?= $barang['status_pengiriman'] == 'Tiba di Gudang' ? 'selected' : '' ?>>Tiba di Gudang</option>
                            <option value="Proses Bea Cukai" <?= $barang['status_pengiriman'] == 'Proses Bea Cukai' ? 'selected' : '' ?>>Proses Bea Cukai</option>
                            <option value="Tertunda" <?= $barang['status_pengiriman'] == 'Tertunda' ? 'selected' : '' ?>>Tertunda</option>
                        </select>
                    </div>
                </div>

                <div class="form-row mb-3">
                    <div class="form-group col-md-4">
                        <label for="jumlah" class="font-weight-bold">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" 
                               value="<?= esc($barang['jumlah']) ?>" min="1" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cbm" class="font-weight-bold">CBM (m³)</label>
                        <input type="number" class="form-control" id="cbm" name="cbm" 
                               value="<?= esc($barang['cbm']) ?>" step="0.01" min="0" required>
                    </div>
                </div>

                <div class="form-row mb-4">
                    <div class="form-group col-md-4">
                        <label for="harga" class="font-weight-bold">Harga (Rp)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="harga" name="harga" 
                                   value="<?= esc($barang['harga']) ?>" min="0" required>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="cost_modal" class="font-weight-bold">Cost Modal (Rp)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="cost_modal" name="cost_modal" 
                                   value="<?= esc($barang['cost_modal']) ?>" min="0" required>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="harga_aktual" class="font-weight-bold">Harga Aktual (Rp)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="number" class="form-control" id="harga_aktual" name="harga_aktual" 
                                   value="<?= esc($barang['harga_aktual']) ?>" min="0" required>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right mt-4">
                    <a href="/barang" class="btn btn-secondary mr-2">
                        <i class="fas fa-times mr-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-1"></i> Update Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 8px;
    }
    .card-header {
        border-radius: 8px 8px 0 0 !important;
        padding: 1rem 1.5rem;
    }
    .form-control {
        transition: all 0.3s;
    }
    .form-control:focus {
        border-color: #3498db;
        box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
    }
    .input-group-text {
        background-color: #e9ecef;
    }
    .btn {
        transition: all 0.3s;
    }
    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
    }
    .btn-primary:hover {
        background-color: #2980b9;
        border-color: #2980b9;
    }
    .btn-secondary {
        background-color: #7f8c8d;
        border-color: #7f8c8d;
    }
    .btn-secondary:hover {
        background-color: #6c7a7d;
        border-color: #6a787b;
    }
</style>

<?= $this->endSection() ?>