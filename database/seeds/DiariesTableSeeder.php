<?php

use Illuminate\Database\Seeder;

// 追加 require_onceと同じ役割
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diaries = [
            [
                'title'=>'もう既に日本に帰りたい',
                'body'=>'ファミマの鮭おにぎりが食べたい'
            ],
            [
                'title'=>'水曜日にバロット',
                'body'=>'ちゃんと酢をかけて食べる（二度目）'
            ],
            [
                'title'=>'漫画読みたい',
                'body'=>'星のロミが使えなくなってて萎える'
            ]
        ];
        
        foreach($diaries as $diary) {
            // DBにデータを追加する
            DB::table('diaries')->insert([
                'title' => $diary['title'],
                'body' => $diary['body'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
