<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container py-3">
    <div class="card">
        <div class="card-header bg-light">
            <h3 class="mb-0">Tambah Invoice</h3>
        </div>
        <div class="card-body">
            <form method="post" action="/invoice/store">
                <?= csrf_field() ?>
                
                <div class="form-group mb-4">
                    <label class="font-weight-bold">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" required>
                </div>

                <div class="table-responsive mb-3">
                    <table class="table table-bordered" id="items">
                        <thead class="thead-light">
                            <tr>
                                <th width="5%">No</th>
                                <th>Receipt</th>
                                <th>Description</th>
                                <th width="10%">CTNS</th>
                                <th width="10%">Weight</th>
                                <th width="10%">Freight</th>
                                <th width="15%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="no[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="receipt[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="description[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="ctns[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="weight[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="freight[]" class="form-control form-control-sm" required></td>
                                <td><input type="text" name="total[]" class="form-control form-control-sm" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="addRow()">
                        <i class="fas fa-plus"></i> Tambah Baris
                    </button>
                </div>

                <div class="form-group text-right mt-4">
                    <a href="/invoice" class="btn btn-light mr-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Invoice</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function addRow() {
    const row = `
        <tr>
            <td><input type="text" name="no[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="receipt[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="description[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="ctns[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="weight[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="freight[]" class="form-control form-control-sm" required></td>
            <td><input type="text" name="total[]" class="form-control form-control-sm" required></td>
        </tr>
    `;
    document.getElementById('items').querySelector('tbody').insertAdjacentHTML('beforeend', row);
}
</script>

<?= $this->endSection() ?>