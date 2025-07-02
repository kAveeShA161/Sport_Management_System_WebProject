<?php

namespace App\Http\Controllers;
use App\Models\StoreItem;
use Illuminate\Http\Request;

class StoreItemUserController extends Controller
{
    public function index()
    {
        $items = StoreItem::all();
        return view('store.index', compact('items'));
    }
}
