<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use DataTables;
use DB;

class TodoController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request) {
        $request['name'] = $request['task'];
        \App\Models\Todo::create($request->all());
        return redirect('/');
    }

    public function index(Request $request) {
        echo phpinfo();
        $allTask = \App\Models\Todo::all();
        return view('welcome')->with('tasks', $allTask);
    }

}
