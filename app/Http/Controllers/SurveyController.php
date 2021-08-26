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
        // $surveys = $Survey->update($request->all());
        return view('surveys.success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'introduction' => 'required',
        //     'location' => 'required',
        //     'cost' => 'required'
        // ]);
$temp = $request->session()->get('_previous');
        Survey::create($request->all());
        // $url = $request->url();
        // @dd($request->query('q'));
        Session::put('shit', $temp);
        return redirect()->route('surveys.index')
            ->with('success', 'Survey created successfully.');
            // ->with('shit', 'hi');
    }
}
