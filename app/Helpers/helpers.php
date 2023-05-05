<?php

use App\Models\Urunler;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Builder;

function urunOzellik($id) {
    $urun = DB::table('Urunler')->where('urun_id', $id)->first();
    return $urun;
}