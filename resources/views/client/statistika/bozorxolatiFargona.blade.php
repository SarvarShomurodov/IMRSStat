@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Mehnat bozori</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Farg`ona viloyati</option>
                      <option value="{{url('/statistic/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/statistic/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/statistic/jizzah')}}">Jizzah viloyati</option>
                      <option value="{{url('/statistic/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/navoiy')}}">Navoiy viloyati</option>
                      <option value="{{url('/statistic/namangan')}}">Namangan viloyati</option>
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
                        <div class="col-md-2"><h4>1,81M</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.6%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                    <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>1,34M</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+1.9%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                    <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>9,2%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-8.0%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                    <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>73,9%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.4%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                    <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>435,1ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-1.9%  (1-y)</b>
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
                        name: 'Farg`ona viloyati',
                        data: [1815.5, 1887.6, 1924.5, 1940, 1961.9, 1988.1, 2007.3, 2022, 2034.8, 2046.1, 2064, 2077.2, 2089.1]
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
                        name: 'Farg`ona viloyati',
                        data: [1340.4, 1367.6, 1511.7, 1398.8, 1431.1, 1462.8, 1485.3, 1508.3, 1525.7, 1451, 1492.6, 1448.6, 1483.3, 1511.7]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '861.1ming';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '650.6ming';
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
                        name: 'Farg`ona viloyati',
                        data: [5.7, 5, 5, 4.8, 5.4, 5.4, 5.5, 6.4, 9.7, 9.3, 10.9, 10, 9.2]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '13.6%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.7%';
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
                        name: 'Farg`ona viloyati',
                        data: [73.6, 71.5, 71.5, 71.8, 72.7, 73.1, 73.6, 74.7, 73.1, 74.5, 73, 73.6, 73.9]
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
                        name: 'Farg`ona viloyati',
                        data: [403, 456.1, 432.2, 459.4, 443.5, 423.8, 425.6, 419.8, 400.6, 436.5, 407.3, 443.6, 435.1]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '5.4M';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.4M';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelector('.form-select').addEventListener('change', function() {
            if (this.value === "4") { // Assuming 'Two' has the value '2'
                window.location.href = '/statistic/index'; // Redirect to about.html
            }
        });
    });
</script>
@endsection
