<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use PDF;


class PDFController extends Controller
{


    public function pdfView(){
        $projects = Project::all();
        return view('PDF.pdf_view', compact('projects'));

    }


    public function pdfGeneration(){

        $projects = Project::all();

        $pdf = PDF::loadView('PDF.pdf_convert', compact('projects'));

        return $pdf->download('myPDF.pdf');
    }


}
