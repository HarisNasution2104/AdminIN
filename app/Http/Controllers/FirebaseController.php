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
