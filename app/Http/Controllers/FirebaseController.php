<?php

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

