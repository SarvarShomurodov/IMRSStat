@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Mehnat bozori</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Navoiy viloyati</option>
                      <option value="{{url('/statistic/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/statistic/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/statistic/fargona')}}">Farg`ona viloyati</option>
                      <option value="{{url('/statistic/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/namangan')}}">Namangan viloyati</option>
                      <option value="{{url('/statistic/jizzah')}}">Jizzah viloyati</option>
                      <option value="{{url('/statistic/surxandaryo')}}">Surxandaryo viloyati</option>
                      <option value="{{url('/statistic/sirdaryo')}}">Sirdaryo viloyati</option>
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
                        <div class="col-md-2"><h4>566,9ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.9%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                    <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>410,1ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-0.1%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                    <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>8%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-9.1pp  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                    <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>73,6%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-1.7pp  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                    <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>114,3ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i style="color: rgb(0, 0, 0);" class="bi bi-circle"></i></div>
                            <b>0.0%  (1-y)</b>
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
                        name: 'Navoiy',
                        data: [502.3, 513.7, 520, 526.2, 531.2, 535.6, 540.1, 544.1, 549.1, 553.4, 553.1, 561.9, 566.9]
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
                        name: 'Navoiy',
                        data: [407.9, 413.4, 410.1, 418.5, 419.6, 420.6, 421.2, 421.8, 422.4, 407.7, 412.7, 399.4, 410.4, 410.1]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '239.1ming';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '171ming';
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
                        name: 'Navoiy',
                        data: [4.9, 4.7, 4.9, 5.2, 5.2, 5, 5, 5.2, 8.7, 8.5, 9.4, 8.8, 8]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '3.3%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '13.9%';
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
                        name: 'Navoiy',
                        data: [79.2, 78.3, 78.5, 78.1, 77.7, 77.1, 76.7, 76.4, 75.8, 75.9, 73.8, 74.9, 73.6]
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
                        name: 'Navoiy',
                        data: [102.6, 108, 124.8, 104.1, 104.4, 99.4, 96.7, 99.3, 101.5, 105.7, 104.9, 114.3, 114.3]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '3.3M';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '3.3M';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
</script>
@endsection
