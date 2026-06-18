<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('logged_in')) {
            session()->setFlashdata('error', 'Silakan masuk terlebih dahulu untuk mengakses halaman tersebut.');
            return redirect()->to('/login');
        }

        // Verify that the user still exists in the database
        $id_pelanggan = session()->get('id_pelanggan');
        $pelangganModel = new \App\Models\PelangganModel();
        if (!$pelangganModel->find($id_pelanggan)) {
            session()->destroy();
            session()->setFlashdata('error', 'Sesi Anda tidak valid atau akun telah dihapus. Silakan login kembali.');
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
