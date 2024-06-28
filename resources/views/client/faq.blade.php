@extends('layouts.appclient')
@section('content')
    <!-- Main Start -->
    <div style="padding-top: 70px;">
        <div class="p-5">
            <h3 style="color: #2f005f;" class="pt-5 pb-5">Talab yuqori bo`lgan kasblar</h3>
            <hr class="mb-4">
            <p class="pb-3">O'zbekiston mehnat bozorida talab yuqori va talab past bo'lgan kasblarni aniqlash maqsadida ish beruvchilar orasida so'rov o'tkazildi. So'rov natijalariga ko'ra  eng yuqori talab marketologlar, reklama, jamoatchilik bilan aloqalar, savdo bo‘yicha mutaxassislar, IT-administrator va dasturchilar, buxgalterlar, chakana va ulgurji savdo hamda onlayn sotuvchilar, xodimlar faoliyat yuritmoqda. Xodimlar, malakasiz ishchilar (farroshlar, bog‘bonlar, haydovchilar), huquqshunoslar, o‘qituvchilar, menejerlar, muhandislar, iqtisodchilar, moddiy-texnik ta’minot mutaxassislari va agronomlarga talab yuqori ekanligi aniqlandi.
                Temir yo'l mexaniklari va ta'mirchilari, tibbiy asbob-uskunalar bo'yicha mutaxassislar, samolyot mexaniklari va ta'mirchilariga talabning pastligini ko'rsatadi. Ta’kidlash joizki, hozirda kon-metallurgiya korxonalarida telefon operatorlari, call-markaz xodimlari, kon-metallurgiya texniklari, ustalar, ishlab chiqarish operatorlari, mashinistlar, uskunalar operatorlariga talab past ekanligi aniqlandi.</p>
            <div class="row w-100">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Kasb bo'yicha qidirish" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-1">
                    <button type="button" class="custom-btn-outline-success custom-ml"><i class="bi bi-funnel-fill"></i> Filtr</button>
                </div>
                <div style="width: 10%" class="col-md-2">
                    <form action="{{ route('faqs.index') }}" method="GET">
                        <select name="sortOrder" class="form-select" onchange="this.form.submit()">
                            <option value="asc" {{ request('sortOrder') == 'asc' ? 'selected' : '' }}>Saralash A-Z</option>
                            <option value="desc" {{ request('sortOrder') == 'desc' ? 'selected' : '' }}>Saralash Z-A</option>
                        </select>
                    </form>
                </div>
            </div>
            <div style="border-radius: 10px;" class="report-data bg-light p-3 mb-2">
                <div class="row" style="align-items: center;">
                    <div class="col-md-10">Defitsit</div>
                    <div class="col-md-2"><button type="button" class="custom-btn-outline-success2 custom-ml" style="border: 1px solid">Yordam</button></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div style="display: flex; align-items: center;">
                            <abbr class="add_abbr" title="">S</abbr>
                            <div style="color: #f4f7fe">...</div>
                            <p style="margin: 0;">Defitsit</p>
                        </div>
                    </div>
{{--                    <div class="col-md-2">--}}
{{--                        <div style="display: flex; align-items: center;">--}}
{{--                            <button style="border: 1px solid #f0a269; color: #252525; background-color: #ffe7d7; border-radius: 15px; margin-right: 10px;" class="btn defitsit"><b>R</b></button>--}}
{{--                            <p style="margin: 0;">Hududiy defitsit</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-md-2">
                        <div style="display: flex; align-items: center;">
                            <abbr class="add_abbr2" title="">NS</abbr>
                            <div style="color: #f4f7fe">...</div>
                            <p style="margin: 0;"> Defitsit yo`q</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="mt-0 mb-2">Qisqartmalar</div>
                    <div class="col-md-2">
                        <p><b>O`R-O`zbekiston Respublikasi</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>QR-Qoraqolpoqiston Respublikasi</b></p>
                    </div>
                    <div class="col-md-2"> <p><b>AN-Andijon viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>BX-Buxoro viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>JZ-Jizzax viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>QD-Qashqadaryo viloyati</b></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2"> <p><b>NY-Navoiy viloyati</b></p></div>
                    <div class="col-md-2">
                        <p><b>NM-Namangan viloyati</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>SM-Samarqand viloyati</b></p>
                    </div>
                    <div class="col-md-2"> <p><b>SX-Surxandaryo viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>SR-Sirdaryo viloyati</b></p></div>
                    <div class="col-md-2"> <p><b>TV-Toshkent viloyati</b></p></div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p><b>FA-Farg`ona viloyati</b></p>
                    </div>
                    <div class="col-md-2">
                        <p><b>XR-Xorazm viloyati</b></p>
                    </div>
                    <div class="col-md-4"> <p><b>TSH-Toshkent shaxri</b></p></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
    <div class="p-5 pt-0">
        <div class="report-data mb-2 mt-3">
        <table class="table pl-3">
            <thead>
            <tr>
                <th scope="col">Kasblar</th>
                <th scope="col"></th>
                <th scope="col">O`R</th>
                <th scope="col">QR</th>
                <th scope="col">AN</th>
                <th scope="col">BX</th>
                <th scope="col">JZ</th>
                <th scope="col">QD</th>
                <th scope="col">NY</th>
                <th scope="col">NM</th>
                <th scope="col">SM</th>
                <th scope="col">SX</th>
                <th scope="col">SR</th>
                <th scope="col">TV</th>
                <th scope="col">FA</th>
                <th scope="col">XR</th>
                <th scope="col">TSH</th>
            </tr>
            </thead>
            <tbody>
            @foreach($faqs as $faq)
            <tr>
                <th scope="row">
                    {{$faq->kasblar}}
                </th>
                <td>
                </td>
                <td>
                    @if($faq->OR == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->QR == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->AN == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->BX == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->JZ == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->QD == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->NY == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->NM == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->SM == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->SX == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->SR == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->TV == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->FA == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->XR == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
                <td>
                    @if($faq->TSH == 1)
                        <abbr class="add_abbr" title="">S</abbr>
                    @else
                        <abbr class="add_abbr2" title="">NS</abbr>
                    @endif
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
            {!! $faqs->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
        <button type="button" class="custom-btn-outline-success custom-ml mb-5" style="border: 1px solid #6f42c1"><i class="bi bi-download"></i> Yuklash</button>
    </div>
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
    <script>
        document.querySelector('.form-select').addEventListener('change', function() {
            fetch(`/occupations?sortOrder=${this.value}`)
                .then(response => response.json())
                .then(data => {
                    const container = document.body;
                    container.innerHTML = ''; // Clear previous data
                    data.forEach(item => {
                        const div = document.createElement('div');
                        div.textContent = item.name;
                        container.appendChild(div);
                    });
                })
                .catch(error => console.error('Error:', error));
        });
    </script>
@endsection
