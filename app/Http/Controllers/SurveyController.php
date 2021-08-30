<?php

namespace App\Http\Controllers;

use App\Models\Survey;
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
        $url_param = $request->query('url');
        $form_visit = $request->cookie('usage_survey_session');
        if ($form_visit) {
        }
        Session::put('url', $url_param);
        return view('surveys.index');
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
        $form_req['sesh'] = $sesh_toke;
        $form_req['resource'] = $sesh_url;

        Survey::create($form_req);
        Session::put('success', 'Survey created successfully!');
        return view('surveys.success')->with('success', 'Survey created successfully.')
        ->with('url', $request->input('url'));
    }
}
