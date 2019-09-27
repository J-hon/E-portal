@extends('main')

@section('title', '| Personal Data')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="container" style="margin: 0 auto 40px auto; width: 65%; padding: 30px; background: #F5F5F5;
             box-shadow: 2px 4px 8px 2px #B0B0B0;">
                <h4>Edit Profile</h4>
                <hr>
                <div class="text-center">
                    <img src="{{ asset('images/'.$user->image) }}" style="margin-bottom: 40px;
                    border-radius: 200px" width="150" height="150" alt="Photo">
                </div>

                <div>
                    <label>Full name: {{ $user->name }}</label>
                </div>

                <div>
                    <label>Date of birth: {{ $user->dob }}</label>
                </div>

                <div>
                    <label>Sex: {{ $user->sex }}</label>
                </div>

                <div>
                    <label>Address: {{ $user->address }}</label>
                </div>

                <div>
                    <label>Email: {{ $user->email }}</label>
                </div>

                <div>
                    <label>Mobile number: {{ $user->mobile }}</label>
                </div>

                <div>
                    <label>Matric number: {{ $user->matric_no }}</label>
                </div>

                <div>
                    <label>State: {{ $user->state }}</label>
                </div>

                <div>
                    <label>Local Government: {{ $user->lg }}</label>
                </div>

                <div>
                    <label>Marital Status: {{ $user->status }}</label>
                </div>

                <div>
                    <label>Religion: {{ $user->religion }}</label>
                </div>

                <div>
                    <label>Faculty: {{ $user->faculty }}</label>
                </div>

                <div>
                    <label>Department: {{ $user->department }}</label>
                </div>
            </div>
        </div>
    </div>

@endsection