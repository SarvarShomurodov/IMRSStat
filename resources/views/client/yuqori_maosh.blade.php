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
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASB GURUHLARI</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 50%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                      <ul class="text-ul mb-4">
                        <li class="text-li"><a style="text-decoration: none;color: #555555;" href="{{url('/kasbguruhlari')}}">Yuqori mansabdor shaxslar va boshqaruvchilar</a></li>
                          <li class="text-li">Korporativ boshqaruvchilar</li>
                          <li class="text-li">Xizmatlar sohasidagi boʻlinmalar rahbarlari</li>
                          <li class="text-li">Boshqaruvchilar</li>
                          <li class="text-li">Professional-mutaxassislar</li>
                          <li class="text-li">SSSda professional-mutaxassislar</li>
                          <li class="text-li">TSda professional-mutaxassislar</li>
                          <li class="text-li">Biznesda professional-mutaxassislar</li>
                          <li class="text-li">IT da professional-mutaxassislar</li>
                          <li class="text-li">San'atda professional-mutaxassislar</li>
                          <li class="text-li">Professional texniklar</li>
                          <li class="text-li">Oʻrta ma'lumotli tibbiyot xodimlari</li>
                          <li class="text-li">Ma'muriy mutaxassislar</li>
                          <li class="text-li">Yordamchi xodimlar</li>
                          <li class="text-li">AKT sohasidagi mutaxassis-texniklar</li>
                          <li class="text-li">Umumiy profil xizmatchilari</li>
                          <li class="text-li">Xizmat koʻrsatish xizmatchilari</li>
                          <li class="text-li">ITda xizmatchilar</li>
                          <li class="text-li">Ofis xizmatchilari</li>
                          <li class="text-li">Individual xizmatlar sohasidagi xodimlar</li>
                          <li class="text-li">Sotuvchilar</li>
                          <li class="text-li">YTda xizmat koʻrsatuvchi xodimlar</li>
                          <li class="text-li">Fuqarolarni muhofaza qilish xizmati xodimlari</li>
                          <li class="text-li">QXMni ishlab chiqaruvchilari</li>
                          <li class="text-li">Qishloq xo'jaligida ishlab chiqaruvchilar</li>
                          <li class="text-li">Qurilishda ishchilari (elektriklardan tashqari)</li>
                          <li class="text-li">Sanoat ishchilari</li>
                          <li class="text-li">Poligrafiy va qoʻl mehnatining yuqori malakali ishchilari</li>
                          <li class="text-li">Elektrotexnika va elektronika sohasidagi ishchilar</li>
                          <li class="text-li">Oziq-ovqat sanoati ishchilari</li>
                          <li class="text-li">Statsionar qurilmalari operatorlari</li>
                          <li class="text-li">Yigʻuvchilar</li>
                          <li class="text-li">Koʻchma qurilmalar operatorlari va haydovchilari</li>
                          <li class="text-li">Uy xizmatchilari va farroshlar</li>
                          <li class="text-li">Qishloqxo'jaligida malakasiz ishchilar</li>
                          <li class="text-li">Og'ir sanoatda malakasiz ishchilar</li>
                          <li class="text-li">Taom tayyorlashda yordamchilar</li>
                          <li class="text-li">Boshqa turdagi malakasiz xodimlar</li>
                          <li class="text-li">Chiqindilarni yigʻuvchi xodimlar</li>
                          <!-- More items here -->
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASB TANLASH</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <form action="{{ route('guruhs.search') }}" method="GET">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <select id="educationSelect" name="education" aria-label="Default select example">
                                        <option value="">Ta’lim darajasi kodi</option>
                                        <option value="Bakalavr">Bakalavr</option>
                                        <option value="Magistratura">Magistratura</option>
                                        <option value="O‘rta professional ta’lim"> O‘rta professional ta’lim</option>
                                        <option value="Boshlang‘ich professional ta’lim"> Boshlang‘ich professional ta’lim</option>
                                        <option value="Ilmiy unvon">Ilmiy unvon</option>
                                        <option value="Boshlang‘ich ta’lim va kasbiy tajriba">Boshlang‘ich ta’lim va kasbiy tajriba</option>
                                        <!-- Add other options as needed -->
                                    </select>
                                </div>
                                <div id="search_div" class="col-md-4 mb-3">
                                    <select id="salarySelect" name="salary" aria-label="Default select example">
                                        <option value="">Oylik maoshi</option>
                                        <option value="1">2000000-10000000</option>
                                        <option value="2">12000000-20000000</option>
                                        <option value="3">22000000-30000000</option>
                                        <option value="4">35000000-45000000</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">

                                </div>
                                <div class="col-md-2 mb-3">
                                    <button type="submit" style="border: 1px solid #2d7db2;color: #2d7db2;">QIDIRISH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">TAVSIYA ETILYOTGAN KASB</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <div class="col-md-4 mb-3"><img src="{{asset('assets/img/2.png')}}" class="img-fluid" alt=""></div>
                        <div class="col-md-8 mb-3">
                            <h4 style="font-family: cursive; color: #945959;">Shifokor va jarrohlar haqida </h4>
                            <h5 style="color: #757575;width: 90%;">Shifokorlar va jarrohlar jarohatlar yoki kasalliklarga tashxis qo'yish,
                                davolash va sog'liqni saqlashga ko’maklashishdan iborat.</h5>
                            <a href="{{url('/kasbprofile')}}" style="font-family: cursive;color: black;margin-left: 54.5%;">Profilni ko`rish</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">A-Z INDEKS</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center pl-4 pt-2" id="in-class">
                        <p style="font-size: 17px;">
                            <a href="/items/A">A</a>
                            <a href="/items/B">B</a>
                            <a href="/items/C">C</a>
                            <a href="/items/D">D</a>
                            <a href="/items/E">E</a>
                            <a href="/items/F">F</a>
                            <a href="/items/G">G</a>
                            <a href="/items/H">H</a>
                            <a href="/items/I">I</a>
                            <a href="/items/J">J</a>
                            <a href="/items/K">K</a>
                            <a href="/items/L">L</a>
                            <a href="/items/M">M</a>
                            <a href="/items/N">N</a>
                            <a href="/items/O">O</a>
                            <a href="/items/P">P</a>
                            <a href="/items/Q">Q</a>
                            <a href="/items/R">R</a>
                            <a href="/items/S">S</a>
                            <a href="/items/T">T</a>
                            <a href="/items/U">U</a>
                            <a href="/items/V">V</a>
                            <a href="/items/W">W</a>
                            <a href="/items/X">X</a>
                            <a href="/items/Y">Y</a>
                            <a href="/items/Z">Z</a>
                        </p>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASBLARNI KO`RISH</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;height: 100%;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;"><a style="text-decoration: none;color: black;" href="{{url('/yuqorimaosh')}}">Eng yuqori maoshli kasblar</a></p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;"><a style="text-decoration: none;color: black;" href="{{url('/osish')}}">Eng ko`p so`raladigan ko`nikmalar</a></p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;"><a style="text-decoration: none;color: black;" href="{{url('/faqs')}}">Talab yuqori bo`lgan kasblar</a></p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;"><a style="text-decoration: none;color: black;" href="{{url('/kelajakish')}}">Kelajak ish o`rinlari</a></p></button>
                        </div>
                    </div>
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
