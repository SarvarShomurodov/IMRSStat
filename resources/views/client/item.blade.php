@extends('layouts.appclient')
@section('content')
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Creates three columns */
            grid-gap: 10px; /* Space between the grid items */
            width: 100px; /* Total width of the grid */
            margin: 20px; /* Margin around the grid */
            position: sticky; /* Changes position to fixed */
            top: 115px; /* Sets top position */
            left: 20px; /* Sets left position */
        }
        .grid-item {
            background-color: #f0f0f0; /* Light grey background */
            border: 1px solid #ddd; /* Border for each item */
            padding: 5px; /* Padding inside each item */
            text-align: center; /* Center the text inside */
            font-size: 15px; /* Font size of the text */
        }
        .grid-container a{
            text-decoration: none;
            color: black;
        }
    </style>
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">KASB RO`YXATLARI</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    <div style="padding-top: 25px;" class="container">
        <h2 class="mb-4">A dan Z gacha</h2>
        <div class="row">
            <div class="col-md-10">
                @foreach ($groupedItems as $letter => $items)
                    <h4 id="{{ $letter }}">{{ $letter }}</h4> <!-- Anchor tag added here -->
                    <ul>
                        @foreach ($items as $item)
                            <li><i style="font-size: 10px" class="bi bi-record-fill"></i> {{ $item->name }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
            <div class="col-md-2">
                <div class="grid-container">
                    <a href="/items/A"><b><div class="grid-item">A</div></b></a>
                    <a href="/items/B"><b><div class="grid-item">B</div></b></a>
                    <a href="/items/C"><b><div class="grid-item">C</div></b></a>
                    <a href="/items/D"><b><div class="grid-item">D</div></b></a>
                    <a href="/items/E"><b><div class="grid-item">E</div></b></a>
                    <a href="/items/F"><b><div class="grid-item">F</div></b></a>
                    <a href="/items/G"><b><div class="grid-item">G</div></b></a>
                    <a href="/items/H"><b><div class="grid-item">H</div></b></a>
                    <a href="/items/I"><b><div class="grid-item">I</div></b></a>
                    <a href="/items/J"><b><div class="grid-item">J</div></b></a>
                    <a href="/items/K"><b><div class="grid-item">K</div></b></a>
                    <a href="/items/L"><b><div class="grid-item">L</div></b></a>
                    <a href="/items/M"><b><div class="grid-item">M</div></b></a>
                    <a href="/items/N"><b><div class="grid-item">N</div></b></a>
                    <a href="/items/O"><b><div class="grid-item">O</div></b></a>
                    <a href="/items/P"><b><div class="grid-item">P</div></b></a>
                    <a href="/items/Q"><b><div class="grid-item">Q</div></b></a>
                    <a href="/items/R"><b><div class="grid-item">R</div></b></a>
                    <a href="/items/S"><b><div class="grid-item">S</div></b></a>
                    <a href="/items/T"><b><div class="grid-item">T</div></b></a>
                    <a href="/items/U"><b><div class="grid-item">U</div></b></a>
                    <a href="/items/V"><b><div class="grid-item">V</div></b></a>
                    <a href="/items/W"><b><div class="grid-item">W</div></b></a>
                    <a href="/items/X"><b><div class="grid-item">X</div></b></a>
                    <a href="/items/Y"><b><div class="grid-item">Y</div></b></a>
                    <a href="/items/Z"><b><div class="grid-item">Z</div></b></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3 m">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->
    <script>
        window.onload = function() {
            var targetLetter = "{{ $targetLetter }}";
            if (targetLetter) {
                var element = document.getElementById(targetLetter);
                if (element) {
                    element.scrollIntoView();
                }
            }
        }
    </script>
@endsection

