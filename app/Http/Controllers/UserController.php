<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{
    // public function index()
    // {
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
            // $data = [
            //             'level_id' => 2,  
            //             'username' => 'manager_tiga',
            //             'nama' => 'Manager 3',
            //             'password' => Hash::make('12345'),
                          
            //           ];
            //           UserModel::create($data);

    //     $user = UserModel::find(1);
    //     return view ('user', ['data' => $user]);

    //} 
    //  public function index()
    //  {

    //    // $user = UserModel::find(1);
    //    // $user = UserModel::where('level_id', 1)->first();
    //    // $user = UserModel::firstWhere('level_id', 1);
    //    $user = UserModel::findor(20, ['username', 'nama'], function() {
    //      abort(404);
    //   });
    //     return view('user',['data' => $user]);
    // }

    // public function index()
    //     {
    //     $user = UserModel::where('username', 'manager9')->firstOrFail();
    //             return view('user', ['data' => $user]);

    //     }

    // public function index()
    //     {
    //     $user = UserModel :: findOrFail(1);
    //     return view('user', ['data' => $user]);
    //     }

    // JS 4 PRAKTIKUM 2.3
        // public function index()
        // {
        // //$user = UserModel::where('level_id', 2)->count();dd ($user);
        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);
        // }

    // JS 4 PRAKTIKUM 2.4
    // public function index()
    // {
    // $user = UserModel:: firstOrCreate(
    // [
    // 'username' => 'manager',
    // 'nama' => 'Manager',
    // ]
    // );
    
    // public function index()
    // {
    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager22',
    //         'nama' => 'Manager Dua Dua',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );
    // return view('user', ['data' => $user]);

    // public function index()
    // {
    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager',
    //         'nama' => 'Manager',
    //     ],
    // );
    // return view('user', ['data' => $user]);
    
    // }

    // public function index()
    // {
    // $user = UserModel::firstOrNew(
    //     [
    //         'username' => 'manager33',
    //         'nama' => 'Manager Tiga Tiga',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ],
    // );
    // $user->save();

    // return view('user', ['data' => $user]);
    // }'

    // JS4_ PRAKTIKUM 2.5
    // public function index()
    //  {
    //     $user = UserModel::create([
    //     'username' => 'manager55',
    //         'nama' => 'Manager55',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2,
    //     ]);
    //     $user->username = 'manager56';
    //     $user->isDirty(); // True
    //     $user->isDirty('username'); // True
    //     $user->isDirty('nama'); // False
    //     $user->isDirty(['nama', 'username']); //True
    //     $user->isClean(); // False
    //     $user->isClean('username'); // False
    //     $user->isClean('nama'); // True
    //     $user->isClean(['nama', 'username']); //False
    //     $user->save();
    //     $user->isDirty(); //False
    //     $user->isClean(); //True
    //     dd($user->isDirty());
    // }

    // public function index()
    //   {
    // $user = UserModel::create([
    //     'username' => 'manager11',
    //     'nama' => 'Manager11',
    //     'password' => Hash::make('12345'),
    //     'level_id' => 2,
    // ]);
    // $user->username = 'manager12';
    // $user->save();
    
    // $user->wasChanged(); // true
    // $user->wasChanged('username'); // true
    // $user->wasChanged(['username', 'level_id']); // true
    // $user->wasChanged('nama'); // false
    // dd($user->wasChanged(['nama', 'username'])); //true
    // }

    public function index()
       {
    $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
    public function tambah() {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request) 
    {
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id,
        ]);
        return redirect('/user');
    }
}