<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        return "Method ini nantinya akan digunakan untuk mengambil semua data user.";
        }
        public function create(){
            return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user.";
            }
        
            public function store(Request $request){
            return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru.";
            }
            
            public function show(){
            return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=." ;
            }
        
            public function edit(){
            return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan data edit dengan id." ;
            }
        
            public function update(Request $request ){
            return "Method ini nantinya akan digunakan untuk mengubah data user dengan id ." ;
            }
        
            public function destroy(){
            return "Method ini nantinya akan digunakan untuk menghapus data user dengan id." ;
            }
}