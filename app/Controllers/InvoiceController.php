<?php

namespace App\Controllers;

use App\Models\InvoiceModel;
use App\Models\itemModel;
use Dompdf\Dompdf;

class InvoiceController extends BaseController
{
    protected $invoiceModel;
    protected $itemModel;

    public function __construct()
    {
        helper('status'); // Untuk badge status invoice
        $this->invoiceModel = new InvoiceModel();
        $this->itemModel = new itemModel();
    }

    private function protect()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->send(); // Stop & redirect
        }

        // Anti-cache headers
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
        $this->response->setHeader('Pragma', 'no-cache');
        $this->response->setHeader('Expires', '0');
    }

    public function index()
    {
        $this->protect(); // ✅ Tambah ini
        $data['invoices'] = $this->invoiceModel->findAll();
        return view('invoice/index', $data);
    }

    public function create()
    {
        $this->protect();
        return view('invoice/create');
    }

    public function store()
    {
        $this->protect();

        $invoiceId = $this->invoiceModel->insert([
            'customer_name' => $this->request->getPost('customer_name'),
            'tanggal' => date('Y-m-d')
        ]);

        $no = $this->request->getPost('no');
        $receipt = $this->request->getPost('receipt');
        $description = $this->request->getPost('description');
        $ctns = $this->request->getPost('ctns');
        $weight = $this->request->getPost('weight');
        $freight = $this->request->getPost('freight');
        $total = $this->request->getPost('total');

        foreach ($no as $i => $n) {
            $this->itemModel->insert([
                'invoice_id' => $invoiceId,
                'no' => $n,
                'receipt' => $receipt[$i],
                'description' => $description[$i],
                'ctns' => $ctns[$i],
                'weight' => $weight[$i],
                'freight' => $freight[$i],
                'total' => $total[$i],
            ]);
        }

        return redirect()->to('/invoice');
    }

    public function preview($id)
    {
        $this->protect();
        $invoice = $this->invoiceModel->find($id);
        $items = $this->itemModel->where('invoice_id', $id)->findAll();

        $data['invoice'] = $invoice;
        $data['items'] = $items;

        return view('invoice/preview_invoice', $data);
    }

    public function cetak($id)
    {
        $this->protect();
        $invoice = $this->invoiceModel->find($id);
        $items = $this->itemModel->where('invoice_id', $id)->findAll();

        $data['invoice'] = $invoice;
        $data['items'] = $items;

        $html = view('invoice/template_invoice_pdf', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("invoice_{$id}.pdf", ['Attachment' => false]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
