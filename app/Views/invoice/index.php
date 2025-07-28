<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h2 class="h5 mb-0"><i class="fas fa-file-invoice mr-2"></i>Daftar Invoice</h2>
            <a href="/invoice/create" class="btn btn-light btn-sm">
                <i class="fas fa-plus mr-1"></i> Tambah Invoice
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th width="5%">No</th>
                            <th>Customer</th>
                            <th width="15%">Tanggal</th>
                            <th width="20%">Total</th>
                            <th width="15%">Status</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $i => $inv): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td>
                                    <strong><?= esc($inv['customer_name']) ?></strong><br>
                                    <small class="text-muted"><?= esc($inv['customer_company'] ?? '-') ?></small>
                                </td>
                                <td><?= date('d/m/Y', strtotime($inv['tanggal'])) ?></td>
                                <td>Rp <?= number_format($inv['total_amount'] ?? 0, 0, ',', '.') ?></td>
                                <td>
                                    <span class="badge <?= getStatusBadgeClass($inv['status'] ?? 'draft') ?>">

                                        <?= ucfirst($inv['status'] ?? 'draft') ?>
                                    </span>
                                </td>
                                <td>
                                    <a href="/invoice/preview/<?= $inv['id'] ?>" class="btn btn-sm btn-info mr-1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="/invoice/edit/<?= $inv['id'] ?>" class="btn btn-sm btn-warning mr-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/invoice/delete/<?= $inv['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus invoice ini?')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between mt-3">
                <div class="text-muted">
                    Menampilkan <?= count($invoices) ?> dari <?= $total_invoices ?? count($invoices) ?> data
                </div>
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    .table {
        font-size: 0.9rem;
    }

    .table th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 0.5px;
    }

    .badge-paid {
        background-color: #d4edda;
        color: #155724;
    }

    .badge-unpaid {
        background-color: #fff3cd;
        color: #856404;
    }

    .badge-draft {
        background-color: #d1ecf1;
        color: #0c5460;
    }

    .badge-cancelled {
        background-color: #f8d7da;
        color: #721c24;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }
</style>

<?= $this->endSection() ?>