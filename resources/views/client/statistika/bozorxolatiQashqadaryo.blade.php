@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Mehnat bozori</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Qashqadaryo viloyati</option>
                      <option value="{{url('/statistic/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/statistic/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/statistic/samarqand')}}">Samarqand viloyati</option>
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
                        <div class="col-md-2"><h4>1,8M</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.0%  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('employment')">
                    <h6 style="text-align: left;">Iqtisodiyotda bandlar soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>1,2M</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button4"><i class="bi bi-arrow-up-circle"></i></div>
                            <b>+0.4%  (1-y)</b>
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
                        <div class="col-md-2"><h4>68,3%</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-1.3pp  (1-y)</b>
                        </div>
                    </div>
                </button>
                <button class="btn bg-light w-100 h-100 mt-3" onclick="updateChart('nofaollik')">
                    <h6 style="text-align: left;">Iqtisodiy nofaol aholi soni</h6>
                    <div class="row">
                        <div class="col-md-2"><h4>471,5ming</h4></div>
                        <div class="col-md-10">
                            <div class="circle-button5"><i class="bi bi-arrow-down-circle"></i></div>
                            <b>-4.1%  (1-y)</b>
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
                        name: 'Qashqadaryo',
                        data: [1487.9, 1565, 1608.2, 1649.2, 1687.2, 1720.1, 1751.7, 1778.2, 1800.4, 1809.2, 1806.3, 1805.7, 1806.1]
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
                        name: 'Qashqadaryo',
                        data: [971.6, 1003.7, 1207.3, 1036.6, 1072.3, 1108.5, 1143.9, 1180.9, 1218, 1222, 1220, 1171, 1202.5, 1207.3]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '754.9ming';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '452.4ming';
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
                        name: 'Qashqadaryo',
                        data: [5.8, 5.3, 5.3, 5.2, 5.5, 5.5, 5.3, 6.1, 9.7, 9.3, 11.1, 10.2, 9.3]
                    }]
                });
                document.getElementById('first').innerHTML = 'Ayol';
                document.getElementById('second').innerHTML = 'Erkak';
                document.getElementById('countMale').innerHTML = '5.3%';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '15.3%';
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
                        name: 'Qashqadaryo',
                        data: [65.4, 64.5, 64.7, 65.1, 66.1, 67, 67.9, 69.6, 71.7, 70.7, 68.5, 69.2, 68.3]
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
                        name: 'Qashqadaryo',
                        data: [462.5, 509.9, 481.9, 517.8, 523.6, 520, 515.7, 511.1, 488, 453.5, 468.5, 491.9, 471.5]
                    }]
                });
                document.getElementById('first').innerHTML = 'Qishloq';
                document.getElementById('second').innerHTML = 'Shahar';
                document.getElementById('countMale').innerHTML = '5.3M';
                document.getElementById('prasentMale').innerHTML = '';
                document.getElementById('countFamale').innerHTML = '5.3M';
                document.getElementById('prasentFamale').innerHTML = '';
            }

        }
</script>
@endsection
