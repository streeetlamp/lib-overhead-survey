<?php
namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Survey $Survey)
    {

        $surveys = Survey::all();

        return view('surveys.index', compact('surveys'))
            ->with('i');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surveys.create');
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

        Survey::create($request->all());

        return redirect()->route('surveys.index')
            ->with('success', 'Survey created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $Survey
     * @return \Illuminate\Http\Response
     */
    public function show(Survey $Survey)
    {
        return view('surveys.show', compact('Survey'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survey  $Survey
     * @return \Illuminate\Http\Response
     */
    public function edit(Survey $Survey)
    {
        return view('surveys.edit', compact('Survey'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survey  $Survey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survey $Survey)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'introduction' => 'required',
        //     'location' => 'required',
        //     'cost' => 'required'
        // ]);
        $Survey->update($request->all());

        return redirect()->route('surveys.index')
            ->with('success', 'Survey updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survey  $Survey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Survey $Survey)
    {
        $Survey->delete();

        return redirect()->route('surveys.index')
            ->with('success', 'Survey deleted successfully');
    }
}
