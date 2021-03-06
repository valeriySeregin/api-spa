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
            ->paginate(10);

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

    public function search(Request $request)
    {
        $search = $request->input('search');

        $news = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->paginate(10);

        return view('news.search', compact('news'));
    }

    public function newsByDates(Request $request)
    {
        $news = DB::table('news')
            ->leftJoin('users', 'users.id', '=', 'news.user_id')
            ->whereBetween('creation_date', [$request->get('begin_date'), $request->get('end_date')])
            ->where('name', $request->get('author'))
            ->paginate(10);

        return view('news.index', compact('news'));
    }
}
