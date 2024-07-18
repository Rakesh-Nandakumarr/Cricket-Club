<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function documents($type)
    {
        //get the documents by type
        $documents = FileUpload::where('document_type', $type)
                ->where('is_active', 1)
                ->where('is_public', 1)
                ->where('document_type', $type)
                ->orderBy('created_at', 'desc')->get();

                // making the type a slug
                $slug = Str::slug($type);

        return view('documents', compact('documents' , 'type', 'slug'));
    }
}
