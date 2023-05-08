<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF(){
        // Récupérer le contenu de la vue
        $table = DB::table('article')
        ->join('categorie', 'categorie.id', '=', 'article.categorieid')
        ->select('article.id','article.titre', 'article.resum','article.contenu','categorie.designation')
        ->where('article.id', '=', request('id') )
        ->get();
        $html = view('DetailArt', ['art'=>json_decode(json_encode($table), true)])->render();
        // Configuration de DOMPDF
        $dompdf = new Dompdf();
        $dompdf->setPaper('A4', 'portrait');

        // Génération du document PDF
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream('document'.request('id').'.pdf');
    }
}
