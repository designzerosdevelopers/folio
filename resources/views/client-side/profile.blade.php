@extends('layouts.client-side-no-nav')
@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Profile Form</h1>
            @if($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
         
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{old('name')}}"  id="name" name="name" required >
                </div>

                <div class="form-group">
                    <label for="profession">Profession</label>
                    <input type="text" class="form-control" value="{{old('profession')}}" id="profession" name="profession" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="profile_description" id="description" rows="3"  required>{{old('description')}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email" required>
                </div>
            <div class="row">
                <div class="form-group col-7">
                    <label for="contact_number">Contact Number</label>
                    <input type="number" class="form-control" value="{{old('contact_number')}}" id="contact_number" name="contact_number" required>
                </div>

                <div class="form-group col-5">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" value="{{old('age')}}" id="age" name="age" required>
                </div>
              </div>
    
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{old('address')}}" id="address" name="address" required>
                </div>
                
            
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                    </select>
                </div>
                

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  id="password" name="password" required autocomplete="new-password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" class="form-control"  id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-9 mt-1">
                      <button type="submit" class="btn btn-primary float-right">Register & Next</button>
                    </div>
                </div>
            </form>


        </div>
        <div class="col-md-6">
            <h1>Live preview</h1>
               <iframe class="border" id="myIframe" src="{{route($template.'.index')}}" frameborder="0" width="100%" height="600" scrolling="no"></iframe>
        </div>
    </div>
</div>
<script>
    const iframe = document.getElementById('myIframe');

    function setupInputListener(inputElement, dataKey) {
        inputElement.addEventListener('input', () => {
            const enteredData = inputElement.value;
            const data = { [dataKey]: enteredData };
            sendMessageToIframe(data);
        });
    }

    function sendMessageToIframe(data) {
        // Send the data object to the iframe
        iframe.contentWindow.postMessage(data, '*');
    }

    const inputFields = {
        'name': document.getElementById('name'),
        'profession': document.getElementById('profession'),
        'description': document.getElementById('description'),
        'email': document.getElementById('email'),
        'contact': document.getElementById('contact-number'),
        'age': document.getElementById('age'),
        'address': document.getElementById('address'),
        'gander': document.getElementById('gander')
    };

    // Set up event listeners for each input field
    for (const [dataKey, inputElement] of Object.entries(inputFields)) {
        setupInputListener(inputElement, dataKey);
    }
</script>

@stop

