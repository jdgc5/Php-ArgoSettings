@extends ('app.base')
@section('title', 'Argo App Settings')

@section ('content')
        <form action="{{ url('setting') }}" method="POST">
       
        @method('put')
        @csrf
       
        
        <div>behaviour after inserting new movie</div>
        <br>
        
        <input type="radio" class="form-check-input" id="showMovie" name="afterInsert" value="show movies" {{ $checkedList }}/>
        <label for="showMovie" class="form-check-label">Show all movies</label>
        <br>
        <input type="radio" class="form-check-input" id="createMovie" name="afterInsert" value="create movie" {{ $checkedCreate }}/>
        <label for="createMovie" class="form-check-label">Show create new movie form</label>
        <br>
        <br>
        
        <label for="country">Select Your Country</label>
        <select name="country" class="form-select" id="country" aria-label="Default select example">
            @foreach ($options as $value => $label)
                <option value="{{ $value }}" {{ $country == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>
        <br>
        <label for="province">Select Your Province</label>
        <select name="province" class="form-select" id="province" aria-label="Default select example">
            @foreach ($optionsProvince as $value => $label)
                <option value="{{ $value }}" {{ $province == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary">Save Settings</button> 
    </form>
    
@endsection