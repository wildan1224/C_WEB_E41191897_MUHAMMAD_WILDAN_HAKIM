<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam controller ManagementUser.";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Arvita Agus Kurniasari";

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('home', compact('nama','pelajaran'));
    }
}