@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="div" m-3>
            <a href="/customers/create" class="btn btn-primary">Add customer</a>
        </div>
        
        <h1 class="justufy-center">Cutomer Entry Details list</h1>
        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Sspecial Requirements</th>
                    <th>Destination From</th>
                    <th>Destination To</th>
                    <th>Date</th>
                    <th>Edit/Delete</th>
                    
                </tr>
            </thead>
            
            @if(count($customers) > 0)
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td><a style="a:active{text-decoration: none;}" href="/customers/{{$customer->id}}"> {{$customer->firstname. " $customer->lastname"}}</a></td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->mobile}}</td>
                        <td>{{$customer->special_requirements}}</td>
                        <td>{{$customer->customerdestination->first()->from_des}}</td>
                        <td>{{$customer->customerdestination->first()->to_des}}</td>
                        <td>{{$customer->customerdestination->first()->date}}</td>
                        <td class="d-flex"><a href="/customers/{{$customer->id}}/edit"><button type="button" class="btn btn-primary btn-sm" >Edit</button></a>&nbsp &nbsp
                            <form action="/customers/{{$customer->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                        

                    </tr>
                
                @endforeach
                </tbody>
            @endif
            
        </table>
       
    </div>
@endsection