@extends('main')

@section('title', '| Personal Data')

@section('content')

    <h4>Profile</h4>

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{ route('personal.store') }}" enctype="multipart/form-data">

                {{csrf_field()}}
                <div class="text-right">
                    {{ Form::label('image', 'Upload display picture: ') }}
                    {{ Form::file('image') }}

                    {{--<div class="text-right">--}}
                    {{--{{ Form::label('display_picture', 'Upload display picture: ') }}--}}
                    {{--<input type="file" id="button" style="display: none;">--}}
                    {{--<label class="btn btn-primary" for="button" style="cursor: pointer">Upload file</label>--}}
                    {{--</div>--}}
                </div>

                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('name', 'Full name: ') }}
                        <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control">
                    </div>

                    <div class="col-md-4">
                        {{ Form::label('dob', 'Date of birth ') }}
                        {{ Form::date('dob', null, ['class' => 'form-control']) }}
                    </div>

                    <div class="col-md-2">
                        {{ Form::label('sex', 'Sex:') }}
                        <select name="sex" class="form-control">
                            <option selected disabled> Select sex </option>
                            @foreach($sex as $sexes)
                                <option value="{{ $sexes->name }}">{{ $sexes->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('address', 'Address: ') }}
                        {{ Form::textarea('address', null, ['class' => 'form-control', 'rows' => '3']) }}
                    </div>

                    <div class="col-md-6" style="margin-top: 28px">
                        {{ Form::label('email', 'Email: ') }}
                        <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('mobile', 'Mobile number ') }}
                        {{ Form::tel('mobile', null, ['class' => 'form-control', 'maxlength' => 11, 'onkeypress' => 'return isNumber(event)']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('matric_no', 'Matric number:') }}
                        <input type="text" name="matric_no" value="{{ Auth::user()->matric_no }}" class="form-control">
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('state', 'State:') }}
                        <select name="state" id="state" class="form-control">
                            <option selected disabled> Select state </option>
                            @foreach($states as $state)
                                <option value="{{ $state->name }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('local_govt', 'Local Government:') }}
                        <select name="lg" id="lg" class="form-control"></select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('marital', 'Marital status:') }}
                        <select name="status" class="form-control">
                            <option selected disabled> Select Marital Status </option>
                            @foreach($maritals as $marital)
                                <option value="{{ $marital->name }}">{{ $marital->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('religion', 'Religion:') }}
                        <select name="religion" class="form-control">
                            <option selected disabled> Select Religion </option>
                            @foreach($religions as $religion)
                                <option value="{{ $religion->name }}">{{ $religion->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('faculty', 'Faculty:') }}
                        <select name="faculty" id="faculty" class="form-control">
                            <option selected disabled> Select Faculty </option>
                            @foreach($faculties as $faculty)
                                <option value="{{ $faculty->name }}">{{ $faculty->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('department', 'Department:') }}
                        <select name="department" id="dept" class="form-control"></select>
                    </div>

                    <div class="col-12">
                        {{ Form::submit('Save', ['class' => 'btn btn-success btn-block form-spacing-top']) }}
                    </div>
                </div>

            </form>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#state').change(function() {
                var state_id = $('#state').find(":selected").val();

                option = '<option selected disabled> Select local government </option>';

                $.get("{{ url('getLG') }}", { "state_id" : state_id}, function (states) {
                    if (states.length == 0)
                    {

                    }
                    else
                    {
                        jQuery.each(states, function(index, item) {
                            option += '<option value="'+item.name+'">'+item.name+'</option>';
                        });
                    }
                    $('#lg').html(option);
                });
            });

            $('#faculty').change(function() {
                var faculty_id = $('#faculty').find(":selected").val();

                option = '<option selected disabled> Please select department </option>';

                $.get("{{ url('getDept') }}", { "faculty_id" : faculty_id}, function (faculties) {
                    if (faculties.length == 0)
                    {

                    }
                    else
                    {
                        jQuery.each(faculties, function(index, item) {
                            option += '<option value="'+item.name+'">'+item.name+'</option>';
                        });
                    }
                    $('#dept').html(option);
                });
            });
        });
    </script>

@endsection