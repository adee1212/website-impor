<?php

namespace App\Controllers;

use App\Models\DataCbmModel;
use CodeIgniter\Controller;

class DataCbm extends BaseController
{

    public function create()
    {
        // Cegah cache
        $this->response->setHeader('Cache-Control', 'no-store, no-cache, must-revalidate');
        $this->response->setHeader('Pragma', 'no-cache');
        $this->response->setHeader('Expires', '0');

        // Cek login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        return view('data_cbm_form');
    }

    public function save()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $model = new DataCbmModel();

        $cbm = ($this->request->getPost('panjang') * $this->request->getPost('lebar') * $this->request->getPost('tinggi') * $this->request->getPost('jumlah')) / 1000000;

        $data = [
            'nama_barang'        => $this->request->getPost('nama_barang'),
            'panjang'            => $this->request->getPost('panjang'),
            'lebar'              => $this->request->getPost('lebar'),
            'tinggi'             => $this->request->getPost('tinggi'),
            'jumlah'             => $this->request->getPost('jumlah'),
            'cbm'                => $cbm,
            'kategori_harga_cbm' => $this->request->getPost('kategori_cbm'),
            'harga_per_cbm'      => $this->request->getPost('harga_cbm'),
            'total_shipping_cost' => $cbm * $this->request->getPost('harga_cbm')
        ];

        $model->insert($data);
        return redirect()->to('/data-cbm/create')->with('message', 'Data CBM berhasil disimpan.');
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
