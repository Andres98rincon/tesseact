<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class HomeController extends Controller
{
    public function processImage(Request $request)
    {
        try {
            $file = $request->file('file');

            $imagePath = $file->store('ocr');

            $data = (new TesseractOCR(storage_path('app/'.$imagePath)))->run();

            $resultArray = explode("\n\n", $data);

            return redirect()->back()->with('resultArray', $resultArray);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error al convertir la imagen.',
            ], 200);
        }
    }
}
