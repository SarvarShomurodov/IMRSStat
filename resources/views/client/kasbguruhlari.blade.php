@extends('layouts.appclient')
@section('content')
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">KASB RO`YXATLARI</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    <div style="padding-top: 25px;" class="container">
        <h4>Yuqori mansabdor shaxslar va boshqaruvchilar</h4> <br>
        <p>Ushbu ishchilar tuzilmalar, mahsulotlar va tizimlarni loyihalashtiradi va ishlab chiqadi va xaritalash va boshqa maqsadlar uchun ma'lumot to'playdi. <br><br>
            Arxitektura va muhandislik kasblaridagi umumiy bandlik 2022 yildan 2032 yilgacha barcha kasblar bo'yicha o'rtacha ko'rsatkichdan tezroq o'sishi prognoz qilinmoqda. Har yili o'rtacha 188 000 ga yaqin ish joylari ushbu kasblarda bandlikning o'sishi va ishdan ketgan ishchilarni almashtirish zarurati tufayli prognoz qilinmoqda. doimiy kasblar.<br><br>
            Ushbu guruh uchun o'rtacha yillik ish haqi 2023 yil may oyida 91,420 dollarni tashkil etdi, bu barcha kasblar uchun o'rtacha yillik ish haqi 48,060 dollardan yuqori edi. <br><br>
            Quyidagi jadvalda ko'rsatilmagan BLS bandlik prognozlari, ish haqi va tegishli kasblar uchun boshqa ma'lumotlar Batafsil qamrab olinmagan kasblar bo'yicha ma'lumotlar sahifasida mavjud. Ushbu guruhdagi ishchilar uchun jismoniy talablar, kognitiv va aqliy talablar va boshqa malakalarni aks ettiruvchi ma'lumotlar BLS kasbiy talablar so'rovi (ORS) profilida mavjud.</p>
    </div>
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
                        @foreach($guruhs as $guruh)
                            <tr>
                                <th scope="row">{{$guruh->id}}</th>
                                <td>{{$guruh->name}}</td>
                                <td>{{$guruh->talim}}</td>
                                <td>{{$guruh->oylik}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $guruhs->withQueryString()->links('pagination::bootstrap-5') !!}
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
