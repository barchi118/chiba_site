@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')

<!-- Header -->


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

<!-- form -->
<section class=" bg-dark id="portfolio">
  <div class="container">
    <div class="card">
      <h5 class="card-header text-center"><strong>お問い合わせフォーム</strong></h5>
      <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
        @csrf
        <div class="form-group mt-3">
          <label for="name" class="control-label col-sm-4">件名:</label>
          <div class="col-sm-10">
            <input type="text" name="title" id="title" class="form-control" placeholder="件名を入力してください" autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="name" class="control-label col-sm-4">お名前:</label>
          <div class="col-sm-10">
            <input type="text" name="name"" id="name"" class="form-control" placeholder="お名前を入力してください" autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="email" class="control-label col-sm-4">メールアドレス:</label>
          <div class="col-sm-10">
            <input type="email" name="email" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
          </div>
        </div>

        <div class="form-group">
          <label for="tel" class="control-label col-sm-4">お問い合わせ内容:</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="body" id="body" rows="3" placeholder="お問い合わせ内容を入力してください" autofocus></textarea>
          </div>
        </div>
        <div class=" text-center py-3">
          <button class="btn btn-lg btn-primary center-block " type="submit">送信</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- footer -->
<footer id="contact" class="footer text-center bg-light text-dark py-0">
                <div class="container-fluid text-center  d-none d-lg-block">
                    <div class="row d-flex bd-highlight border-bottom border-primary text-center">
    <!-- Twitter -->
    <div class="col-6 flex-fill bd-highlight
    my-2 border-right align-self-center border-primary">
    <p><i class="fab fa-twitter text-primary fa-3x"></i></i></p>
    <h3>最新情報をお届け</h3>
    <small>Twitterで最新情報を投稿してます。</small>
    <p><a href="https://twitter.com/barchi118" class="btn btn-outline-primary btn-lg mt-3"
      role="button" aria-pressed="true">
      Twitterを見る
    </a></p>
  </div>
  <!-- 問い合わせ -->
  <div class="col-6 flex-fill bd-highlight align-self-center my-2" >
    <h3>サイトトップへ戻る</h3>
    <p><a href="{{ asset('main')}}" class="btn btn-outline-primary btn-lg mt-3" role="button" aria-pressed="true">
      HOME
    </a></p>
  </div>
</div>
<!-- SNS -->
<div class="row " >
  <div class="col-12 text-center mt-2">
    <h1>SNS</h1>
    <samll>Twitter意外でも情報を発信しています。</samll>
    <div class="my-3">
      <span><a href="https://www.facebook.com/profile.php?id=100014184393895"><i class="fab fa-facebook-f fa-3x"></i></a></span>
      <span><a href="https://www.instagram.com/chiba_0118/"><i class="fab fa-instagram fa-3x mx-3"></i></a></span>
      <span><a href="https://github.com/barchi118"><i class="fab fa-github fa-3x"></i></a></span>
    </div>
  </div>
  <!-- コピーライト -->
  <div class="col-12 p-0">
    <nav class="nav navbar navbar-dark bg-dark  p-0">
      <a class="nav-item nav-link text-light" href="#">個人情報の取り扱い</a>
      <a class="nav-item nav-link text-light" href="#">Copyright@ ALL rights</a>
    </nav>
  </div>
</div>
</div>
<!-- レスポンシブ -->
<div class="container-fluid text-center py-0 d-lg-none d-sm-block">
<div class="p-3 ">
<div class="mb-3">
          <!-- <h6 class="text-primary mb-1 mt-3">Contact</h6> -->
          <h2 class=" d-inline border-primary border-bottom" style="font-weight:bold;">SNS・TOP</h2>
        </div>
                <div class="row mb-4">
                
                <div class="col-sm-6 mt-3">
                    <a href="{{asset('main')}}" style="text-decoration:none;">
                      <div class="border border-primary  py-2
                      bg-white text-center mr-3" style="font-size: 18px;">
                        <small class="text-dark "><i class="fas fa-home text-primary fa-2x"></i>　サイトトップ</small>
                      </a>
                   </div>             
</div>
<div class="col-sm-6 mt-3">
                    <a href="https://twitter.com/barchi118" style="text-decoration:none;">
                      <div class="border border-primary  py-2
                      bg-white text-center mr-3" style="font-size: 18px;">
                        <small class="text-dark "><i class="fab fa-twitter text-primary fa-2x"></i>　Twitter</small>
                      </a>
                   </div>             
</div>


</div>

</div>
<div class="row bg-dark">
<nav class="nav navbar navbar-dark bg-dark  p-0">
      <a class="nav-item nav-link text-light" href="#">個人情報の取り扱い</a>
      <a class="nav-item nav-link text-light" href="#">Copyright@ ALL rights</a>
    </nav>
</div>
</div>
                </footer>




  @endsection
