<?php

namespace App\Http\Controllers;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use App\Models\PriceLatest;
use App\Models\RecentTrend;
use App\Models\Equipment;
use App\Models\Corporate;
use App\Http\Resources\NoticeCollection;
use App\Http\Resources\CalendarCollection;
use App\Http\Resources\CalendarResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = QueryBuilder::for(PriceLatest::class)
        ->selectRaw('*')
        ->limit(10)
        ->get();

        return response()->json([
            'success' => true,
            'message' => '조회',
            'data' => $data,
        ], 200);

    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {

        $priceData = QueryBuilder::for(PriceLatest::class)
        ->selectRaw('*')
        ->where('productno', $id)
        ->limit(10)
        ->get();

        $tableData = QueryBuilder::for(PriceLatest::class)
        ->selectRaw('*')
        ->where('productno', $id)
        ->limit(10)
        ->get();

        $recentTrend = QueryBuilder::for(RecentTrend::class)
        ->selectRaw('*')
        ->limit(10)
        ->get();

        $equipment = QueryBuilder::for(Equipment::class)
        ->selectRaw('*')
        ->limit(10)
        ->get();

        $corporate = QueryBuilder::for(Corporate::class)
        ->selectRaw('*')
        ->limit(10)
        ->get();

        return response()->json([
            'success' => true,
            'message' => '조회',
            'price_data' => $priceData,
            'table_data' => $tableData,
            'recent_trend' => $recentTrend,
            'quipment_data' => $equipment,
            'corporate_data' => $corporate,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'destroy';
    }
}
