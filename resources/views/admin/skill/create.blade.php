@extends('layouts.admin')
@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Skill Form</h1>
                @if($errors->any())
                    <div class="alert alert-danger mt-2">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('skill.store') }}" >
                    @csrf
                    <div id="field-container">
                            <label> Skill</label>
                            <input type="text" class="form-control" name="skill_name" placeholder="Python" required>
                            <input type="hidden" name='create_skill' value="skill_page">
                            <label>Percentage</label>
                            <select class="form-control" name="skill_percentage" required>
                                <?php
                                    for ($i = 10; $i <= 100; $i += 10) {
                                        $selected = ($i == 50) ? 'selected' : ''; 
                                        echo "<option value=\"$i\" $selected>$i%</option>";
                                    }
                                 ?>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">SUBMIT & Next</button>
                </form>
        </div>
    </div>
</div>
<script>

var counter = 2;

function add_field() {
    var x = document.getElementById("form");
    var fieldContainer = document.getElementById("field-container");
    
    // create input fields for name and percentage
    var new_name_field = document.createElement("input");
    var new_percentage_field = document.createElement("input");

    // set input field data type to text
    new_name_field.setAttribute("type", "text");
    new_percentage_field.setAttribute("type", "text");

    // set input field names 
    new_name_field.setAttribute("name", "skill_field[]");
    new_name_field.classList.add("form-control");
    new_percentage_field.setAttribute("name", "percentage_field[]");
    new_percentage_field.classList.add("form-control");

    // create a div to contain the new fields
    var new_div = document.createElement("div");
    var uniqueId = "field-group-" + counter;
    new_div.setAttribute("id", uniqueId);
    new_div.classList.add("field-group");

    // add labels and input fields to the new div
    new_div.appendChild(document.createTextNode(counter + ". Skill "));
    new_div.appendChild(new_name_field);
    new_div.appendChild(document.createTextNode(" Percentage: "));
    new_div.appendChild(new_percentage_field);

    // create a remove button
    var removeButton = document.createElement("button");
    removeButton.setAttribute("type", "button");
    removeButton.classList.add("btn", "btn-danger");
    removeButton.appendChild(document.createTextNode("Remove"));
    removeButton.onclick = function() {
        remove_field(uniqueId);
    };

    // add the remove button to the new div
    new_div.appendChild(removeButton);

    // insert the new div before the submit button
    fieldContainer.insertBefore(new_div, fieldContainer.lastChild);

    // increment the counter for the next field
    counter++;
}

function remove_field(uniqueId) {
    var fieldContainer = document.getElementById("field-container");
    var fieldToRemove = document.getElementById(uniqueId);

    // remove the field group
    fieldContainer.removeChild(fieldToRemove);

    // update the labels of remaining fields
    var fields = fieldContainer.getElementsByClassName("field-group");
    for (var i = 0; i < fields.length; i++) {
        fields[i].getElementsByTagName("label")[0].textContent = (i + 1) + ". Skill";
    }
}


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
        'gender': document.getElementById('gender')
    };

    // Set up event listeners for each input field
    for (const [dataKey, inputElement] of Object.entries(inputFields)) {
        setupInputListener(inputElement, dataKey);
    }
</script>

@stop

