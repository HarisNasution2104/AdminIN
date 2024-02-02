// config/firebase.php

return [
    'credentials' => [
        'file' => storage_path('firebase.json'),
        // Sesuaikan path dengan lokasi file credential Anda
    ],
    'project_id' => 'adminin-3b54c', // Ganti dengan ID proyek Firebase Anda

    'options' => [
        'database' => 'https://console.firebase.google.com/u/0/project/adminin-3b54c/database/adminin-3b54c-default-rtdb/data/~2F?hl=id',
        // Ganti dengan URL database Firestore Anda
    ],
];
