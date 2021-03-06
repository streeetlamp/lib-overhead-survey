<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Survey;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;
use Session;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Survey $Survey)
    {
        $sesh_Id = Session::get('_token');
        $revisit = DB::table('surveys')->where('session', $sesh_Id)->first();
        $url_param = $_SERVER['QUERY_STRING'];
        $url_param = str_replace("url=", "", $url_param);

        Session::put('url', 'https://proxy.library.vcu.edu/login?url='.$url_param);

        // this is a new user
        if ($revisit === null) {
            return view('surveys.index');
        }

        $revisit_form = Survey::where('session',$sesh_Id)->first();
        $new = $revisit_form->replicate();
        $new->resource = $url_param;
        $new->save();

        return redirect('https://proxy.library.vcu.edu/login?url='.$url_param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sesh_toke = Session::get('_token');
        $sesh_url = Session::get('url');
        $form_req = $request->all();
        $form_req['session'] = $sesh_toke;
        $form_req['resource'] = str_replace("https://proxy.library.vcu.edu/login?url=", "", $sesh_url);

        Survey::create($form_req);
        Session::put('success', 'Survey created successfully!');
        return view('surveys.success')->with('success', 'Survey created successfully.')
        ->with('url', $sesh_url);
    }
}
