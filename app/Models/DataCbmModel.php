<?php
namespace App\Models;

use CodeIgniter\Model;

class DataCbmModel extends Model
{
    protected $table = 'data_cbm';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_barang', 'panjang', 'lebar', 'tinggi', 'jumlah',
        'cbm', 'kategori_harga_cbm', 'harga_per_cbm', 'total_shipping_cost'
    ];
}
