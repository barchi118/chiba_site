
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="sticky-top bg-white border"  >
  <nav class="navbar navbar-expand-lg navbar-dark pt-0 nav d-flex justify-content-center"  >
    <a href="{{asset('main')}}"><div class="nav-logo  d-lg-none d-xl-none "></div></a>
    <button class="navbar-toggler border border-primary  btn-primary justify-content-end ml-2 " type="button"
    data-toggle="modal" data-target="#modal1"
    aria-controls="navmenu1"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <div class="text-primary"><i class="fas fa-bars  "></i></div>

  </button>
  <div class="navbar  collapse   navbar-collapse text-dark justify-content-center p-0 m-0  " >
    <div class="navbar-nav text-dark pt-3">
      <div class="nav-logo  "></div>
      <a class="nav-item nav-link  text-dark js-scroll-trigger mx-3" href="{{asset('main/#top')}}">Top</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3" href="{{asset('main/#about')}}">About</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="{{asset('main/#services')}}">Services</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="{{asset('main/#portfolio')}}">Portfolio</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="{{asset('main/#skillset')}}">Skill set</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="{{asset('mail')}}">Contact</a>
    </div>
    <div class="navbar-nav text-dark d-flex justify-content-end d-md-block d-lg-none d-sm-none d-xl-block">
      <a class="nav-item nav-link  text-dark float-right" href="https://twitter.com/barchi118">
        <small><i class="fab fa-twitter fa-2x mr-1"></i>Twitter</small>
      </a>
      <a class="nav-item nav-link text-dark  float-right" href="https://github.com/barchi118">
        <small><i class="fab fa-github fa-2x mr-1"></i>Github</small>
      </a>
    </div>
  </div>
</nav>
</div>
<!-- モーダル中身 -->
<div class="modal" id="modal1" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-show="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <strong>Menu</strong>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
          <a href="{{asset('main/#top')}}" class="js-scroll-trigger list-group-item list-group-item-action">
            Top
          </a>
          <a href="{{asset('main/#about')}}" class="js-scroll-trigger list-group-item list-group-item-action">
            About
          </a>
          <a href="{{asset('main/#services')}}" class="js-scroll-trigger list-group-item list-group-item-action">
            services
          </a>
          <a href="{{asset('main/#portfolio')}}" class="js-scroll-trigger list-group-item list-group-item-action">
            Portfolio
          </a>
          <a href="{{asset('profile')}}" class="list-group-item list-group-item-action ">
            Skill set
          </a>
          <a href="{{asset('mail')}}" class="list-group-item list-group-item-action ">
            Contact
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-10">
      <h2 class="text-center mt-5 text-dark">スキルセット</h2><span>(2020年12月現在)</span>
    </div>
    <div class="col-12 col-md-3 ">
      <p class="bg-dark text-light skill-title">言語</p>
      <ul>
        <li>PHP7系※5系も対応</li>
        <li>HTML</li>
        <li>CSS</li>
        <li>javascript</li>
      </ul>
    </div>
    <div class="col-12 col-md-3">
      <p class="bg-dark text-light skill-title">FW・ライブラリ</p>
      <ul>
        <li>laravel</li>
        <li>Bootstrap</li>
        <li>jQuery</li>
        <li>Vue.js</li>
        <li>React</li>
      </ul>
    </div>
    <div class="col-12 col-md-3">
      <p class="bg-dark text-light skill-title">開発環境</p>
      <ul>
        <li>Windows10</li>
        <li>Linux</li>
      </ul>
    </div>
    <div class="col-12 col-md-3">
      <p class="bg-dark text-light skill-title">データベース</p>
      <ul>
        <li>MySQL</li>
        <li>Sqlite</li>
      </ul>
    </div>

  </div>
</div>


<h3>個人開発</h3>
<!-- base table -->
<table class="col-12 table show exp-tbl" style="overflow:scroll;">
  <thead >
    <tr>
      <th scope="col" colspan="2" class="bg-secondary text-white">ユーザー管理アプリ</th>
    </tr>

  </thead>
  <tbody class="mb-2">
    <tr>
      <th scope="row">内容</th>
      <td scope="row" >基本的な要素を入れたCRUDアプリ</td>
      <!-- <td scope="row" >基本的な要素を入れたCRUDアプリ<br>【 <a href="https://sho200.xsrv.jp/Userlists/public/student/list" target="_blank">DEMO</a>  】</td> -->
    </tr>
    <tr>
      <th scope="row">担当業務</th>
      <td scope="row">全行程</td>
    </tr>
    <tr>
      <th scope="row">役割</th>
      <td scope="row">全行程 </td>
    </tr>
    <tr>
      <th scope="row">開発環境</th>
      <td scope="row"><ul><li>言語:PHP</li><li>FW:Laravel Bootstrap</li><li>OS:CentOS</li></ul> </td>
    </tr>
    <tr>
      <th scope="row">使用説明</th>
      <td scope="row"><ul><li>【新規登録機能】名前、ウェブサイト、誕生日、自己紹介文。（未入力の場合バリデーションあり）</li><li>【編集機能】一覧表示リストの「編集」から可能。（未入力の場合バリデーションあり）</li><li>【削除機能】一覧表示リストの「削除」から可能。（削除後、モーダルで表示あり）</li></ul> </td>
    </tr>
  </tbody>
