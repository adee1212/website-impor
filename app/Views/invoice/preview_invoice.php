
<h2>Preview Invoice</h2>

<a href="/invoice/cetak/<?= $invoice['id'] ?>" target="_blank">
    <button>Cetak PDF</button>
</a>

<!-- Copy seluruh isi dari template_invoice_pdf.php di sini -->
<?= view('invoice/template_invoice_pdf', ['invoice' => $invoice, 'items' => $items]) ?>
