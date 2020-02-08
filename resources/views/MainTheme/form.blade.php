@extends('MainTheme.index')

@section('body')

<div class="container" style="    box-sizing: border-box; display: block; margin-top: 155px;">
    <form action="{{route('form')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="first_name" id="firstName" class="form-control">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" id="lastName" class="form-control">
        </div>

        <div class="form-group">
            <label>Email Adress</label>
            <input type="email" name="email_adress" class="form-control">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="number" name="phone_number" class="form-control">
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control">
        </div>
        <div class="form-group">
            <label>Adress</label>
            <textarea name="adress" class="form-control" rows="5"></textarea>
        </div>

        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" name="agree" class="form-check-input" /> I agree with all terms &
                conditions
            </label>
        </div>

        <div class="form-group">
            <input type="submit" name="btn" value="Submit" class="btn btn-success btn-block" />
        </div>
    </form>
</div>
@endsection