<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
use Validator;
use \Carbon\Carbon;

class GeneralController extends Controller
{
    //This controller contans methodds to load pages that do not require login


    /**
     * Show the kenyan election project page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show254ElectionCharts()
    {
        return view('projects.254-elections.charts');
    }

     /**
     * Show the kenyan election project page.
     *
     * @return \Illuminate\Http\Response
     */
    public function show254Election()
    {
        return view('projects.254-elections.electionProject');
    }

     /**
     * Show candidate details.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCandidateDetails($id)
    {
        $candidates= DB::table('candidates')
			        ->where('id',$id)
			       ->get();

        return view('projects.254-elections.candidate-details',compact('candidates'));
    }

    /**
     * Compare candidates.
     *
     * @return \Illuminate\Http\Response
     */
    public function compareCandidates()
    {
        
        $validator=Validator::make($request->all(), [
                'candidate_1' => 'required|max:20',
                'candidate_2' => 'required|max:20'
                ]);
             if ($validator->fails()) 
             {
                return redirect('projects/Kenyan-elections-2017-charts')
                ->withErrors($validator)
                ->withInput();
            }

            $input=  \Request::all();
              $userAlert= DB::table('candidates')
                ->where('id', 1)
                ->get();  

          return redirect('/projects/compare-candidates');
    }
}
