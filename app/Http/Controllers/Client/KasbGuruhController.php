<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Guruh;
use App\Models\KasbGuruh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class KasbGuruhController extends Controller
{
    public function index(): View
    {
        $guruhs = Guruh::paginate(30);
        return view('client.kasbguruhlari',compact('guruhs'));
    }
    public function getItemsByInitialLetter($letter = null)
    {
        $items = Guruh::select('name', DB::raw('SUBSTRING(name, 1, 1) as initial_letter'))
            ->when($letter, function ($query, $letter) {
                return $query->where('name', 'like', $letter . '%');
            })
            ->orderBy('initial_letter')
            ->get();

        $groupedItems = $items->groupBy('initial_letter');
        return view('client.item', ['groupedItems' => $groupedItems, 'targetLetter' => $letter]);
    }

    public function search(Request $request)
    {
        $query = Guruh::query();

        if ($request->filled('education')) {
            $query->where('talim', 'like', "%{$request->education}%");
        }

        if ($request->filled('salary')) {
            $salaryRanges = [
                1 => ['2000000', '10000000'],
                2 => ['12000000', '20000000'],
                3 => ['22000000', '30000000'],
                4 => ['35000000', '45000000'],
            ];
            if (isset($salaryRanges[$request->salary])) {
                $range = $salaryRanges[$request->salary];
                $query->whereRaw("CAST(REPLACE(REPLACE(oylik, '.', ''), ',', '') AS UNSIGNED) BETWEEN ? AND ?", $range);
            }
        }

        $results = $query->paginate(25);

        return view('client.result', ['results' => $results]);
    }
}
