@extends('layouts.appclient')
@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #B4C6E7;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #8EAADB;
        }

        ul {
            padding-left: 20px;
        }
    </style>
    <div style="padding-top: 70px;">
        <div class="container mt-5 mb-4">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">PROFILENI KO`RISH</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-5" style="border: 1px solid #cccccc;border-radius: 10px">
            <div class="row">
                <div class="col-md-8">
                    <h2>Xulosa</h2>
                    <table>
                        <tr>
                            <th colspan="2">Kasb nomi: Shifokorlar va jarrohlar</th>
                        </tr>
                        <tr>
                            <td>O’rtacha ish haqqi</td>
                            <td>3 241,2 ming so’m</td>
                        </tr>
                        <tr>
                            <td>Ishga kirish uchun talab etiluvchi ta’lim darajasi</td>
                            <td>Bakalavr va undan yuqori</td>
                        </tr>
                        <tr>
                            <td>Tegishli ish tajribasi</td>
                            <td>Yo’q</td>
                        </tr>
                        <tr>
                            <td>Ish joyida rivojlanish/ treninglar</td>
                            <td>Muntazam treninglar</td>
                        </tr>
                    </table>
                </div>
                <div style="width: 30%;" class="col-md-4 mt-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lot5CHsnV7U"></iframe>
                    </div>
                </div>
            </div>

            <h4 class="mt-3">Shifokor va jarrohlar haqida</h4>
            <p>Shifokorlar va jarrohlar jarohatlar yoki kasalliklarga tashxis qo'yish, davolash va sog'liqni saqlashga ko’maklashishdan iborat.</p>
            <h4>Ish muhiti</h4>
            <p>Shifokorlar va jarrohlar klinik va klinik bo’lmagan sharoitlarda mehnat qiladi. Klinik sharoitlarga shifokorlar kabinetlari va shifoxonalar kiradi; klinik bo’lmaganlariga esa davlat idoralari, nodavlat tashkilotlar va sug’urta kompaniyalari kiradi.</p>

            <h4>Potensial ish joylari</h4>
            <ul>
                <li><i style="font-size: 10px" class="bi bi-record-fill"></i> Davlat yoki xususiy klinikalarda – bemorlarni qabul qilish, anamnez qo‘yish, suhbat va kuzatuv jarayonida tashxis qo‘yish, qo‘shimcha davolash tadbirlarini olib borish, davolanish kursini belgilash; bemorlarni o‘z chaqiruviga binoan xonadonlarida ko‘zdan kechirish, konsilium, majlislarda ishtirok etish.</li>
                <li><i style="font-size: 10px" class="bi bi-record-fill"></i> Statsionarda – bo‘limda navbatchilik qilish, og‘ir kasallarga tez yordam ko‘rsatish, bemorlarni ko‘zdan kechirish va ularga tashxis qo‘yish, davolash jarayonini nazorat qilish, bemorlarning tibbiy kartalarini to‘ldirish, konsilium, majlislarda ishtirok etish.</li>
                <li><i style="font-size: 10px" class="bi bi-record-fill"></i> Tez yordam tizimida – navbatchilik qilish, shoshilinch chaqiruvlar, jabrlanuvchi va bemorning qarindoshlari yoki noxush hodisa guvohlari bilan suhbat olib borish, ko‘ngilsiz voqea joyining o‘zidayoq operatsiyalarni olib borish, bemorni, uning hayoti xavfsizligini ta’minlagan holda, statsionarga etkazish.</li>
                <li><i style="font-size: 10px" class="bi bi-record-fill"></i> Bolalar ta’lim-tarbiya muassasalarida – bolalarni rejalashtirilgan ko‘rikdan o‘tkazish, bemorlarni aniqlash, muassasaning sanitar holatini nazorat qilish, tegishli hisobotlarni tayyorlash, tibbiy kartalarni yuritish.</li>
            </ul>

            <h4>Qanday qilib shifokor yoki jarroh bo’lish mumkin</h4>
            <p>Shifokorlar va jarrohlar odatda bakalavr darajasiga (6 yil), shuningdek, tibbiy darajaga muhtoj bo’lib, uni tugatish uchun qo’shimcha 2 yil kerak bo’ladi. Shuningdek, subixtisoslashuv bo’yicha qo’shimcha ta’lim 2 yildan 5 yilgacha bo’lishi mumkin.</p>

            <h4>Ish haqqi</h4>
            <p>Sog’liqni saqlash sohasidagi o’rtacha ish haqqi O’zbekiston o’rtachasidan pastroq bo’lib o’rtacha oylik ish haqqi 3 241,2 ming so’mni tashkil etadi.</p>
        </div>
    </div>
    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5 mt-5">
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
