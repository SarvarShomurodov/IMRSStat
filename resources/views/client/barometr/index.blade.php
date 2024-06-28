@extends('layouts.appclient')
@section('content')
    <style>
        #regionSelector{

        }
        .marrr{
            margin-left: 40%;
        }
        .region{
            width: 31%;
            font-size: 90%
        }
        @media (max-width: 1218px) {
        .region {
                width: 50%;
            }
        }
        @media (max-width: 768px) {
            .region {
                width: 67%;
            }
            .marrr{
                margin-left: 30%;
            }
        }
    </style>
    <div style="padding-top: 90px;">

    </div>
    <div class="marrr" style="">
        <select id="regionSelector" class="region form-select mb-3 mt-5 ml-4" aria-label="Default select example" name="carSelect" >
            <option value="uzbekistan">O`zbekiston Respublikasi</option>
            <option value="karakalpakistan">Qoraqolpoqiston Respublikasi</option>
            <option value="andijan">Andijon viloyati</option>
            <option value="samarkand">Samarqand viloyati</option>
            <option value="bukhara">Buxoro viloyati</option>
            <option value="jizzah">Jizzah viloyati</option>
            <option value="kashkadarya">Qashqadaryo viloyati</option>
            <option value="navoiy">Navoiy viloyati</option>
            <option value="namangan">Namangan viloyati</option>
            <option value="surkhandaryo">Surxandaryo viloyati</option>
            <option value="syrdaryo">Sirdaryo viloyati</option>
            <option value="tashkent">Toshkent viloyati</option>
            <option value="fergona">Farg`ona viloyati</option>
            <option value="khorazm">Xorazm viloyati</option>
            <option value="tashkentsh">Toshkent shaxri</option>
        </select>
    </div>
    <div class="mb-3 p-4 h-100">
        <div id="container" style="height: 90%; width: 80%; margin: auto;">

        </div>
    </div>
    <div style="padding-top: 10px;"></div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const regionData = {
                uzbekistan: {
                    title: 'O`zbekiston Respublikasi',
                    categories: [
                        'AKT sohalarida tizim ma\'murlari va mutaxassislari, dasturchilar',
                        'Marketologlar, reklama, jamoat bilan aloqa, savdo boʻyicha mutaxassislar',
                        'Buxgalterlar',
                        'Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar',
                        'Kadrlar boʻyicha xodimlar',
                        'Advokatlar, prokurorlar va huquqshunoslar',
                        'Bogʻbonlar, bogʻbonlar va oʻsimlikshunoslar',
                        'ingliz tili oʻqituvchisi',
                        'Haydovchilar',
                        'Farroshlar',
                        'Iqtisodiyot, moliya, sugʻurta, bank, menejment va marketing boʻyicha oʻrta darajadagi mutaxassislar',
                        'Moliyachilar va bankirlar',
                        'Rahbarlar va ularning oʻrinbosarlarining yordamchilari',
                        'Iqtisodchilar',
                        'Maktablar, kollejlar va oʻquv markazlarida matematika, algebra, geometriya oʻqituvchisi',
                        'Qishloq xoʻjaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta\'mirlovchi',
                        'Informatika, IT, dasturlash va elektronika boʻyicha universitet oʻqituvchisi',
                        'Tikuvchi, kashtachi va toʻquvchi',
                        'Agronomlar',
                        'Oshpazlar'
                    ],
                    data: [921, 808, 344, 242, 187, 126, 124, 106, 106, 99, 93, 78, 76, 72, 71, 68, 64, 60, 54, 53]
                },
                karakalpakistan: {
                    "title": "Qoraqalpog`iston Respublikasida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Buxgalterlar",
                        "Kadrlar bo'yicha xodimlar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Moliyachilar va bankirlar",
                        "Iqtisodchilar",
                        "Musiqachilar, qo'shiqchilar va bastakorlar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Moliya tahlilchilari",
                        "Ingliz tili o'qituvchisi",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Informatika, IT, dasturlash va elektronika bo'yicha universitet o'qituvchisi",
                        "Farroshlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Agronomlar",
                        "Rus tili va adabiyoti o'qituvchisi",
                        "Payvandlovchilar va gaz to'sarlari"
                    ],
                    "data": [
                        99, 56, 24, 23, 21, 20, 17, 16, 16, 14, 13, 9, 9, 9, 8, 6, 6, 5, 4, 4
                    ]
                }
                ,
                andijan: {
                    "title": "Andijon viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Kadrlar bo'yicha xodimlar",
                        "Farroshlar",
                        "Soqchilar va bino qo'riqchilari",
                        "Kompyuter operatorlari",
                        "Moliyachilar va bankirlar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Boshqa turdagi operatorlar",
                        "Haydovchilar",
                        "Agronomlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Buxgalterlar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Iqtisodchilar",
                        "Oziq-ovqat mahsulotlarini qayta ishlash korxonalarida uskunalar operatorlari",
                        "Nevropatolog, psixiatr",
                        "Boshqa turdagi shifokorlar",
                        "Nemis tili o'qituvchisi"
                    ],
                    "data": [
                        35, 12, 6, 5, 5, 4, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 1, 1
                    ]
                },
                bukhara: {
                    "title": "Buxoro viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Buxgalterlar",
                        "Kadrlar bo'yicha xodimlar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Haydovchilar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Ofitsiantlar",
                        "Farroshlar",
                        "Musiqachilar, qo'shiqchilar va bastakorlar",
                        "Moliyachilar va bankirlar",
                        "Oshpazlar",
                        "Agronomlar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Robototexnika va elektronika bo'yicha mutaxassislar",
                        "Mexanik muhandislar, dizayn muhandislari, texnologik muhandislar",
                        "Iqtisodchilar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar"
                    ],
                    "data": [
                        76, 62, 25, 15, 10, 10, 8, 8, 8, 6, 6, 6, 5, 5, 4, 4, 3, 3, 3, 3
                    ]
                },
                jizzah: {
                    "title": "Jizzax viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Buxgalterlar",
                        "Ingliz tili o'qituvchisi",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Tikuvchi, kashtachi va to'quvchi",
                        "Kadrlar bo'yicha xodimlar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Haydovchilar",
                        "Agronomlar",
                        "Mexanik muhandislar, dizayn muhandislari, texnologik muhandislar",
                        "Informatika, IT, dasturlash va elektronika bo'yicha universitet o'qituvchisi",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Iqtisodchilar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "G'isht quyuvchi",
                        "Kimyo o'qituvchisi",
                        "Boshqa turdagi o'qituvchilar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Shaxmat o'qituvchisi"
                    ],
                    "data": [
                        67, 48, 16, 13, 12, 10, 10, 10, 7, 6, 6, 6, 6, 4, 4, 4, 3, 3, 3, 3
                    ]
                },
                navoiy: {
                    "title": "Navoiy viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Buxgalterlar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Haydovchilar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Tikuvchi, kashtachi va to'quvchi",
                        "Iqtisodchilar",
                        "Moliyachilar va bankirlar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Kadrlar bo'yicha xodimlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Agronomlar",
                        "Oshpazlar",
                        "Farroshlar",
                        "Android ilovalari dasturchilari",
                        "Boshqa turdagi dasturchilar",
                        "Biologlar, botaniklar, zoologlar",
                        "Ofitsiantlar",
                        "G'isht quyuvchi"
                    ],
                    "data": [
                        72, 34, 34, 14, 10, 9, 8, 8, 7, 6, 5, 4, 4, 4, 4, 3, 3, 3, 3, 3
                    ]
                },
                namangan: {
                    "title": "Namangan viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Kadrlar bo'yicha xodimlar",
                        "Musiqachilar, qo'shiqchilar va bastakorlar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Ingliz tili o'qituvchisi",
                        "Tikuvchi, kashtachi va to'quvchi",
                        "Buxgalterlar",
                        "Raqqoslar va xoreograflar",
                        "Umumiy amaliyot shifokorlari (umumiy amaliyot shifokori)",
                        "Kardiolog",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Oshpazlar",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Aktyorlar",
                        "Rassomlar",
                        "Farroshlar",
                        "Endokrinolog",
                        "Falsafa, psixologik, sotsiologik, tarixiy va siyosiy fanlar bo'yicha universitet o'qituvchisi"
                    ],
                    "data": [
                        75, 24, 19, 16, 14, 13, 12, 10, 8, 6, 6, 6, 6, 5, 5, 5, 5, 4, 4, 4
                    ]
                },
                samarkand: {
                    "title": "Samarqand viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Mexanik muhandislar, dizayn muhandislari, texnologik muhandislar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Kadrlar bo'yicha xodimlar",
                        "Tikuvchi, kashtachi va to'quvchi",
                        "Biologlar, botaniklar, zoologlar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Ingliz tili o'qituvchisi",
                        "Buxgalterlar",
                        "Oshpazlar",
                        "Rus tili va adabiyoti o'qituvchisi",
                        "Nevropatolog, psixiatr",
                        "Engil sanoat korxonalarida uskunalar operatorlari",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Ofitsiantlar",
                        "Informatika, IT, dasturlash va elektronika bo'yicha universitet o'qituvchisi",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar"
                    ],
                    "data": [
                        36, 31, 19, 16, 9, 8, 7, 6, 6, 6, 6, 6, 4, 4, 4, 4, 3, 3, 3, 3
                    ]
                },
                syrdaryo: {
                    "title": "Sirdaryo viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Buxgalterlar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Kadrlar bo'yicha xodimlar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Agronomlar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Farroshlar",
                        "Qishloq xo'jaligida usta",
                        "Oshpazlar",
                        "Baliq etishtiruvchilar",
                        "Moliyachilar va bankirlar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Yoqilg'i quyish shoxobchalarida ishlaydiganlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Soqchilar va bino qo'riqchilari",
                        "Haydovchilar"
                    ],
                    "data": [
                        90, 48, 41, 27, 18, 14, 10, 8, 7, 6, 6, 5, 5, 4, 4, 4, 4, 4, 3, 3
                    ]
                },
                surkhandaryo: {
                    "title": "Surxandaryo viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Buxgalterlar",
                        "Farroshlar",
                        "Kadrlar bo'yicha xodimlar",
                        "Haydovchilar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Biologlar, botaniklar, zoologlar",
                        "Moliyachilar va bankirlar",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Agronomlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Nemis tili o'qituvchisi",
                        "Nonvoylar, qandolatchilar va shakarlamalar",
                        "Ofitsiantlar"
                    ],
                    "data": [
                        140, 110, 49, 49, 25, 21, 20, 20, 16, 12, 12, 10, 9, 9, 9, 8, 8, 6, 6, 6
                    ]
                },
                tashkent: {
                    "title": "Toshkent viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Maktablar, kollejlar va oʻquv markazlarida matematika, algebra, geometriya oʻqituvchisi",
                        "Rus tili va adabiyoti oʻqituvchisi",
                        "Ingliz tili oʻqituvchisi",
                        "AKT sohalarida tizim maʼmurlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo boʻyicha mutaxassislar",
                        "Kadrlar boʻyicha xodimlar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Maktablar, kollejlar va oʻquv markazlarida fizika va astronomiya oʻqituvchisi",
                        "Rahbarlar va ularning oʻrinbosarlarining yordamchilari (ofis menejerlari)",
                        "Matematiklar",
                        "Farroshlar",
                        "Fransuz tili oʻqituvchisi",
                        "Haydovchilar",
                        "Ofitsiantlar",
                        "Oʻzbek tili va adabiyoti oʻqituvchisi",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Boshqa turdagi oʻqituvchilar",
                        "Nonvoylar, qandolatchilar va shakarlamalar",
                        "Kimyo oʻqituvchisi",
                        "Maktablar, kollejlar va oʻquv markazlarida rassomchilik oʻqituvchisi"
                    ],
                    "data": [
                        24, 10, 7, 7, 4, 4, 4, 3, 3, 4, 4, 2, 2, 2, 2, 2, 2, 2, 2, 1
                    ]
                },
                tashkentsh: {
                    "title": "Toshkent shahrida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Buxgalterlar",
                        "Haydovchilar",
                        "Kadrlar bo'yicha xodimlar",
                        "Mexanik muhandislar, dizayn muhandislari, texnologik muhandislar",
                        "Tikuvchi, kashtachi va to'quvchi",
                        "Tom yopuvchilar",
                        "Betonchilar",
                        "Farroshlar",
                        "Duradgorlar",
                        "Oliy matematika va matematikalashtirilgan fanlar bo'yicha universitet o'qituvchisi",
                        "Ishlab chiqarish sanoatida usta (ustalar)",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Mexanik texniklar",
                        "Informatika, IT, dasturlash va elektronika bo'yicha universitet o'qituvchisi",
                        "Kimyoviy ishlab chiqarish bo'yicha mutaxassislar",
                        "Engil sanoat korxonalarida uskunalar operatorlari",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)"
                    ],
                    "data": [
                        88, 44, 28, 24, 15, 13, 12, 10, 8, 8, 7, 6, 6, 6, 6, 6, 6, 6, 5, 4
                    ]
                },
                fergona: {
                    "title": "Farg'ona viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Buxgalterlar",
                        "Haydovchilar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Farroshlar",
                        "Biologlar, botaniklar, zoologlar",
                        "Oshpazlar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Nonvoylar, qandolatchilar va shakarlamalar",
                        "Mexanik muhandislar, dizayn muhandislari, texnologik muhandislar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Qishloq xo'jaligi va sanoat uskunalarini, shu jumladan elektron uskunalarni mexanik va ta'mirlovchi",
                        "Ofitsiantlar",
                        "Baliq etishtiruvchilar",
                        "Qishloq xo'jaligida usta",
                        "Poyafzalchilar",
                        "Agronomlar",
                        "Tikuvchi, kashtachi va to'quvchi"
                    ],
                    "data": [
                        120, 96, 72, 36, 17, 16, 13, 12, 12, 12, 12, 9, 8, 8, 7, 6, 6, 6, 6, 6
                    ]
                },
                khorazm: {
                    "title": "Xorazm viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Ingliz tili o'qituvchisi",
                        "Informatika, IT, dasturlash va elektronika bo'yicha universitet o'qituvchisi",
                        "Kadrlar bo'yicha xodimlar",
                        "Rahbarlar va ularning o'rinbosarlarining yordamchilari (ofis menejerlari)",
                        "Moliyachilar va bankirlar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Iqtisodiyot, moliya, sug'urta, bank, menejment va marketing bo'yicha o'rta darajadagi mutaxassislar, shu jumladan kassirlar",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Iqtisodchilar",
                        "rus tili va adabiyoti o'qituvchisi",
                        "Nevropatolog, psixiatr",
                        "Buxgalterlar",
                        "Moliya tahlilchilari",
                        "Farroshlar",
                        "Maktablar, kollejlar va o'quv markazlarida matematika, algebra, geometriya o'qituvchisi",
                        "Ginekolog",
                        "Endokrinolog",
                        "Pediatr"
                    ],
                    "data": [
                        214, 76, 41, 28, 26, 23, 22, 22, 21, 20, 20, 18, 18, 15, 14, 13, 13, 9, 9, 8
                    ]
                },
                kashkadarya: {
                    "title": "Qashqadaryo viloyatida top 20 o'sishi kutilayotgan kasblar",
                    "categories": [
                        "Chakana va ulgurji savdo nuqtalarida maoshli sotuvchilar, onlayn sotuvchilar",
                        "Buxgalterlar",
                        "Oshpazlar",
                        "Bog'bonlar, bog'bonlar va o'simlikshunoslar",
                        "Marketologlar, reklama, jamoat bilan aloqa, savdo bo'yicha mutaxassislar",
                        "Kadrlar bo'yicha xodimlar",
                        "AKT sohalarida tizim ma'murlari va mutaxassislari, dasturchilar",
                        "Agronomlar",
                        "Jurnalistlar",
                        "Ishlab chiqarish sanoatida usta",
                        "Iqtisodchilar",
                        "Traktor haydovchilari, kombaynchilar va buldozer haydovchilari",
                        "Advokatlar, prokurorlar va huquqshunoslar",
                        "Tarjimonlar",
                        "Matematiklar",
                        "Moliya tahlilchilari",
                        "Ofitsiantlar",
                        "Tish shifokori",
                        "Mebel ishlab chiqaruvchilar",
                        "Qishloq xo'jaligida usta"
                    ],
                    "data": [
                        20, 14, 9, 8, 8, 8, 6, 6, 5, 5, 4, 4, 4, 4, 4, 4, 3, 3, 3, 2
                    ]
                },

            };
            const defaultRegion = 'uzbekistan';
            const chart = Highcharts.chart('container', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: regionData[defaultRegion].title
                },
                xAxis: {
                    categories: regionData[defaultRegion].categories
                },
                yAxis: {
                    title: {
                        text: ''
                    }
                },
                series: [{
                    name: 'Qiymati',
                    data: regionData[defaultRegion].data
                }]
            });

            document.getElementById('regionSelector').addEventListener('change', function () {
                const selectedRegion = this.value;
                chart.xAxis[0].setCategories(regionData[selectedRegion].categories);
                chart.series[0].update({
                    data: regionData[selectedRegion].data
                });
                chart.setTitle({
                    text: regionData[selectedRegion].title
                });
            });
        });

    </script>
@endsection
