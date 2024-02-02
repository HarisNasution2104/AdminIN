<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Facades\Firebase;

class FirebaseController extends Controller
{
    public function storeDataInFirebase()
    {
        $database = Firebase::database();

        // Mengambil referensi ke koleksi
        $collection = $database->collection('nama_koleksi');

        // Menambahkan dokumen baru
        $document = $collection->add([
            'field1' => 'value1',
            'field2' => 'value2',
        ]);

        return 'Data berhasil ditambahkan ke Firestore dengan ID: ' . $document->id();
    }
}
// app/Http/Controllers/FirebaseController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Firestore;
use Kreait\Firebase\Firestore\Query;

class FirebaseController extends Controller
{
    public function getData()
    {
        // Mendapatkan instance dari Firestore
        $firestore = app('firebase.firestore');

        // Mendapatkan referensi ke koleksi "users" (ganti dengan nama koleksi yang sesuai)
        $usersCollection = $firestore->collection('users');

        // Mengambil data dari koleksi "users"
        $users = $usersCollection->documents();

        // Menyusun data menjadi array untuk ditampilkan
        $userData = [];
        foreach ($users as $user) {
            $userData[] = $user->data();
        }

        // Tampilkan data
        return response()->json($userData);
    }
}
