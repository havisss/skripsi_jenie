<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PelangganModel;

class AuthController extends BaseController
{
    public function processLogin()
    {
        $session = session();
        $model = new PelangganModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $data = $model->where('email', $email)->first();
        
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id_pelanggan'   => $data['id_pelanggan'],
                    'nama_pelanggan' => $data['nama_pelanggan'],
                    'email'          => $data['email'],
                    'logged_in'      => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/catalog');
            } else {
                $session->setFlashdata('error', 'Kata sandi salah.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('error', 'Email tidak ditemukan.');
            return redirect()->to('/login');
        }
    }

    public function processRegister()
    {
        helper(['form']);
        
        $rules = [
            'nama_pelanggan' => [
                'rules' => 'required|min_length[3]|max_length[100]',
                'errors' => [
                    'required' => 'Nama lengkap wajib diisi.',
                    'min_length' => 'Nama minimal 3 karakter.'
                ]
            ],
            'email'          => [
                'rules' => 'required|valid_email|is_unique[pelanggan.email]',
                'errors' => [
                    'required' => 'Email wajib diisi.',
                    'valid_email' => 'Format email tidak valid.',
                    'is_unique' => 'Email sudah terdaftar.'
                ]
            ],
            'password'       => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'Kata sandi wajib diisi.',
                    'min_length' => 'Kata sandi minimal 8 karakter.'
                ]
            ],
            'confirm_password' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi kata sandi wajib diisi.',
                    'matches' => 'Konfirmasi kata sandi tidak cocok.'
                ]
            ],
            'no_telpon'      => 'permit_empty|min_length[10]|max_length[20]'
        ];
          
        if($this->validate($rules)){
            $model = new PelangganModel();
            $data = [
                'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
                'email'          => $this->request->getPost('email'),
                'password'       => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                'no_telpon'      => $this->request->getPost('no_telpon')
            ];
            $model->save($data);
            
            session()->setFlashdata('success', 'Pendaftaran berhasil. Silakan login.');
            return redirect()->to('/login');
        } else {
            session()->setFlashdata('error_register', $this->validator->listErrors());
            return redirect()->to('/register')->withInput();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
