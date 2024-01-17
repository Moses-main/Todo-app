<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    //check that the user is logged in
    public function create(Request $request){
        if (Auth::check()) {
            $this->validate($request,[
                'name'=>'required',
            ]);
            // Create and save the dog passed into the database]
            Dog::create($request->all());
        }
        return to_route('index');
    }

    public function delete($id){
        if (Auth::check()) {
            $dog = Dog::find($id);
            $dog->delete();
        }
        // redirect to the index page
        return to_route('index');
    }
}
