<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerBioData;
use App\Models\CustomerDestination;
use GrahamCampbell\ResultType\Success;

class customerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $customers = CustomerBioData::orderBy('created_at', 'desc')->with('CustomerDestination')->get();
        
        return view('customers.index', compact('customers'));
    }

    public function create(){
        return view('customers.create');
    }

    public function store(){
        request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'other_name'=>'required',
            'address'=>'required',
            'gender' =>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'country'=>'required',
            'state'=>'required',
            'special_requirements'=>'required',
            'date'=>'date',
            'from_destination'=>'required',
            'to_destination'=>'required',
            'zip'=>'nullable|numeric'
        ]);

        $user = CustomerBioData::create([
            'firstname'=>request('first_name'),
            'lastname'=>request('last_name'),
            'othername'=>request('other_name'),
            'gender' =>request('gender'),
            'email'=>request('email'),
            'mobile'=>request('phone'),
            'country'=>request('country'),
            'state'=>request('state'),
            'special_requirements'=>request('special_requirements'),
            'address'=>request('address'),
            'date'=>request('date'),
            'zip'=>request('zip'),
            'created_by'=>auth()->user()->id
            
        ]);

        $user_id = $user->id;
        $customer = CustomerBioData::where('id',$user_id)->first();
        
        $destination = CustomerDestination::create([
            'from_des'=>request('from_destination'),
            'to_des'=>request('to_destination'),
            'date'=>request('date'),
            'custmId'=>$user_id
        ]);

        return redirect('/customers')->with('success', 'Bio Data Added successfully');
    }


    public function show($id){
        $customer = CustomerBioData::findOrFail($id);
        
        return view('customers.show',compact('customer'));
    }

    public function edit($id){
        $customers = CustomerBioData::findOrFail($id);
        $cusDes = $customers->CustomerDestination;
        return view('customers.edit', compact('customers','cusDes') );
    }

    public function update($id){

        
        request()->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'other_name'=>'required',
            'address'=>'string|nullable',
            'gender' =>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'country'=>'required',
            'state'=>'required',
            'special_requirements'=>'required',
            'date'=>'required|date',
            'from_destination'=>'required',
            'to_destination'=>'required',
            'zip'=>'nullable|numeric'
        ]);
        $user = CustomerBioData::findOrFail($id);
        
        $user->update([
            'firstname'=>request('first_name'),
            'lastname'=>request('last_name'),
            'othername'=>request('other_name'),
            'gender' =>request('gender'),
            'email'=>request('email'),
            'mobile'=>request('phone'),
            'country'=>request('country'),
            'state'=>request('state'),
            'special_requirements'=>request('special_requirements'),
            'address'=>request('address'),
            'date'=>request('date'),
            'zip'=>request('zip'),
            'created_by'=>auth()->user()->id
            
        ]);

        $user_id = $user->id;
        $customer = CustomerBioData::where('id',$user_id)->first();
        
        $destination = CustomerDestination::create([
            'from_des'=>request('from_destination'),
            'to_des'=>request('to_destination'),
            'date'=>request('date'),
            'custmId'=>$user_id
        ]);

        return redirect('/customers')->with('success', 'user updated successfully');

    }

    public function destroy($id){
        $customer = CustomerBioData::findOrFail($id)->CustomerDestination()->first();
        $customerdestination = CustomerBioData::findOrFail($id);
        $customer->delete();
        $customerdestination->delete();

        return redirect('/customers')->with('success', 'User deleted successfully');
    }


}

        
        