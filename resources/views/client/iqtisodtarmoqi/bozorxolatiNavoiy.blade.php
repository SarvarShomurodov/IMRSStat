@extends('layouts.bozorxolatiapp')
@section('content')
<div class="col-md-4 all-div2 mb-3 p-4 h-100">
            <h4>Iqtisodiyot tarmoqlari</h4>
            <form id="carForm" action="">
                    <select class="form-select" aria-label="Default select example" id="carSelect" name="carSelect" onchange="submitForm()">
                      <option selected>Navoiy viloyati</option>
                      <option value="{{url('/tarmoq/index')}}">O`zbekiston Respublikasi</option>
                      <option value="{{url('/tarmoq/qoraqolpoqiston')}}">Qoraqolpoqiston Respublikasi</option>
                      <option value="{{url('/tarmoq/samarqand')}}">Samarqand viloyati</option>
                      <option value="{{url('/tarmoq/andijan')}}">Andijon viloyati</option>
                      <option value="{{url('/tarmoq/fargona')}}">Farg`ona viloyati</option>
                      <option value="{{url('/tarmoq/qashqadaryo')}}">Qashqadaryo viloyati</option>
                      <option value="{{url('/tarmoq/namangan')}}">Namangan viloyati</option>
                      <option value="{{url('/tarmoq/jizzah')}}">Jizzah viloyati</option>
                      <option value="{{url('/tarmoq/surxandaryo')}}">Surxandaryo viloyati</option>
                      <option value="{{url('/tarmoq/sirdaryo')}}">Sirdaryo viloyati</option>
                      <option value="{{url('/tarmoq/toshkent')}}">Toshkent viloyati</option>
                      <option value="{{url('/tarmoq/buxoro')}}">Buxoro viloyati</option>
                      <option value="{{url('/tarmoq/xorazm')}}">Xorazm viloyati</option>
                      <option value="{{url('/tarmoq/toshkentsh')}}">Toshkent shaxri</option>
                    </select>
                    <noscript><input type="submit" value="Submit"></noscript>
                </form>
                <div class="container mt-3">
                        <div class="row">
                            <div class="col-12 button-container">
                                <!-- Set up a vertical button group with spaced buttons -->
                                <div class="btn-group-vertical d-block" role="group" aria-label="Classifier Buttons" id="buttons"></div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-md-5 all-div5 ml-3 p-3">
                    <div id="charts"></div>
                </div>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            fetch('/fetch-data-navoiy') // Make sure this URL correctly points to your data source
                .then(response => response.json())
                .then(jsonData => {
                    const data = jsonData[0].data; // Assuming this is your data structure

                    // Create buttons and corresponding chart containers
                    data.forEach((category, index) => {
                        const button = document.createElement('button');
                        button.classList.add('btn', 'btn-block', 'btn-spacing'); // Apply custom spacing
                        button.innerText = category.Klassifikator;
                        button.onclick = () => toggleChart(index);
                        document.getElementById('buttons').appendChild(button);

                        const div = document.createElement('div');
                        div.id = `container-${index}`;
                        div.className = 'chart-container';
                        document.getElementById('charts').appendChild(div);

                        // Prepare data for chart
                        const seriesData = [];
                        for (let year = 2010; year <= 2022; year++) {
                            if (category[year.toString()]) {
                                seriesData.push({
                                    x: Date.UTC(year, 0, 1),
                                    y: parseFloat(category[year.toString()])
                                });
                            }
                        }

                        // Initialize the chart (hidden by default)
                        Highcharts.chart(`container-${index}`, {
                            chart: {
                                type: 'line'
                            },
                            title: {
                                text: `${category.Klassifikator} - Employment Data`
                            },
                            xAxis: {
                                type: 'datetime',
                                dateTimeLabelFormats: { year: '%Y' }
                            },
                            yAxis: {
                                title: { text: 'Number of People (in thousands)' },
                                min: 0
                            },
                            series: [{
                                name: category.Klassifikator,
                                data: seriesData
                            }]
                        });
                    });
                });

            // Function to toggle the visibility of charts
            function toggleChart(index) {
                const charts = document.getElementsByClassName('chart-container');
                for (let i = 0; i < charts.length; i++) {
                    charts[i].style.display = i === index ? 'block' : 'none'; // Show only the selected chart
                }
            }
        });
</script>
@endsection
