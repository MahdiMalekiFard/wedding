<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditorUploadController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:5120',
        ]);

        $disk   = $request->input('disk', 'public');         // "public"
        $folder = trim($request->input('folder', 'editor'), '/'); // "tinymce"

        $path = $request->file('file')?->store($folder, $disk);    // storage/app/public/tinymce/...
        $url  = Storage::disk($disk)->url($path);                 // /storage/tinymce/...

        return response()->json(['location' => $url], 201);
    }
}
