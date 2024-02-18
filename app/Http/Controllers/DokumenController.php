<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class DokumenController extends Controller
{
    public function index()
    {
        // Get document template
        $doc = Storage::get('template_surat/Surat-Tugas-Asesor.rtf');

        // Replace data
        $doc = str_replace('#NOMORSURAT', 'ini adalah nomor surat', $doc);
        $doc = str_replace('#NAMAASESOR', 'Erik Cahya Pradana', $doc);
        $doc = str_replace('#NOMORASESOR', '190030209', $doc);
        $doc = str_replace('#TANGGALSURAT', '24 Mei 2024', $doc);

        $fileName = 'surat_tugas.doc';

        // Store the document in public/surat folder
        File::put(public_path('surat/' . $fileName), $doc);

        return view('admin.dokumen.surat_tugas_asesor');
    }
}
