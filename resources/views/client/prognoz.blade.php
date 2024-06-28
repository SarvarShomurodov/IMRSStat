@extends('layouts.appclient')
@section('content')
    <!-- Main Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5 mb-5 p-0">
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group">
                        <ul style="background-color: white;" class="text-ul">
                            <li class="text-li"><a style="text-decoration: none;color: #555555" href="{{url('/pragnoz')}}">Umumiy malumotlar</a></li>
                            <li class="text-li"><a style="text-decoration: none;color: #555555" href="{{url('/barometr')}}">Barometr</a></li>
                            <li class="text-li">Tushunchalar</li>
                            <li class="text-li">Malumotlar manbalari</li>
                            <li class="text-li">Dizayn</li>
                            <li class="text-li">Hisoblash metodikasi</li>
                            <li class="text-li">Taqdimot</li>
                            <li class="text-li"><a style="text-decoration: none;color: #555555" href="{{url('/expected')}}">Prognozlar</a></li>
                            <li class="text-li">Ko`proq ma`lumotlar</li>
                            <!-- More items here -->
                        </ul>
                    </div>
                </div>
                <div style="margin-left: 5%;" class="col-md-6">
                    <h4>Ishchi kuchi talabi prognozi: <a href="">Umumiy ma'lumotlar</a></h4>
                    <p style="font-size: 18px;width: 100%;">Mehnat bozori prognozlari mehnat bozori, makroiqtisodiyot va sanoat faoliyati
                        bo'yicha tarixiy va joriy iqtisodiy ma'lumotlarni tahlil qilish asosida sanoat va kasblar
                        bo'yicha milliy bandlikning 10 yillik prognozlarini o'z ichiga oladi.<p>
                    <table style="width: 90%;" class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align: center;background-color: #ebebda;" colspan="2">Last</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Yo'nalish</td>
                            <td>Bandlik</td>
                        </tr>
                        <tr>
                            <td>Asosiy ko'rsatkichlar</td>
                            <td>Ta'lim, o'qitish va tajriba <br>
                                Bandlik prognozi <br>
                                Mehnat bozori ko'rsakichlari prognozlari</td>
                        </tr>
                        <tr>
                            <td>Ma'lumotlar qanday olinadi</td>
                            <td>Bandlik prognozi</td>
                        </tr>
                        <tr>
                            <td>Tasniflash</td>
                            <td>Demografik, tarmoq, kasb</td>
                        </tr>
                        <tr>
                            <td>Ma'lumotlar davriyligi</td>
                            <td>Yillik</td>
                        </tr>
                        <tr>
                            <td>Geografik tafsilot</td>
                            <td>Respublika ko'lami</td>
                        </tr>
                        <tr>
                            <td>Qo'llash doirasi</td>
                            <td>Hukumat, xususiy sektor</td>
                        </tr>
                        <tr>
                            <td>Malumot davri</td>
                            <td>2022–32</td>
                        </tr>
                        <tr>
                            <td>Asosiy natijalar</td>
                            <td><a href="">Bandlik prognozlari yangiliklari</a><br>
                                <a href="">Yuqori oylik maosh</a><br>
                                <a href=""> Karyera yoki malaka oshirish</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dastur veb-sahifasi</td>
                            <td><a href="http://www.careerinfo.uz">www.careerinfo.uz</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <p>Last Modified Date: September 06, 2023</p>
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
