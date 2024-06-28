@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Mehnat bozori</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Sirdaryo viloyati</option>
                      <option value="{{url('/statistic/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/statistic/fargona')}}">Farg`ona viloyati</option>
                      <option value="{{url('/statistic/navoiy')}}">Navoiy viloyati</option>
                      <option value="{{url('/statistic/namangan')}}">Namangan viloyati</option>
                      <option value="{{url('/statistic/jizzah')}}">Jizzah viloyati</option>
                      <option value="{{url('/statistic/surxandaryo')}}">Surxandaryo viloyati</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/statistic/toshkent')}}">Toshkent viloyati</option>
                      <option value="{{url('/statistic/buxoro')}}">Buxoro viloyati</option>
                      <option value="{{url('/statistic/xorazm')}}">Xorazm viloyati</option>
                      <option value="{{url('/statistic/toshkentsh')}}">Toshkent shaxri</option>
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                </form>
                <div class="container mt-5">
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('population')">
                    <h6 style="text-align: left;">Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>484,4ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-0.5%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                    <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>335ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.3%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                    <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>9,3%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-8.8pp  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                    <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>70,6%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-1.8pp  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                    <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>117,3ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>5.1%  (1-y)</b>
                        </div>
                    </div>
                </button>
            </div>
        </div>
        <div class="col-md-5 all-div2 ml-3 p-3">
            <div id="container" style="width:100%; height:500px;"></div>
            <div class="">
                <div class="row p-5">
                    <div class="col-md-6">
                        <button style="text-align: left;" class="btn bg-light w-100">
                            <p id="first"></p>
                            <h4 id="countMale"></h4>
                            <p id="prasentMale"></p>
                        </button>

                    </div>
                    <div class="col-md-6">
                        <button style="text-align: left;" class="btn bg-light w-100">
                            <p id="second"></p>
                            <h4 id="countFamale"></h4>
                            <p id="prasentFamale"></p>
                        </button>

                    </div>
                </div>
            </div>
        </div>
        <script>
    var chart = Highcharts.chart('container', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni(O`zbekiston)'
            },
            xAxis: {
                categories: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022']
            },
            yAxis: {
                title: {
                    text: 'Million kishi'
                },
                labels: {
                    formatter: function () {
                        return this.value + '';
                    }
                }
            },
            series: [{
                name: 'O`zbekiston',
                data: [16.534, 17.170, 17.452, 17.699, 17.938, 18.168, 18.372, 18.549, 18.712, 18.858, 19.076, 19.238, 19.939]
            }]
        });

        // Function to update chart
        function updateChart(type) {
            if (type === 'population') {
                chart.update({
                    title: { text: 'Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni' },
                    yAxis: {
                        title: {
                            text: 'Million kishi'
                        }
                    },
                    series: [{
                        name: 'Sirdaryo viloyati',
                        data: [418.5, 430.4, 439.7, 446.6, 454.6, 461.2, 467, 472.2, 477.6, 482, 482.5, 486.7, 484.4]
                    }]
                });
                document.getElementById('first').innerHTML = '';
                document.getElementById('second').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '';
                document.getElementById('prasentFamale').innerHTML = '';
            } else if (type === 'employment') {
                chart.update({
                    title: { text: 'Iqtisodiyotda bandlar soni' },
                    yAxis: {
                        title: {
                            text: 'Ming kishi'
                        }
                    },
                    series: [{
                        name: 'Sirdaryo viloyati',
                        data: [319.9, 327.5, 335, 334.8, 342.3, 349.6, 350.9, 352.4, 353.1, 354.2, 350.1, 332.2, 334.1, 335]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '198.1ming';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '136.9ming';
                document.getElementById('prasentFamale').innerHTML = '';
            }else if (type === 'unemployment') {
                chart.update({
                    title: { text: 'Ishsizlik darajasi' },
                    yAxis: {
                        title: {
                            text: 'Foiz (%)'
                        }
                    },
                    series: [{
                        name: 'Sirdaryo viloyati',
                        data: [4.5, 4.3, 4, 4.3, 4.6, 4.9, 4.4, 5.1, 9.6, 9.3, 11, 10.2, 9.3]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '14%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.8%';
                document.getElementById('prasentFamale').innerHTML = '';
            }else if (type === 'faollik') {
                chart.update({
                    title: { text: 'Aholining iqtisodiy faollik darajasi' },
                    yAxis: {
                        title: {
                            text: 'Foiz (%)'
                        }
                    },
                    series: [{
                        name: 'Sirdaryo viloyati',
                        data: [75.4, 75.3, 75.2, 75.7, 76.5, 75.9, 75, 74.9, 77.7, 76.1, 72.8, 71.9, 70.6]
                    }]
                });
                document.getElementById('first').innerHTML = '';
                document.getElementById('second').innerHTML = '';
                document.getElementById('countMale').innerHTML = '';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '';
                document.getElementById('prasentFamale').innerHTML = '';
            }else if (type === 'nofaollik') {
                chart.update({
                    title: { text: 'Iqtisodiy nofaol aholi soni' },
                    yAxis: {
                        title: {
                            text: 'Ming kishi'
                        }
                    },
                    series: [{
                        name: 'Sirdaryo viloyati',
                        data: [85.7, 90.6, 117.9, 93.1, 91.2, 90.3, 94.9, 101.7, 103.3, 89.8, 98.6, 111.6, 117.3]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '5.8M';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.8M';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
</script>
@endsection
