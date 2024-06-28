@extends('layouts.appclient')
@section('content')
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <h2 class="mb-4">Maqolalar</h2>
            <div class="row row-equal">
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/7.png')}}" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">12-iyun, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola')}}">To'rt kunlik ish haftasiga o'tish: xayolmi yoki haqiqat?</a></h5>
                            <p class="text-muted">Bugungi kunda milliy iqtisodiyotni harakatlantiruvchi eng muhim omillardan biri bu mehnat va hayotiy qadriyatlarni muvaffaqiyatli ravishda uyg‘unlashtirishdir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/8.png')}}" style="height: 49.2%;" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">12-fevral, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_2')}}">Yaqin kelajakda qaysi kasb egalariga talab kuchayadi?</a></h5>
                            <p class="text-muted">PMTI ekspertlari Oʻzbekiston mehnat bozorida kadrlarga boʻlgan talab qanday ekanligini aniqladi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">30-dekabr, 2021</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_3')}}">O'zbekiston mehnat bozorida tarmoqlar va mutaxassisliklar bo'yicha talabning shakllanish tahlili</a></h5>
                            <p class="text-muted">O‘zbekiston mehnat bozorini tahlil qilganda, mamlakatda ishchi kuchi taklifi har yili asosan kasb-hunar kollejlari va oliy o‘quv yurtlari bitiruvchilari hisobidan shakllanishini qayd etish mumkin. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row row-equal">
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/7.png')}}" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">28-may, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_4')}}">Ta'lim darajasi ish haqiga qanday ta'sir qiladi?</a></h5>
                            <p class="text-muted">Yuqori va past malakali ish o‘rinlarida mehnatga to‘lanadigan  ish haqi o‘rtasidagi tafovut bilan birga, xodimlar malakasi, ko‘nikmasi hamda eng past ta’lim darajasiga qo‘yiladigan talablar ham ortib bormoqda</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/8.png')}}" style="height: 51%;" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">25-aprel, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_5')}}">O'zbekistonlik mehnat muhojirlari uchun yangi imkoniyatlar</a></h5>
                            <p class="text-muted">PMTI ekspertlari muhojirlar oqimiga ta’sir qiluvchi tashqi omillarni inobatga olgan holda tashqi mehnat muhojirligi imkoniyatlarini baholash bo‘yicha tahlil o‘tkazdi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">30-sentabr, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_6')}}">Malakali bo'lish – bugungi kun talabi</a></h5>
                            <p class="text-muted">O‘zbekistonda ta’lim sohasi, xususan, maktab ta’limi tizimida keng ko‘lamli islohotlarni amalga oshirish rejalashtirilmoqda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row row-equal">
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/7.png')}}" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">25-noyabr, 2022</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_7')}}">O'zbek ayolining martabaga erishishi osonmi?</a></h5>
                            <p class="text-muted">Bugungi kunda xotin-qizlar bandligini ta’minlash, barcha sohalarda gender tengligiga erishish, mehnat bozorida kamsitishlarga barham berish va ish haqi tengligini ta’minlash butun dunyoda dolzarb muammolardan biri hisoblanadi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-equal">
                    <div class="card card-custom">
                        <img src="{{asset('assets/img/8.png')}}" style="height: 51.1%;" class="card-img-top" alt="...">
                        <div class="card-body card-body-custom">
                            <div class="news-header">
                                <h6 class="text-muted mb-0 news-title">Maqolalar</h6>
                                <span class="text-muted">15-fevral, 2023</span>
                            </div>
                            <h5 class="card-text"><a style="text-decoration: none;color: #6c757d" href="{{url('/maqola_8')}}">Mehnat bozorining hududiy indeksi: hududlarda vaziyat qanday?</a></h5>
                            <p class="text-muted">O‘zbekiston hududlarining ijtimoiy-iqtisodiy holati bir-biridan keskin farq qiladi va o‘z navbatida mehnat bozoridagi jarayonlarga ta’sir etadi. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->
    <div class="container-fluid py-4">

    </div>
    <!-- FAQs Start -->

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
