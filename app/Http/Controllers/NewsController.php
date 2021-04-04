<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')
            ->leftJoin('users', 'users.id', '=', 'news.user_id')
            ->paginate(12);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $singleNewsItem = News::findOrFail($id);
        $user = User::findOrFail($singleNewsItem->user_id);
        $userId = $user->id;
        $userNewsCount = DB::table('news')
            ->select(DB::raw('COUNT(id), user_id'))
            ->where('user_id', $userId)
            ->groupBy('user_id')
            ->get()[0]
            ->count;

        return view('news.show', compact('singleNewsItem', 'user', 'userNewsCount'));
    }
}
