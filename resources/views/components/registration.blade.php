
<div class="col-md-8"  style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">

  <form  action="{{ route('plans') }}" method="post">
    @csrf

    @if (session('info'))
    @php
        alert()
            ->success('info', session('info'))
            ->persistent('Dismiss');
    @endphp
@endif

  <div >

    <div style="margin-top: 30px; margin-bottom: 40px;">
      <h3>Personal Information</h3>
    </div>

    <input type="text"  name="plan" value="{{ $plan }}" hidden>
    <input type="number"  name="amount" value="{{ $amount }}" hidden>


    <div class="form-group" style="margin-bottom: 25px;">
      <div class="">
        <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">
        @error('phone')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>

    <div class="form-group" style="margin-bottom: 25px;">
      <div class="">
        <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="Home Address" name="address">
        @error('address')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>

    <div class="form-group" style="margin-bottom: 25px;">
      <div class="">
        <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City">
        @error('city')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>

      <div class="form-group" style="margin-bottom: 25px;">
      <div class="">
        <input type="text" class="form-control" name="state" value="{{ old('state') }}" placeholder="State">
        @error('state')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>


    <div class="form-group" style="margin-bottom: 25px;">
      <div class="">
        <input type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Country">
        @error('country')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>



  </div>



  <div>

    <div class="" style="margin-top: 30px; margin-bottom: 30px">
      <h3>Business Information</h3>
    </div>

    <div class="row mb-10 mt-10">
      <div class="col-md-12 form-group">
        <div class="">
          <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}" placeholder="Business Name">
          @error('business_name')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
      </div>
    </div>

    <div class="row mb-10">
      <div class="col-md-12 form-group">
        <div class="">
          <input type="email" class="form-control" name="business_email" value="{{ old('business_email') }}" placeholder="Email">
          @error('business_email')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
      </div>
    </div>
  
  
    <div class="row mb-10 mt-10">
      <div class="col-md-6 form-group">
        <div class="">
          <input type="tel" class="form-control" name="business_phone" value="{{ old('business_phone') }}" placeholder="Phone">
          @error('business_phone')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
      </div>
    </div>

    <div class="form-group mb-10">
      <div class="">
        <input type="text" class="form-control" name="business_address" value="{{ old('business_address') }}" placeholder="Mailing Address">
        @error('business_address')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>
  
    <div class="row mb-10">
      <div class="col-md-6 form-group">
        <div class="">
          <input type="text" class="form-control" name="business_city" value="{{ old('business_city') }}" placeholder="City">
          @error('business_city')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
      </div>
  
        <div class="col-md-6 form-group">
        <div class="">
          <input type="text" class="form-control" name="business_state" value="{{ old('business_state') }}" placeholder="State">
          @error('business_state')
          <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
      </div>
    </div>
  

    <div class="form-group mb-10">
      <div class="">
        <input type="text" class="form-control" name="business_country" value="{{ old('business_country') }}" placeholder="Business Country">
        @error('business_country')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>
  

    <div class="form-group" style="margin-top: 25px;">
      <div class="">
        <input type="text" class="form-control" name="business_number" value="{{ old('business_number') }}" placeholder="Business Number">
        @error('business_number')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>

    <div class="form-group" style="margin-top: 25px;">
      <div class="">
        <select name="business_type" class="form-control" id="">
          <option value="">Select business type</option>
          <option value="Partnership">Partnership</option>
          <option value="Sole Proprietorship">Sole Proprietorship</option>
          <option value="Limited Liability (Corporate)">Limited Liability (Corporate)</option>
          <option value="others">Others</option>
        </select>
        @error('business_type')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>

    <div class="form-group" style="margin-top: 25px;">
      <div class="">
        <select name="business_industry" class="form-control" id="">
          <option value="">Select business industry</option>
          <option value="Agriculture">Agriculture</option>
          <option value="Technology">Technology</option>
          <option value="Health">Health</option>
          <option value="Tourism and Lifestyle">Tourism and Lifestyle</option>
          <option value="Science">Science</option>
          <option value="Information Technology">Information Technology</option>
          <option value="Fashion">Fashion</option>
          <option value="Architecture">Architecture</option>
          <option value="Real Estate">Real Estate</option>
          <option value="Business and Consultancy">Business and Consultancy</option>
          <option value="Finance">Finance</option>
          <option value="Education">Education</option>
           <option value="others">Others</option>
        </select>
        @error('business_industry')
        <small class="text-danger">{{ $message }}</small>
      @enderror
      </div>
    </div>



    <div class="form-group" style="margin-top: 25px; margin-bottom: 25px;">
      <div class="">
       <button type="submit" class="btn btn-large" style="background-color: #4D7902; color: whitesmoke;">Purchase Plan</button>
      </div>
    </div>

  </div>


  </div>