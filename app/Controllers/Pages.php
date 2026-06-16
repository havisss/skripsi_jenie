<?php

namespace App\Controllers;

class Pages extends BaseController
{
    /**
     * Menampilkan halaman Home
     */
    public function index()
    {
        $data = [
            'title' => 'Home | TropicalShop'
        ];
        return view('pages/home', $data);
    }

    /**
     * Menampilkan halaman Catalog
     */
    public function catalog()
    {
        $data = [
            'title' => 'Catalog | TropicalShop'
        ];
        return view('pages/catalog', $data);
    }

    /**
     * Menampilkan halaman Custom Order
     */
    public function customOrder()
    {
        $data = [
            'title' => 'Custom Order | TropicalShop'
        ];
        return view('pages/custom_order', $data);
    }

    /**
     * Menampilkan halaman Company Info
     */
    public function companyInfo()
    {
        $data = [
            'title' => 'Company Info | TropicalShop'
        ];
        return view('pages/company_info', $data);
    }
} 