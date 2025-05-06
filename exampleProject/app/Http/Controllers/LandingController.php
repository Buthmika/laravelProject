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
        return view('pages.landing.index');
    }
    public function store(Request $request){
        $this->task->create($request->all());
    }



}
