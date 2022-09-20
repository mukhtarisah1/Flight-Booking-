@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" >
            
            <div class="card-body">
              <h5 class="card-title">Customer Details</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<br>
                <div>
                  <strong>Name:&nbsp; </strong> {{$customer->firstname}} &nbsp; {{$customer->othername}} &nbsp {{$customer->lastname}}</h6><br>
                  <strong>Email:&nbsp; </strong> {{$customer->email}} <br>
                  <strong>Phone Number:&nbsp; </strong> {{$customer->mobile}} <br>
                  <strong>From Destination:&nbsp; </strong> {{$customer->customerdestination->first()->from_des}} <br>
                  <strong>To Destination:&nbsp; </strong> {{$customer->customerdestination->first()->to_des}} <br>
                  <strong>Date:&nbsp; </strong> {{$customer->customerdestination->first()->date}} <br>
                  <strong>Special Requirements:&nbsp; </strong> {{$customer->special_requirements}} <br>
                  <strong>Country:&nbsp; </strong> {{$customer->country}} <br>
                  <strong>State:&nbsp; </strong> {{$customer->state}} <br>
                  <strong>Address:&nbsp; </strong> {{$customer->address}} <br>
                  <strong>zip:&nbsp; </strong> {{$customer->zip}} <br>
                </div>
              </p>

              <a href="/customers" class="btn btn-primary">Go back</a>
            </div>
          </div>
    </div>
@endsection