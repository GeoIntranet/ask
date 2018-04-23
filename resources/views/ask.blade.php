@extends('layouts.asklayout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 p-4"
                 style="
                 background: linear-gradient(-45deg,#00b1b3,#1d5086);
                 color: #fff;
                height: 300px; text-align: center; font-size: 1.5em;
                "
            >
                <h1 style="font-size: 3em; font-weight: bolder">
                    <span style="font-weight: lighter;">#</span> Ask <span style="font-weight: lighter">me</span>
                </h1>
                <search></search>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: white;">
            @for($i =1 ;$i<10;$i++)
                <div class="row border p-1">
                    <div class="col-8">
                        <h4>title-{{$i}}</h4>
                        <p>Paragraphe{{$i}}</p>
                    </div>
                    <div class="col-4 text-right ">
                        <br>
                        <i class="fa fa-search" style="color:lightgray"> </i>
                    </div>
                </div>
            @endfor
    </div>
@endsection
