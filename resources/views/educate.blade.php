@extends('main')

@section('title', '| E-Portal')

@section('content')

    <h3 class="text-center font">Welcome to the institute of learning...</h3>

    <div class="row" id="row">
        <div class="col-md-6 col-sm-12" id="bg">
            <a href="{{ route('personal.index') }}" id="btn-lg" class="btn btn-lg btn-primary">
                Personal Data <span style="float: right"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            </a>
        </div>

        <div class="col-md-6 col-sm-12" id="bg">
            <a href="#" id="btn-lg" class="btn btn-lg btn-primary">
                Transcript <span style="float: right"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12" id="bg">
            <a href="#" id="btn-lg" class="btn btn-lg btn-primary">
                Fees <span style="float: right"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            </a>
        </div>

        <div class="col-md-6 col-sm-12" id="bg">
            <a href="#" id="btn-lg" class="btn btn-lg btn-primary">
                Course Registration <span style="float: right"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            </a>
        </div>
    </div>

@endsection