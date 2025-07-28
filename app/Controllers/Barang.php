<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }
        $data = [
            'nama'   => $session->get('nama'),
            'role'   => $session->get('role'),
            'barang' => $this->barangModel->findAll()
        ];
        return view('barang/index', $data);
    }

    public function create()
    {
        $nomorResi = 'WWGI' . random_int(10000, 99999);
        return view('barang/create', ['nomor_resi' => $nomorResi]);
    }

    public function store()
    {
        $nomorResi = 'WWGI' . random_int(10000, 99999); // Contoh: WWGI73829

        $this->barangModel->save([
            'nama_barang' => $this->request->getPost('nama_barang'),
            'hs_code'     => $this->request->getPost('hs_code'),
            'jumlah'      => $this->request->getPost('jumlah'),
            'harga'       => $this->request->getPost('harga'),
            'cbm'         => $this->request->getPost('cbm'),
            'status_pengiriman' => $this->request->getPost('status_pengiriman'),
            'cost_modal'      => $this->request->getPost('cost_modal'),
            'harga_aktual'    => $this->request->getPost('harga_aktual'),
            'nomor_resi'      => $nomorResi // ✔️ Nomor resi otomatis
        ]);

        return redirect()->to('/barang');
    }


    public function edit($id)
    {
        $data['barang'] = $this->barangModel->find($id);
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        $this->barangModel->update($id, [
            'nama_barang'        => $this->request->getPost('nama_barang'),
            'hs_code'            => $this->request->getPost('hs_code'),
            'jumlah'             => $this->request->getPost('jumlah'),
            'harga'              => $this->request->getPost('harga'),
            'cbm'                => $this->request->getPost('cbm'),
            'status_pengiriman'  => $this->request->getPost('status_pengiriman'),
            'cost_modal'         => $this->request->getPost('cost_modal'),
            'harga_aktual'       => $this->request->getPost('harga_aktual'),
            'nomor_resi'         => $this->request->getPost('nomor_resi') // ✅ Tambah
        ]);
        return redirect()->to('/barang');
    }

    public function delete($id)
    {
        $this->barangModel->delete($id);
        return redirect()->to('/barang');
    }

    // ✅ Tracking Berdasarkan Nomor Resi
    public function tracking()
    {
        return view('tracking_form');
    }

    public function cariTracking()
    {
        $nomorResi = $this->request->getPost('nomor_resi');
        $result = $this->barangModel->where('nomor_resi', $nomorResi)->findAll();

        $data = [
            'nomor_resi' => $nomorResi,
            'hasil'      => $result
        ];

        return view('tracking_result', $data);
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
