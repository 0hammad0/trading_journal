<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trade;
use App\Models\User;

class TradeController extends Controller
{
    public function index()
    {
        if(auth::check())
        {
            $trade = Trade::where('user_id', Auth::id())->get();
            return view('frontend.trading_journal', compact('trade'));
        }
    }

    public function success_index()
    {
        if(auth::check())
        {
            $trade = Trade::where('user_id', Auth::id())->where('result', 1)->get();

            return view('frontend.trading_journal', compact('trade'));
        }
    }

    public function failure_index()
    {
        if(auth::check())
        {
            $trade = Trade::where('user_id', Auth::id())->where('result', 0)->get();
            return view('frontend.trading_journal', compact('trade'));
        }
    }

    public function details()
    {
        // dd($id);
        if(auth::check())
        {
            $trade = Trade::findOrFail(1);
            // $trade = Trade::all();
            // $user = User::all();
            return view('frontend.tradeDetail', compact('trade'));
            // return view('frontend.tradeDetail', compact('user'));
        }
    }

    public function add()
    {
        return view('frontend.addJournal');
    }

    public function addJournal(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'result' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
        ]);

        $newImgName = time() ."-". $request->title .".". $request->image->extension();
        $request->image->move(public_path('/tradeImg'), $newImgName);

        $user_id = Auth::id();
        $success = Trade::create([
            'title' => $request->title,
            'description' => $request->description,
            'result' => $request->result,
            'user_id' => $user_id,
            'image_path' => $newImgName,
        ]);

        if($success)
            return redirect('/')->with('success', 'successfully added');
        else
            return "Error";


    }
}
