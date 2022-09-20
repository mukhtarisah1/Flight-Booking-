@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="row g-3" action="/customers" method="POST">
            
            <legend>Enter customer Details</legend>
            <div class="col-md-4">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname" name="first_name" value="{{old('first_name')}}">
            </div>
            <div class="col-md-4">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="last_name" value="{{old('last_name')}}">
            </div>
            <div class="col-md-4">
            <label for="othername" class="form-label">Other Name</label>
            <input type="text" class="form-control" id="othername" name="other_name" value="{{old('other_name')}}">
            </div>
            <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{old('address')}}">
            </div>
            <div class="col-12">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="1234 Main St" name="email" value="{{old('email')}}">
            </div>
            <div class="col-12">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" placeholder="Phone Number Input" name="phone" value="{{old('phone')}}">
            </div>
            <div class="col-md-12">
                <label for="specialRequirements" class="form-label">Special Requirements</label>
                <select id="specialRequirements" class="form-select" name="special_requirements">
                    <option selected>None...</option>
                    <option>Deaf</option>
                    <option>Blind</option>
                    <option>Wheelchair cabin</option>
                    <option>Wheelchair robin</option>
                </select>
            </div>
            <div class="col-md-6">
            <label for="inputCountry" class="form-label">Country</label>
            <input type="text" class="form-control" id="inputCountry" name="country" value="{{old('country')}}">
            </div>
            <div class="col-md-4">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" class="form-select" name="state">
                <option selected value="">Choose...</option>
                    <option>ABUJA FCT</option>
                    <option>ABIA</option>
                    <option>ADAMAWA</option>
                    <option>AKWA IBOM</option>
                    <option>ANAMBRA</option>
                    <option>BAUCHI</option>
                    <option>BAYELSA</option>
                    <option>BENUE</option>
                    <option>BORNO</option>
                    <option>CROSS RIVER</option>
                    <option>DELTA</option>
                    <option>EBONYI</option>
                    <option>EDO</option>
                    <option>EKITI</option>
                    <option>ENUGU</option>
                    <option>GOMBE</option>
                    <option>IMO</option>
                    <option>JIGAWA</option>
                    <option>KADUNA</option>
                    <option>KANO</option>
                    <option>KATSINA</option>
                    <option>KEBBI</option>
                    <option>KOGI</option>
                    <option>KWARA</option>
                    <option>LAGOS</option>
                    <option>NASSARAWA</option>
                    <option>NIGER</option>
                    <option>OGUN</option>
                    <option>ONDO</option>
                    <option>OSUN</option>
                    <option>OYO</option>
                    <option>PLATEAU</option>
                    <option>RIVERS</option>
                    <option>SOKOTO</option>
                    <option>TARABA</option>
                    <option>YOBE</option>
                    <option>ZAMFARA</option>
            </select>
            </div>
            <div class="col-md-2">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip" placeholder="optional" name="zip" value="{{old('zip')}}">
            </div>
            <div class="row-mb-3 pt-3">
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-1 pt-0">Gender</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>
                        <label class="form-check-label" for="gender1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">
                        <label class="form-check-label" for="gender2">
                          Female
                        </label>
                      </div>
                      <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="gender3" value="other">
                        <label class="form-check-label" for="gender3">
                          Other
                        </label>
                      </div>
                    </div>
                  </fieldset>
            </div>
            
        
        
            @csrf
            <legend>Enter Destination Details</legend>
            <div class="col-md-4">
                <label for="dateInput" class="form-label">Date</label>
                <input type="date" class="form-control" id="dateInput"  name="date" >
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">From Destination</label>
                <select id="inputState" class="form-select" name="from_destination">
                    <option selected value="">Choose...</option>
                    <option>ABUJA FCT</option>
                    <option>ABIA</option>
                    <option>ADAMAWA</option>
                    <option>AKWA IBOM</option>
                    <option>ANAMBRA</option>
                    <option>BAUCHI</option>
                    <option>BAYELSA</option>
                    <option>BENUE</option>
                    <option>BORNO</option>
                    <option>CROSS RIVER</option>
                    <option>DELTA</option>
                    <option>EBONYI</option>
                    <option>EDO</option>
                    <option>EKITI</option>
                    <option>ENUGU</option>
                    <option>GOMBE</option>
                    <option>IMO</option>
                    <option>JIGAWA</option>
                    <option>KADUNA</option>
                    <option>KANO</option>
                    <option>KATSINA</option>
                    <option>KEBBI</option>
                    <option>KOGI</option>
                    <option>KWARA</option>
                    <option>LAGOS</option>
                    <option>NASSARAWA</option>
                    <option>NIGER</option>
                    <option>OGUN</option>
                    <option>ONDO</option>
                    <option>OSUN</option>
                    <option>OYO</option>
                    <option>PLATEAU</option>
                    <option>RIVERS</option>
                    <option>SOKOTO</option>
                    <option>TARABA</option>
                    <option>YOBE</option>
                    <option>ZAMFARA</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">To Destination</label>
                <select id="inputState" class="form-select" name="to_destination">
                    <option selected value="">Choose...</option>
                    <option>ABUJA FCT</option>
                    <option>ABIA</option>
                    <option>ADAMAWA</option>
                    <option>AKWA IBOM</option>
                    <option>ANAMBRA</option>
                    <option>BAUCHI</option>
                    <option>BAYELSA</option>
                    <option>BENUE</option>
                    <option>BORNO</option>
                    <option>CROSS RIVER</option>
                    <option>DELTA</option>
                    <option>EBONYI</option>
                    <option>EDO</option>
                    <option>EKITI</option>
                    <option>ENUGU</option>
                    <option>GOMBE</option>
                    <option>IMO</option>
                    <option>JIGAWA</option>
                    <option>KADUNA</option>
                    <option>KANO</option>
                    <option>KATSINA</option>
                    <option>KEBBI</option>
                    <option>KOGI</option>
                    <option>KWARA</option>
                    <option>LAGOS</option>
                    <option>NASSARAWA</option>
                    <option>NIGER</option>
                    <option>OGUN</option>
                    <option>ONDO</option>
                    <option>OSUN</option>
                    <option>OYO</option>
                    <option>PLATEAU</option>
                    <option>RIVERS</option>
                    <option>SOKOTO</option>
                    <option>TARABA</option>
                    <option>YOBE</option>
                    <option>ZAMFARA</option>
                </select>
            </div>

            <div class=" pt-3 justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
    </div>
@endsection