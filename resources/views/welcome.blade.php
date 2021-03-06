@extends('layouts.app')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <style>
        html, body {
            background-color: #edd9c0;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .margin-bottom {
            margin-bottom: 30px;
        }
    </style>
    <div class="content">
        <br><br><br><br><br><br><br><br>
        <div class="title margin-bottom">
            APSIT Parking Booking
        </div>

        <div class="links">
            <a href="#">Sameer</a>
            <a href="#">Aishwarya</a>
            <a href="#">Vatsal</a>
            <a href="#">Bhaven</a>
        </div>
    </div>
@endsection



