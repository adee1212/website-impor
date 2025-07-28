<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_barang',
        'hs_code',
        'jumlah',
        'harga',
        'cbm',
        'status_pengiriman',
        'nomor_resi',
        'cost_modal',
        'harga_aktual'
    ];
}
