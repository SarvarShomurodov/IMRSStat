@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Mehnat bozori</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/statistic/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/statistic/fargona')}}">Farg`ona viloyati</option>
                      <option value="{{url('/statistic/navoiy')}}">Navoiy viloyati</option>
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
                        <div class="col-md-2"><h4>1,06M</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i style="color: rgb(0, 0, 0);" class="bi bi-circle"></i></div>
                            <b>0.0%  (1-yr)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                    <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>714,2ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+1.7%  (1-yr)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('unemployment')">
                    <h6 style="text-align: left;">Ishsizlik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>9,1%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-9.9pp  (1-yr)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('faollik')">
                    <h6 style="text-align: left;">Aholining iqtisodiy faollik darajasi</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>67,8%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-0.1pp  (1-yr)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                    <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>284,6ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i style="color: rgb(0, 0, 0);" class="bi bi-circle"></i></div>
                            <b>0.0%  (1-yr)</b>
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
                        name: 'Qoraqolpoqiston Respublikasi',
                        data: [942.3, 971.4, 980.9, 993.3, 1008.3, 1022.6, 1037.7, 1050.1, 1060.4, 1058.7, 1071.3, 1061.7, 1061.9]
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
                        name: 'Qoraqolpoqiston Respublikasi',
                        data: [580.8, 590, 714.2, 600.2, 610.5, 621, 630, 638.6, 647.2, 705.2, 711.3, 707.4, 702.6, 714.2]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '420.6ming';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '293.6ming';
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
                        name: 'Qoraqolpoqiston Respublikasi',
                        data: [7.4, 6.6, 6.4, 6.2, 5.4, 5.3, 5.4, 6, 9.5, 9.1, 10.5, 10.1, 9.1]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '5.2%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '14.3%';
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
                        name: 'Qoraqolpoqiston Respublikasi',
                        data: [61.9, 61.1, 61.4, 61.5, 61.3, 61.4, 61.5, 62, 69.5, 69.2, 69.2, 67.9, 67.8]
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
                        name: 'Qoraqolpoqiston Respublikasi',
                        data: [318.1, 342.1, 281.5, 342, 345.8, 355.2, 361.2, 367.1, 365.8, 285.3, 280.8, 284.7, 284.6]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '5.2M';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.2M';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
</script>
@endsection
