<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CountryRequest;
use DataTables;
use DB;
class CountryController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $countries = country::orderBy('id', 'desc')->get();
        return View::make('country')
            ;
    }
public function getAjaxCountryList(Request $request)
    {
       
        
        if ($request->ajax()) {
            $search = $request->get('searchname');
           
            if (!empty($search)) {
                $countries = $countries = \App\Models\Material::where(DB::raw('lower(name)'), 'like', '%' . strtolower($search) . '%')->get();
            }else{
                 $countries = \App\Models\Material::all();
            }
            
            $data = Datatables::of($countries)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp; <a href="javascript:void(0);" id="delete-pet" onClick="deleteFunc('.$row->id.')" data-toggle="tooltip" data-original-title="Delete" title="Delete"><i class="fa fa-trash" aria-hidden="true"></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
                return $data;
            }
        }
    
}
