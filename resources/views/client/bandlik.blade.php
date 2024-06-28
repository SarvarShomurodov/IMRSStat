@extends('layouts.appclient')
@section('content')
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">

    </div>
    <!-- Newsletter End -->

    <!-- Main Start -->
    <div style="padding-top: 75px;">
        <div class="container">
            <div class="borderedDec bg-light">
            </div>
            <br>
            <div class="tableWrap">
                <div class="container pt-2 pb-3 pl-5 pr-5">
                    <h3 style="color: #112e51;text-align: center" class="">Xususiy bandlik agentliklari</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Xususiy bandlik agentligi nomi</th>
                            <th scope="col">Manzil</th>
                            <th scope="col">Tel. raqami</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banliks as $banlik)
                            <tr>
                                <th scope="row">{{$banlik->id}}</th>
                                <td>{{$banlik->name}}</td>
                                <td>{{$banlik->adress}}</td>
                                <td style="width: 12%">{{$banlik->phone}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Main End -->
    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3 m">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->

@endsection
