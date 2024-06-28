@extends('layouts.bozorxolatiapp')
@section('content')
            <div class="col-md-4 all-div2 mb-3 p-4 h-100">
                <h4>Mehnat bozori</h4>
                <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/statistic/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/statistic/buxoro')}}">Buxoro viloyati</option>
                      <option value="{{url('/statistic/jizzah')}}">Jizzah viloyati</option>
                      <option value="{{url('/statistic/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/navoiy')}}">Navoiy viloyati</option>
                      <option value="{{url('/statistic/namangan')}}">Namangan viloyati</option>
                      <option value="{{url('/statistic/surxandaryo')}}">Surxandaryo viloyati</option>
                      <option value="{{url('/statistic/sirdaryo')}}">Sirdaryo viloyati</option>
                      <option value="{{url('/statistic/toshkent')}}">Toshkent viloyati</option>
                      <option value="{{url('/statistic/fargona')}}">Farg`ona viloyati</option>
                      <option value="{{url('/statistic/xorazm')}}">Xorazm viloyati</option>
                      <option value="{{url('/statistic/toshkentsh')}}">Toshkent shaxri</option>
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                </form>
                <div class="container mt-5">
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('population')">
                        <h6 style="text-align: left;">Mehnatga layoqatli yoshdagi mehnatga layoqatli aholi soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>19,9M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                                <b>+0.8%  (1-y)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                        <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>13,7M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                                <b>+1.2%  (1-y)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                        <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>8,9%</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-7.3pp  (1-y)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                        <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>73,7%</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-0.5pp  (1-y)</b>
                            </div>
                        </div>
                    </button>
                    <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                        <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                        <div class="row">
                            <div class="col-md-2"><h4>4,35M</h4></div>
                            <div class="col-md-10">
                                <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                                <b>-0.2%  (1-y)</b>
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
                            text: 'Milion kishi'
                        }
                    },
                    series: [{
                        name: 'Aholi o`sish',
                        data: [16.534, 17.170, 17.452, 17.699, 17.938, 18.168, 18.372, 18.549, 18.712, 18.858, 19.076, 19.238, 19.939]
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
                        name: 'O`zbekiston',
                        data: [11628.4, 11919.1, 13706.2, 12223.8, 12523.3, 12818.4, 13058.3, 13298.4, 13520.3, 13273.1, 13541.1, 13236.4, 13538.9, 13706.2]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '8.05M';
                document.getElementById('prasentMale').innerHTML = '58.80%';
                document.getElementById('countFamale').innerHTML = '5.64M';
                document.getElementById('prasentFamale').innerHTML = '41.20%';
            }else if (type === 'unemployment') {
                chart.update({
                    title: { text: 'Ishsizlik darajasi' },
                    yAxis: {
                        title: {
                            text: 'Foiz (%)'
                        }
                    },
                    series: [{
                        name: 'O`zbekiston',
                        data: [5.4,5,4.9,4.9,5.1,5.2,5.2,5.8,9.3,9,10.5,9.6,8.9]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '13.4%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.4%';
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
                        name: 'O`zbekiston',
                        data: [70.7,69.7,70,70.5,71.3,71.9,72.5,73.5,74.3,75,73.8,74.1,73.7]
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
                        name: 'O`zbekiston',
                        data: [4439.4,4744.9,4478.6,4714.2,4651.1,4542.6,4508.4,4466.5,4309,4187.9,4072.6,4360.8,4354.2]
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
@endsection
