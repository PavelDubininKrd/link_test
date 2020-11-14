<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    public function index() {
        return view('index');
    }

    public function store(LinkRequest $request) {
        $link = Link::create([
            'link' => $request->get('link'),
            'token' => Str::random(6),
        ]);
        return response()->json([
            'link' => request()->getSchemeAndHttpHost() . '/' . $link->token
        ]);
    }

    public function redirect($token)
    {
        $link = Link::where('token', $token)->first();
        if (!$link) {
            abort(404);
        }
        return redirect()->to($link->link);
    }
}
