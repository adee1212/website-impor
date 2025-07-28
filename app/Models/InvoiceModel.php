<?php
namespace App\Models;
use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoices';
    protected $allowedFields = ['customer_name', 'tanggal'];
}
