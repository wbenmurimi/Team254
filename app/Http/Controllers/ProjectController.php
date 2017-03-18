<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweets_president;
use DB;
use Khill\Lavacharts\Lavacharts;

class ProjectController extends Controller
{
     //This controller contans methodds to load pages that do not require login


    /**
     * Show the kenyan election project page with the sentiments.
     *
     * @return \Illuminate\Http\Response
     */

    // echo "Id : ".$k->id."<br>";
    		// echo "Sentiment : ".$k->sents."<br>";
    		// echo "Can ID : ".$k->candidate_id."<br>";
    		// echo "Time : ".$k->day."<br>";
    		// echo "<br><br>";
    public function show254ElectionCharts()
    {

    	$data = DB::table('tweets_presidents as w')
    	->select(array(DB::Raw('w.id'),DB::Raw('w.candidate_id'),DB::Raw('w.tweetdate'),DB::Raw('w.tweettext'),DB::Raw('sum(w.sentiment) as sents'),DB::Raw('DATE(w.tweetdate) day')))
    	->groupBy('day')
    	->groupBy('candidate_id')
    	->orderBy('w.tweetdate')
    	->get();

    		$sentiments = \Lava::DataTable();

    		$sentiments->addDateColumn('Date')
    		->addNumberColumn('Uhuru')
    		->addNumberColumn('Raila'); 
    		foreach ($data as $k) {

    		
    		if(strcmp($k->candidate_id,'1')==0){
    			$sentiments->addRow([$k->day, $k->sents,'']);
    		}
    		else{
    			$sentiments->addRow([$k->day, '' , $k->sents]);
    		}

    		}

    		\Lava::LineChart('Temps', $sentiments, [
    			'title' => 'Candidate Sentiment Analysis Performance '
    			]);

    	return view('projects.254-elections.charts');

    	}



    /**
     * Fetch data to show the word cloud.
     *
     * @return \Illuminate\Http\Response
     */

    public function getWordCloud()
    {

    	$data = DB::table('tweets_presidents as w')
    	->select(array(DB::Raw('w.tweetdate'),DB::Raw('w.tweettext'),))
    	->orderBy('w.tweetdate')
    	->limit(20)
    	->get();

    	
    	return $data;
    	//return view('projects.254-elections.charts');

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
