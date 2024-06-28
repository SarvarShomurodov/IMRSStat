@extends('layouts.appclient')
@section('content')
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">KASB TANLASHGA YORDAM</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Main Start -->
    <div class="container mt-5 mb-5">
        <h3>Yuqori Maosh To'lovchi Kasblar</h3>
        <p>Quyidagi jadvalda 20 ta eng yuqori maosh to'lovchi kasblar keltirilgan.</p>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead style="background-color: #112e51" class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th style="color: white;width: 35%" scope="col" class="px-6 py-3">
                        Kasb nomi
                    </th>
                    <th style="color: white" scope="col" class="px-6 py-3">
                        Oylik ish haqqi
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($maoshes as $maoshe)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$maoshe->name_summ}}
                        </th>
                        <td class="px-6 py-4" style="text-align: left; vertical-align: middle;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: {{$maoshe->widh}}%; height: 25px; display: inline-block; vertical-align: middle;">
                            <p style="display: inline-block; margin-left: 10px; vertical-align: middle;font-size: 16px;">{{$maoshe->oylik}}M so`m</p>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

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
