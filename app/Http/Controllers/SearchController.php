<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
            public function index()
        {
        return view('search.search');
        }

        public function search(Request $request)
        {
            if($request->ajax())
            {
                $output="";
                $doctors=DB::table('doctors')->where('name','LIKE','%'.$request->search."%")->get();
                

                if($doctors)
                {
                    
                    foreach ($doctors as $key => $doctor) {
                        $output.='<tr>'.
                        '<td>'.$doctor->id.'</td>'.
                        '<td>'.$doctor->name.'</td>'.
                        '<td>'.$doctor->service_type.'</td>'.
                        '<td>'.$doctor->specialization.'</td>'.
                        '<td>'.$doctor->room.'</td>'.
                        '<td>'.$doctor->schedule.'</td>'.
                        '<td>'
                            .'<a href="doctors/'.$doctor->id.'" title="show">'.'<button">'.'View  '.'</button>'.'</a>'.
                            '<a href="doctors/'.$doctor->id.'/edit" title="show">'.'<button">'.'Edit  '.'</button>'.'</a>'.
                            '<a href="doctors/'.$doctor->id.'" title="show">'.'<button">'.'Delete  '.'</button>'.'</a>'.
                        '</td>'.
                        '</tr>';
                }

                return Response($output);
            }
        }
        }
}
