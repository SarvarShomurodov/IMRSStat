@extends('layouts.appclient')
@section('content')
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">QIDIRUV NATIJALARI</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    <!-- Main Start -->
    <div class="mb-3 mt-4">
        <div class="container">
            <h3 style="color: #112e51;text-align: center" class=""></h3>
            <div class="tableWrap">
                <div class="container pt-2 pb-3 pl-5 pr-5">
                    <h3 style="color: #112e51;text-align: center" class=""></h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Xizmatchilar lavozimlari va ishchilar kasblari nomlari</th>
                            <th scope="col">Ta’lim darajasi kodi</th>
                            <th scope="col">Oylik maoshi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <th scope="row">{{$result->id}}</th>
                                <td>{{$result->name}}</td>
                                <td>{{$result->talim}}</td>
                                <td>{{$result->oylik}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $results->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
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
