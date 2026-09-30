<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getList() {
        // articlesテーブルからデータを取得
        $articles = DB::table('articles')->get();

        return $articles;
    }

    public function registArticle($data) {
    // 登録処理
    DB::table('articles')->insert([
        'title' => $data->title,
        'url' => $data->url,
        'comment' => $data->comment,
    ]);
}
}

