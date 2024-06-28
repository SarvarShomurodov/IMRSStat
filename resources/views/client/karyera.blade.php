@extends('layouts.appclient')
@section('content')
    <!-- Karyera start -->
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5 mb-4">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">Karyera yoki malaka oshirish</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h2 class="modal-title" id="exampleModalLabel">Ish qidirishni boshlang</h2>
                    <i data-bs-dismiss="modal" style="font-size: 20px;color: #1363c6;" class="fa-solid fa-rectangle-xmark"></i>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            <form>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-earth-americas"></i> </span>
                                    </div>
                                    <select class="form-control">
                                        <option selected=""> Hududni tanlang:</option>
                                        <<option value="qoraqalpogiston">Qoraqalpog'iston Respublikasi</option>
                                        <option value="andijon">Andijon viloyati</option>
                                        <option value="buxoro">Buxoro viloyati</option>
                                        <option value="jizzax">Jizzax viloyati</option>
                                        <option value="qashqadaryo">Qashqadaryo viloyati</option>
                                        <option value="navoiy">Navoiy viloyati</option>
                                        <option value="namangan">Namangan viloyati</option>
                                        <option value="samarqand">Samarqand viloyati</option>
                                        <option value="surxondaryo">Surxondaryo viloyati</option>
                                        <option value="sirdaryo">Sirdaryo viloyati</option>
                                        <option value="toshkent_vil">Toshkent viloyati</option>
                                        <option value="fargona">Farg'ona viloyati</option>
                                        <option value="xorazm">Xorazm viloyati</option>
                                        <option value="toshkent_shahri">Toshkent shahri</option>
                                    </select>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                    </div>
                                    <select class="form-control">
                                        <option selected=""> Sohani tanlang:</option>
                                        <option value="healthcare">Sog'liqni saqlash</option>
                                        <option value="construction">Qurilish sohasi</option>
                                        <option value="trade_services">Savdo va xizmat ko'rsatish</option>
                                        <option value="agriculture">Qishloq xo'jaligi</option>
                                        <option value="architecture_engineering">Arxitektura va Texnika</option>
                                        <option value="it">IT sohasi</option>
                                        <option value="education">Ta'lim sohasi</option>
                                        <option value="logistics_driving">Logistika va haydovchilik sohasi</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-building-columns"></i></span>
                                    </div>
                                    <select class="form-control">
                                        <option selected=""> Ta'lim darajangiz:</option>
                                        <option value="not_important">Muhim emas</option>
                                        <option value="secondary">O‘rta</option>
                                        <option value="secondary_special">O‘rta maxsus</option>
                                        <option value="higher">Oliy</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-briefcase"></i> </span>
                                    </div>
                                    <select class="form-control">
                                        <option selected=""> Ish tajribangiz:</option>
                                        <option value="none">Yo’q</option>
                                        <option value="1-3">1-3 yil</option>
                                        <option value="3-6">3-6 yil</option>
                                        <option value="more_than_6">6 va undan yuqori</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa-solid fa-wallet"></i> </span>
                                    </div>
                                    <select class="form-control">
                                        <option selected=""> Kutilayotgan oylik maosh:</option>
                                        <option value="not_important">Muhim emas</option>
                                        <option value="2000000">2 000 000</option>
                                        <option value="4000000">4 000 000</option>
                                        <option value="6000000">6 000 000</option>
                                        <option value="8000000">8 000 000</option>
                                        <option value="10000000">10 000 000</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div style="width: 38%;margin-left: 80px" class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Jo`natish</button>
                                </div> <!-- form-group// -->
                            </form>
                        </article>
                    </div> <!-- card.// -->

                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h2 class="modal-title" id="exampleModalLabel">Malumot havolalari</h2>
                    <i data-bs-dismiss="modal" style="font-size: 20px;color: #1363c6;" class="fa-solid fa-rectangle-xmark"></i>
                </div>
                <div class="modal-body">
                    <a href="https://mehnat.uz/ru/regions">
                        <div class="form-group">
                            <button style="margin-bottom: 10px" class="btn btn-custom2" type="button"><h5>Davlat tasarrufidagi bandlikka ko‘maklashish markazlari.</h5></button>
                        </div> <!-- form-group// -->
                    </a>
                    <a href="{{url('/bandlik')}}">
                        <div class="form-group">
                            <button class="btn btn-custom2" type="button"><h5>Xususiy bandlik agentliklari.</h5></button>
                        </div> <!-- form-group// -->
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Main Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4><a style="text-decoration: none;color: black" href="{{url('/yuqorimaosh')}}">Maosh yuqori bo`lgan kasblar</a></h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col">Oylik ish haqqi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="width:40%;">Muhandis</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 100%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">51,00 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Xavfsizlik bo'yicha muhandis</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 90%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">40,00 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Senior PHP dasturchi</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 75%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">38,50 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Dasturchi (Middle)</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 65%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">37,95 mln so`m</td>
                        </tr>
                        <tr>
                            <td>HR-menejer</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 65%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">37,95 mln so`m</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4><a style="text-decoration: none;color: black" href="{{url('/osish')}}">Eng ko'p so'raladigan ko'nikmalar</a></h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="width:40%;">Faol sotuv qobiliyati</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 100%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">17.2%</td>
                        </tr>
                        <tr>
                            <td>Telefon orqali muzokaralar olib</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 90%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">13.2%</td>
                        </tr>
                        <tr>
                            <td>Biznes suhbat</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 70%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">12.1%</td>
                        </tr>
                        <tr>
                            <td>Mijozlarni topa olish qobiliyati</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 65%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">12.1%</td>
                        </tr>
                        <tr>
                            <td>Biznes kommunikatsiya</td>
                            <td><img src="{{asset('assets/img/progress.png')}}" style="width: 25%; height: 25px; display: inline-block; vertical-align: middle;"></td>
                            <td class="w-25">9.9%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-4">Karyera va bandlikka ko`maklashish</h1>
                    <p class="mb-4">Qiziqarli ish imkoniyatlari va professional o'sish olamini kashf eting. Turli xil ish e'lonlarini ko'rib chiqing, qimmatli kasb bo'yicha maslahatlar oling va kasb yo'lingizni boshqarish uchun resurslardan foydalaning.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/oliy.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="https://www.ulife.uz/allUniversity">
                                            <h5 class="lh-base text-white mb-3">Malakaga ega bo‘lish uchun Oliy o‘quv yurtlari ro‘yxati
                                            </h5>
                                            <p style="color:white;" class="erat"> O‘z kelajagingizni rejalashtirishda sizga yordam beradigan eng yaxshi o‘quv yurtlarini tanlang.</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/ish_topish.jpg') }}" alt="">
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal2" class="case-overlay text-decoration-none" href="">
                                            <h5 class="lh-base text-white mb-3">Bandlikka ko`maklashish
                                            </h5>
                                            <p style="color:white;" class="erat">Ish topish, kasbiy rivojlanish hamda bandlikka oid xizmatlardan foydalaning. Biz bilan birgalikda muvaffaqiyatga erishing!</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/kurs.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="https://rank.uz/ru/ec">

                                            <h5 class="lh-base text-white mb-3">Malaka oshirish uchun kurslar ro`yxati
                                            </h5>
                                            <p style="color:white;" class="erat">Turli sohalar bo‘yicha malaka oshirish imkoniyatlarini o‘rganing. O‘z bilimingizni yangilash va rivojlantirish uchun mos kurslarni tanlang.</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/ishtopish.jpg') }}" alt="">
                                        <a type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="case-overlay text-decoration-none" href="">
                                            <h5 class="lh-base text-white mb-3">Ish topish
                                            </h5>
                                            <p style="color:white;" class="erat">Ish qidirish jarayonini oson va samarali qiling. Muvaffaqiyatga erishish yo‘lida birinchi qadamni qo‘ying!</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h4>Rezumeni to`g`ri to`ldirish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/agE_3t6KOII"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Intervyuda o`zini to`g`ri tutish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e4sClkLPPKg"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection
