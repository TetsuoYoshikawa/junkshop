<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;

class SoldItemsController extends Controller
{
    public function showSoldItems()
    {
        $user = Auth::user();

        $items = $user->soldItems()->orderBy('id', 'DESC')->get();

        return view('mypage.sold_items')
            ->with('items', $items);
    }
    public function delete(Request $request)
    {
        Item::destroy($request->input('id'));

        return redirect(route('mypage.sold-items'));
    }
}
