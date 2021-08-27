<?php
namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Cookie;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Survey $Survey)
    {
        $form_visit = $request->cookie('usage_survey_session');
        if ($form_visit) {

        }
        return view('surveys.index')->with($request->flash());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $temp = $request->session()->get('_previous');
        Survey::create($request->all());
        Session::put('resource', $temp);
        return redirect()->route('surveys.index')
            ->with('success', 'Survey created successfully.')
            ->with('redirect', $temp);
    }
}
