@extends('layouts.appclient')
@section('content')
<div style="padding-top: 70px;">
    <div class="py-1" style="background-color: #f5e8ff; height: 4em;"></div>
    <div style="background-color: #2f005f;" class="container-fluid py-5">
        <div class="container">
            <!-- Content continues here -->
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn">
                    <h1 class="mb-4 text-white">Biz sizning kelajagingizni qurishda yordam beramiz!</h1>
                    <p class="mb-4 text-white">Bizning maqsadimiz - xalqimizning to'liq malakali salohiyatini
                        ro'yobga chiqarish, natijada ishchi kuchi ishtiroki,
                        samaradorlik, ish haqi va tenglikni oshirish.</p>
                    <div class="d-flex align-items-center mt-4">
                        <a style="background-color: #FFD700;color: black;" class="btn btn-primary rounded-pill px-4 me-3" href="">Biz haqimizda</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img style="border-radius: 15px;" class="img-fluid" src="{{asset('assets/img/2.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
   <br>
            <h3 style="margin-left: 16%;color: #2f005f">O'zbekiston raqamlarda, 2024 yil yanvar</h3>
        <hr>
        <section class="statistics-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>14,0 mln</h4>
                    <p>Ish bilan ta'minlangan aholisi soni</p>
                </div>
                <div class="col-md-3">
                    <h4>6,8%</h4>
                    <p>Ishsizlik darajasi</p>
                </div>
                <div class="col-md-3">
                    <h4>336,8 ming</h4>
                    <p>Ish o'rinlari</p>
                </div>
                <div class="col-md-3">
                    <h4>125,0 ming</h4>
                    <p>Tashkilotlar soni</p>
                </div>
            </div>
        </div>
        </section>
        <hr>
</div>


<!-- Navbar End -->

<!-- Case Start -->
    <div class="container mt-5">
        <h2 style="color: #2f005f;" class="mb-4">Tanlangan</h2>
        <div class="row row-equal">
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <!-- <span class="text-muted">8-mart, 2024</span> -->
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="maqola1.html">O'zbekistonda norasmiy bandlikning o'zgarish tendensiyalari</a></h5>
                        <p class="text-muted">Rasmiy statistik ma’lumotlarga ko‘ra, 2024-yilning 1-yanvar holatiga ko‘ra, O‘zbekistonda jami band aholining 39,0 foizi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <!-- <span class="text-muted">8-mart, 2024</span> -->
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="maqola2.html">O'zbekistonda nogironligi bo'lgan shaxslarning mehnat bozorida inklyuziv...</a></h5>
                        <p class="text-muted">Bugungi kunda O‘zbekistonda mehnatga layoqatli yoshdagi nogironligi bo‘lgan 755 ming nafaridan ortiq kishi istiqomat...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/5.png')}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <!-- <span class="text-muted">8-mart, 2024</span> -->
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="maqola3.html">O'zbekiston maktablaridagi infratuzilma va ta'lim sifatiga ta'sir etuvchi omillar</a></h5>
                        <p class="text-muted">Ta’lim sifatini ifodalovchi ko‘rsatkich deb abituriyentlarning 2022/2023 o‘quv yili uchun OTMga kirish imtihonlarida to‘plagan ballari...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Case End -->

<!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Full Screen Search End -->

<!-- About Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Mehnat bozori holati</h1>
                    <p class="mb-4">Quyidagi talablar nomzodlar imkoniyatini oshiradi: Iqtisodiyot, moliya va matematika yo`nalishlarida magistratura yoki PhD darajasiga ega bo'lish...</p>
                    <div class="d-flex align-items-center mt-4">
                        <a  class="btn btn-primary rounded-pill px-4 me-3" href="">Batafsil</a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img style="border-radius: 15px;" class="img-fluid" src="{{asset('assets/img/6.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- About End -->

<!-- Service Start -->
    <div class="container mt-5">
        <h2 class="mb-4">Yangiliklar</h2>
        <div class="row row-equal">
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/7.png')}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <span class="text-muted">8-mart, 2024</span>
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="maqola4.html">O'zbekistonda ayollar orasidagi ishsizlik sabablari</a></h5>
                        <p class="text-muted">2024-yilning boshida O‘zbekiston aholisi 36799 ming kishiga yetdi va 2023-yilning mos davridagiga nisbatan 2,2 foizga yoki 775 ming kishiga oshdi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/8.png')}}" style="height: 56.5%;" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <span class="text-muted">8-mart, 2024</span>
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="">Qaysi sohalarda ko'proq maosh taklif qilinmoqda?</a></h5>
                        <p class="text-muted">Kasb tanlashda inson bir necha omillardan kelib chiqib qaror qabul qiladi.Ushbu omillar insonning o’z qiziqsihlari va ehtiyojlari...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-equal">
                <div class="card card-custom">
                    <img src="{{asset('assets/img/1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body card-body-custom">
                        <div class="news-header">
                            <h6 class="text-muted mb-0 news-title">Yangiliklar</h6>
                            <span class="text-muted">8-mart, 2024</span>
                        </div>
                        <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="">Ta’lim sifati va ijtimoiy-iqtisodiy rivojlanish</a></h5>
                        <p class="text-muted">Ta’lim sifatini ifodalovchi ko‘rsatkich deb abituriyentlarning 2022/2023 o‘quv yili uchun OTMga kirish imtihonlarida to‘plagan ballari...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Service End -->

<hr class="custom-hr">

<!-- Newsletter Start -->
    <div class="container mt-5">
        <div class="subscription-banner">
            <div class="subscription-form">
                <div class="text">
                    Yangiliklardan xabardor bo'lish uchun bizga obuna bo'ling.
                </div>
                <input type="email" placeholder="Pochta manzilingiz">
                <button type="submit">Obuna bo'lish</button>
            </div>
        </div>
    </div>
<!-- Newsletter End -->

<!-- FAQs Start -->
    <div class="container-fluid py-4">

    </div>
<!-- FAQs Start -->



<!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="container mt-5">
                <h2 class="mb-3">Mavzu bo'yicha izlash</h2>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Iqtisodiyot tarmoqlari</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Mehnat bozori</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Migratsiya</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Kasblar</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Ishga joylashish</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Hududiy</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Ko`nikmalar</h4></button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-custom" type="button"><h4>Trening</h4></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Team End -->


<!-- Sahifa start -->
<div class="container-fluid bg-white py-5">
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
