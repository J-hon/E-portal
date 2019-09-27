@extends('main')

@section('title', '| E-Portal')

@section('content')

    <h3 class="text-center font">Welcome to the institute of learning...</h3>
    <br>

    <div class="box-container">
        <div class="box">
            <div class="text-center">
                <a href="{{ route('personal.index') }}">
                    <i class="fas fa-user-alt fa-5x"></i><br>
                    Personal Data
                </a>
            </div>
        </div>
        <div class="box">
            <div class="text-center">
                <a href="#">
                    <i class="fas fa-file fa-5x"></i><br>
                    Transcript
                </a>
            </div>
        </div>
        <div class="box">
            <div class="text-center">
                <a href="#">
                    <i class="fas fa-money-check fa-5x"></i><br>
                    Fees
                </a>
            </div>
        </div>
        <div class="box">
            <div class="text-center">
                <a href="#">
                    <i class="fas fa-receipt fa-5x"></i><br>
                    Course Registration
                </a>
            </div>
        </div>
    </div>

    <style>
        .box-container {
            width: 100%;
        }

        a {
            text-decoration: none;
            color: #A0A0A0;
        }

        a:hover {
            text-decoration: none;
            color: #282828;
        }

        .box-container .box {
            padding: 80px 30px 80px 30px;
            display: inline-block;
            min-height: 45vh;
            max-height: 45vh;
            background-color: #f0f0f0;
            width: 23%;
            margin: 9px;
            box-shadow: .5px .5px 4px .5px #C0C0C0;
        }

        .box-container .box:hover {
            display: inline-block;
            cursor: pointer;
            box-shadow: 2px 4px 18px 2px #C0C0C0;
        }

        @media screen and (max-width: 600px) {
            .box-container {
                margin-left: 100px;
                width: 100%;
            }

            .box-container .box {
                padding: 75px;
                display: inline-block;
                min-height: 45vh;
                max-height: 45vh;
                background-color: #f0f0f0;
                width: 50%;
                margin: 10px;
                box-shadow: .5px .5px 4px .5px #C0C0C0;
            }
        }

        @media (min-width: 600px) and (max-width: 992px) {
            .box-container {
                margin-left: 40px;
                width: 100%;
            }

            .box-container .box {
                padding: 80px 30px 80px 30px;
                display: inline-block;
                min-height: 45vh;
                max-height: 45vh;
                background-color: #f0f0f0;
                width: 40%;
                margin: 10px;
                box-shadow: .5px .5px 4px .5px #C0C0C0;
            }
        }

    </style>

@endsection
