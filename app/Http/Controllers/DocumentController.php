<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;


class DocumentController extends Controller
{
    public function documents()
    {
        $documentTypes = [
            'Objects & By-Laws',
            'Minutes',
            'Financial Reports',
            'Executive Committee minutes',
            'Miscellaneous Documents',
        ];

        $documentsByType = [];
        foreach ($documentTypes as $type) {
            $documents = FileUpload::where('is_active', 1)
                ->where('is_public', 1)
                ->where('document_type', $type)
                ->orderBy('created_at', 'desc')
                ->paginate(5); 
            // check if the document type has any documents
            if ($documents->count() > 0) {
                $documentsByType[$type] = $documents;
            }
        }

        return view('documents', compact('documentsByType'));
    }
}
