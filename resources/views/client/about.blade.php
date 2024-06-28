@extends('layouts.appclient')
@section('content')
    <div style="margin-top: 70px;" class="all bg-white pt-5 pl-5 pb-2">
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="about-img">
                            <img class="img-fluid" src="{{asset('assets/img/2.png')}}">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">Biz sizning kelajagingizni qurishda yordam beramiz!</h1>
                        <p class="mb-4">Bizning maqsadimiz - xalqimizning to'liq malakali salohiyatini
                            ro'yobga chiqarish, natijada ishchi kuchi ishtiroki,
                            samaradorlik, ish haqi va tenglikni oshirish.</p>
                        <p class="mb-4">Rasmiy statistik ma’lumotlarga ko‘ra, 2024-yilning 1-yanvar holatiga ko‘ra, O‘zbekistonda jami band aholining 39,0 foizi...</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Batafsil</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- About End -->
    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->
@endsection
