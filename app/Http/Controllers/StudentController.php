<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\ApiResponse;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datatoinsert['arabic_firstname']=$request->arabic_firstname;
        $datatoinsert['arabic_lastname']=$request->arabic_lastname;
        $datatoinsert['national_number']=$request->national_number;
        $datatoinsert['created_at']=date("Y-m-d H:i:s");
        $datatoinsert['updated_at']=date("Y-m-d H:i:s");
        DB::table('students')->insert($datatoinsert);
        return ApiResponse::success(new StudentResource($datatoinsert));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
