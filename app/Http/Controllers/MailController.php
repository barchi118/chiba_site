<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;

class MailController extends Controller
{
    public function index(){
        return view('mail.index');
}
    //メール送信機能
    public function sendMail(Request $request)
{
    $data = $request->all();  
    // 入力したフォームのデータを全て取得するため。
    Mail::send(['text' => 'mail.temp'], $data, function($message) use($data){
    $message->to($data["email"])->subject($data["title"]);
    //第一引数　送信に使用する文章を取得する
    //第二引数　送信に使用する入力されたデータを取得するため
    //第三引数　メール送信用の関数
    });
    return view('mail.complete');
}
}
