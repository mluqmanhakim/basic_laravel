<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Customer;


class CustomerController extends Controller
{
   
    public function create()
    {
        return view('create_customer'); 
    }

    public function create_post(Request $request) {
        $nama = $request["nama"];
        $email = $request["email"];;
        $alamat = $request["alamat"];
        $jenis_kelamin = $request["jenis_kelamin"];
        
        DB::insert('insert into customer (nama, email, alamat, jenis_kelamin) values (?, ?, ?, ?)', [$nama, $email, $alamat, $jenis_kelamin]);


        return view('view_customer');
    }
    
    public function get() {
        $all_customer = DB::select('select * from customer');
        

        return view('all_customer', ['all_customer' => $all_customer]);
    }

    
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('edit_customer', ['customer' => $customer]);
    }

    public function edit_post(Request $request) {
        $nama = $request["nama"];
        $email = $request["email"];;
        $alamat = $request["alamat"];
        $jenis_kelamin = $request["jenis_kelamin"];


        DB::update('update customer set nama=?, email=?, alamat=?, jenis_kelamin=? where id = ?', [$nama, $email, $alamat, $jenis_kelamin, $request["id"]]);



        return 'Data berhasil diubah';
    }
    
    public function delete($id)
    {
        DB::delete('delete from customer where id = ?', [$id]);
    
        return "Berhasil Di Delete";
    }
}