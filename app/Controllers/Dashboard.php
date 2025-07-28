<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $data = [
            'nama' => $session->get('nama'),
            'role' => $session->get('role')
        ];

        if ($data['role'] === 'admin') {
            return view('dashboard/admin', $data);
        } elseif ($data['role'] === 'importir') {
            return view('dashboard/importir', $data);
        } elseif ($data['role'] === 'operator') {
            return view('dashboard/operator', $data);
        } else {
            return "Role tidak dikenali!";
        }
    }
    public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}

}
