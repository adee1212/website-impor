<?php
namespace App\Models;
use CodeIgniter\Model;

class itemModel extends Model
{
    protected $table = 'invoice_items';
    protected $allowedFields = ['invoice_id', 'no', 'receipt', 'description', 'ctns', 'weight', 'freight', 'total'];
}
