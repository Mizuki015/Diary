<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{

    public function index()
    {
        // diariesテーブルのデータを全件取得
        // allメソッド：全件データを取得するメソッド
        $diaries = Diary::all();

        // dd($diaries);
        // view('フォルダ名.ファイル名');
        return view('diaries.index', [
            'diaries' => $diaries
            ]);
    }

    // 新規追加の画面を表示するメソッド
    public function create()
    {
        return view('diaries.create');
    }

    // 新規追加の画面で投稿ボタンが押された時、
    // 投稿処理するメソッド
    public function store(Request $request)
    {
        dd($request->title);
    }
}
