<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class LandingController extends Controller
{
    protected $task;
    public function __construct()
    {
        $this->task = new Todo();
    }
    public function index()
    {
        $response['tasks'] = $this->task->all();
        return view('pages.landing.index')-> with($response);
    }
    public function store(Request $request){
        $this->task->create($request->all());
        return redirect()->back()->with('success','Task Created Successfully');
    }



}
