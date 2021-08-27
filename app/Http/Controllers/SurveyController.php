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
        $form_visit = $request->cookie('usage_survey_session');
        if ($form_visit) {

        }
        return view('surveys.success')->with($request->flash());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $arr = $request->all();
            $arr['sesh'] = 'test';
            @dd($arr);

        // $save_survey = array_push($save_survey, 'sesh');
        // $temp = $request->session()->get('_previous');
        Survey::create($arr);
// $affected = DB::update(
//     'update users set votes = 100 where name = ?',
//     ['Anita']
// );
        // Session::put('resource', $temp);
        return redirect()->route('surveys.index')
            ->with('success', 'Survey created successfully.');
            // ->with('redirect', $temp);
    }
}
