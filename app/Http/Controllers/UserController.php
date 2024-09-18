<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        //Praktikum 6.8
      //      $data = [
      //          'username' => 'customer-1',
      //          'nama' => 'Pelanggan',
      //          'password' => Hash::make('12345'),
      //          'level_id' => 4
      //      ];
      //      UserModel::insert($data);

            // $data = [
            //     'nama' => 'Pelanggan Pertama',
            // ]; 
            // UserModel::where('username', 'customer-1')->update($data);

            // JOBSHEET 3_PRAK1_FILLABLE
            // Prak 1.2
            // $data = [
            //             'level_id' => 2,  
            //             'username' => 'manager_dua',
            //             'nama' => 'Manager 2',
            //             'password' => Hash::make('12345'),
                          
            //           ];
            //           UserModel::create($data);

            //Prak 1.5
            $data = [
                        'level_id' => 2,  
                        'username' => 'manager_tiga',
                        'nama' => 'Manager 3',
                        'password' => Hash::make('12345'),
                          
                      ];
                      UserModel::create($data);

        $user = UserModel::all();
        return view ('user', ['data' => $user]);

    }   
}