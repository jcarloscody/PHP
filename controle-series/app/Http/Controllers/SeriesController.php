<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    
    public function index(Request $request ){
        $id = $request->get('id'); //?id=9
        // return redirect("https://www.google.com/");
        echo $id;
        $series = [
            'sds',
            'sdsd'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>" . $serie . "</li>";
        }
         $html .= '</ul>';

         return $html;
    }
}
