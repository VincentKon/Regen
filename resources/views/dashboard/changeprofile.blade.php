@extends('dashboard.part.main')
@section('container')
    <div class="kotak2">
        <div class="kiri">
            <h1>Change Profile</h1>
        </div>
        <div class="tengah">

        </div>
        <div class="kanan">
            <a href="/dashboard" class="btn btn-success">Confirm
                Profile</a>
        </div>

        <style>
            .kanan {
                float: right;
                width: 30%;
                max-height: 400px;
                padding-right: 50px;
                margin-top: 0px;
                overflow: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
                border: 1px solid white;
            }

            th,
            td {
                padding: 8px;
                border: 1px solid white;
            }

            td {
                background-color: rgb(232, 204, 245);
                width: 70%;
            }

            th {
                text-align: center;
                background-color: rgb(144, 68, 199);
                font-weight: bold;
                width: 30%;
                color: white
            }

            .kiri {
                background-color: red;
                float: left;
                margin-right: 30px;
                width: 30%;
            }

            .tengah {
                background-color: red;
                float: left;
                margin-right: 30px;
                width: 40%;
            }

            .kotak2 {
                width: 1150px;
                height: 450px;
                background-color: white;
                margin-top: 130px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 40px;
                padding-top: 50px;
                padding-left: 50px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            }
        </style>
    @endsection