</table>
<!--END base table -->
<!-- base table -->
<table class="col-12 table show exp-tbl" style="overflow:scroll;">
  <thead >
    <tr>
      <th scope="col" colspan="2" class="bg-secondary text-white">タスク管理アプリ</th>
    </tr>

  </thead>
  <tbody class="mb-2">
    <tr>
      <th scope="row">内容</th>
      <td scope="row" >TODOリスト<br></td>
    </tr>
    <tr>
      <th scope="row">担当業務</th>
      <td scope="row">全行程</td>
    </tr>
    <tr>
      <th scope="row">役割</th>
      <td scope="row">全行程 </td>
    </tr>
    <tr>
      <th scope="row">開発環境</th>
      <td scope="row"><ul><li>言語:PHP</li><li>FW:Laravel</li><li>OS:CentOS</li></ul> </td>
    </tr>
    <tr>
      <th scope="row">使用説明</th>
      <td scope="row"><ul><li>【新規登録機能】「create task」を開き各項目を入力。[submit]をクリックして登録完了。</li><li>【表示機能】登録したプロフィールを一覧表示リストにタスク名、登録時間を表示。</li><li>【削除機能】削除したいプロフィールを一覧表示リストの[DELETE]をクリック。</li></ul>
      </td>
    </tr>
  </tbody>
</table>
<!--END base table -->
<!-- base table -->
<table class="col-12 table show exp-tbl" style="overflow:scroll;">
  <thead >
    <tr>
      <th scope="col" colspan="2" class="bg-secondary text-white">ログイン認証</th>
    </tr>

  </thead>
  <tbody class="mb-2">
    <tr>
      <th scope="row">内容</th>
      <td scope="row" >Authでのログイン認証機能<br></td>
    </tr>
    <tr>
      <th scope="row">担当業務</th>
      <td scope="row">全行程</td>
    </tr>
    <tr>
      <th scope="row">役割</th>
      <td scope="row">全行程 </td>
    </tr>
    <tr>
      <th scope="row">開発環境</th>
      <td scope="row"> <ul><li>言語:Laravel Bootstrap</li><li>OS:CentOS</li></ul> </td>
    </tr>
    <tr>
      <th scope="row">使用説明</th>
      <td scope="row"><ul><li>【新規登録機能】右上の[新規登録]をクリックして欄に記入。（パスワードは4文字以上に設定）</li><li>【ログイン機能】右上の[ログイン]をクリックして、新規登録で入力した「メールアドレス」「パスワード」を入力。</li><li>【表示機能】ログイン後新規登録時のデータを表示。</li></ul>
      </td>
    </tr>
  </tbody>
</table>
<!--END base table -->
  <table class="col-12 table show exp-tbl" style="overflow:scroll;">
    <thead >
      <tr>
        <th scope="col" colspan="2" class="bg-secondary text-white">プロフィールサイト</th>
      </tr>

    </thead>
    <tbody class="mb-2">
      <tr>
        <th scope="row">内容</th>
        <td scope="row" >laravelで作成したプロフィールサイト<br></td>
      </tr>
      <tr>
        <th scope="row">担当業務</th>
        <td scope="row">全行程</td>
      </tr>
      <tr>
        <th scope="row">役割</th>
        <td scope="row">全行程 </td>
      </tr>
      <tr>
        <th scope="row">開発環境</th>
        <td scope="row"> <ul><li>言語:Laravel Bootstrap</li><li>Windows</li></ul> </td>
      </tr>
      <tr>
        <th scope="row">使用説明</th>
        <td scope="row"><ul>
          <li>お仕事の依頼が来る可能性があるので、問い合わせフォームをlaravelで作成。</li>
          <li>どの端末から見ても見やすい様にレスポンシブに対応しています。</li>

        </ul>
        </td>
      </tr>
    </tbody>
  </table>
<!-- base table -->

<!--END base table -->

<!-- base table -->
<!-- <table class="col-12 table show exp-tbl" style="overflow:scroll;">
  <thead >
    <tr>
      <th scope="col" colspan="2" class="bg-secondary text-white">アンケートページ</th>
    </tr>

  </thead>
  <tbody class="mb-2">
    <tr>
      <th scope="row">内容</th>
      <td scope="row" >PHPでの問い合わせフォーム<br></td>
    </tr>
    <tr>
      <th scope="row">担当業務</th>
      <td scope="row">全行程</td>
    </tr>
    <tr>
      <th scope="row">役割</th>
      <td scope="row">全行程 </td>
    </tr>
    <tr>
      <th scope="row">開発環境</th>
      <td scope="row"><ul><li>言語:PHP </td>
      </tr>
      <tr>
        <th scope="row">使用説明</th>
        <td scope="row">jQuery</li><li>OS:CentOS</li></ul> </td>
      </tr>
    </tbody> -->
  </table>
  <!--END base table -->
</div>
<!-- footer -->
    @component('components.footer')
              @endcomponent
@endsection
