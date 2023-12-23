<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class TaskList extends Controller
{
    public function index(){
        $tasks = Tasks::all();
        return view("index",compact("tasks"));

    }

    public function create(){
        return view("create");
    }
public function store(Request $request){
    $request->validate([
       "nom_tache",
       "creator",
       "creator_email" => "required|email",
       "phone_creator"=> "nullable",
]);
Tasks::create($request->all());
return view('index');


}





//public function store(Request $request){}
public function show($id){}
public function edit($id){}
public function update(Request $request, $id){

}
public function destroy($id){

}

}
