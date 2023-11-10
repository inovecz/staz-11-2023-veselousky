<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;

class RequestsController extends Controller
{
    public function submitForm(Request $request)
    {
        $requestData = $request->only(['messague_subject', 'messague_specs']);

        if ($request->hasFile('messague_attachment')) {
            $file = $request->file('messague_attachment');
            $filePath = $file->store('uploads');
            $requestData['messague_attachment'] = $filePath;
        }

        Requests::create($requestData);

        return redirect('/podakovanie'); // Presmerujte na ďakujem stránku
    }
}