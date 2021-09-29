<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatepdf() 
    {
        //kalau perlu insert parameter sendiri
        $data = [
            'title' => 'Welcome to PDF',
            'date' => date('m/d/Y'),
            'author' => 'Caspian',
        ];

        $pdf = PDF::loadView('mypdfview', $data);

        return $pdf->download('mypdf.pdf');
    }
}
