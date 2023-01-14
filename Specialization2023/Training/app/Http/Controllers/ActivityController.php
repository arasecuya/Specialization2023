<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        return Activity::all();
    }
    public function new()
    {
        return "Let's do this!";
    }


    public function practice()
    {

        $num = 10;
        $num1 = 20;
        $sum = $num + $num1;
        return $sum;
    }
    public function pract($age)
    {

        $age = 10;
        return $sum;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Activity::create([

        //    'name' => $request->input('name'),

        'name' => $request->name,
        'age' => $request->age,
        'address' => $request->address
        
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // CALL MODEL
        //find Fantastic that has id of $id
        // return Fantastic::find($id);
        return Activity::where('id', $id)->first();
        // return Fantastic::findOrFail($id);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //find the Fantastic youre going to update 
        Activity::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Activity::find($id)->delete();
    }
}

