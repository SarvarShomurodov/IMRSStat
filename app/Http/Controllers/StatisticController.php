<?php

namespace App\Http\Controllers;

use App\Models\statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getJsonDataToshkentsh()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2803.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataXorazm()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2802.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataFargona()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2801.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataToshkent()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2800.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataSirdaryo()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2799.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataSurxandaryo()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2798.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataSamarqand()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2797.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataNamangan()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2796.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataNavoiy()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2795.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataQashqadaryo()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2794.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataJizzah()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2793.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataBuxoro()
    {
        $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2792.json');
    
        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Failed to fetch data'], 500);
        }
    }
    public function getJsonDataAndijan()
        {
            $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2791.json');
        
            if ($response->successful()) {
                $data = $response->json();
                return response()->json($data);
            } else {
                return response()->json(['error' => 'Failed to fetch data'], 500);
            }
        }      

    public function getJsonData()
        {
            $response = Http::get('https://api.siat.stat.uz/media/uploads/sdmx/sdmx_data_2790.json');
        
            if ($response->successful()) {
                $data = $response->json();
                return response()->json($data);
            } else {
                return response()->json(['error' => 'Failed to fetch data'], 500);
            }
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(statistic $statistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(statistic $statistic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, statistic $statistic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(statistic $statistic)
    {
        //
    }
}
