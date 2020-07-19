@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<!-- nav -->
<nav class="rounded my-nav navbar navbar-expand-lg navbar-dark bg-Secondary  font-weight-bold fixed-top ">
  <img src="{{ asset('images/logo.png') }}" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon m-3"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item mt-5 ">
        <a class="nav-link" href="#about"><span>About</span></a>
      </li>
      <li class="nav-item mt-5 ">
        <a class="nav-link" href="#work"><span>Work</span></a>
      </li>      
      <li class="nav-item mt-5">
        <a class="nav-link" href="#skill"><span>Skills</span></a>
      </li>
      <li class="nav-item mt-5">
        <a class="nav-link" href="#portfolio"><span>Portfolio</span></a>
      </li>
      <li class="nav-item mt-5">
        <a class="nav-link" href="http://shirokuma.sakura.ne.jp/chibasite/mail"><span>Contact</span></a>
      </li>
    </ul>
  </div>
</nav>


<!-- topボタン -->
<div  class="fixed-bottom mb-5 mr-5">
  <!-- <button id="mmm" type="button " class="btn btn-secondary float-right pageTop-chevron p-4">ページトップ</button> -->
</div>

<!-- headear -->
<!-- <div class="card-body main-headear" id="main-header" >
  <!-- <h1 class=" text-center text-white font-weight-bold">Chiba's Portfolio</h1> -->
  <h2 class="text-center text-white" >web developer</h2>
</div> -->




<!-- about -->
 <!-- <section class=" bg-light text-secondary font-weight-bold" >
    <div class="container text-center">
      <div class="row">
        <sec class="col-lg-10 mx-auto ">
        <a id="about" class="anchor"></a>
        <h2 class="m-5 text-secondary" >About</h2>
    <div class="row">
        <div class="col-lg-6">
          <span class="my-5 center-block " style="">
            <img src="{{ asset('images/about2.jpg') }}" class="p-5 rounded-circle">
          </span>
        </div>
        <div class="col-lg-6">
            <p class=" ">
                <ul class="list-group list-group-flush　 pt-5 mt-5">
                    <li class="list-group-item text-left">名前：Chiba Seiya</li>
                    <li class="list-group-item text-left">出身：神奈川県横須賀市</li>
                    <li class="list-group-item text-left">学歴：日本大学文理学部</li>
                    <li class="list-group-item text-left">趣味：ガンダム、読書、アニメ鑑賞、デュエマ</li>
                    <li class="list-group-item text-left">活動：友人がエンジニアスクールを始めたのをきっかけに、自分でアプリ開発やweb制作について興味を持ち現在は Laravelなどを使ってtwitter風サイトの作成などをしています。</li>
                </ul>
            </p>
        </div>
    </div>
  </section> -->



<!-- works -->
 <section class="work bg-dark text-light id="work">
    <div class="container text-center">
      <div class="row">
        <sec class="col-lg-10 mx-auto ">
          <a id="work" class="anchor"></a>
        <h2 class="m-5 text-light">Work</h2>
    <div class="row">
        <div class="col-lg-6">
             <div class="card-body ">
                <p class=" text-center"><i class="fas fa-desktop fa-7x"></i></p>
                <h5 class=" card-title">エンジニア案件</h5>
                <p class="card-text">HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件に対応いたします。常駐からリモートワーク、週1~から柔軟に対応いたします。</h4>
             </div>
        </div>
        <div class="col-lg-6">
             <div class="card-body ">
                <p class=" text-center"><i class="fas fa-desktop fa-7x"></i></p>
                <h5 class=" card-title">Web制作</h5>
                <p class="card-text">ランディングページやコーポレートサイトなどのレスポンシブ対応のサイト制作いたします。納品後も誰でも編集しやすい形で仕上げせていただきます。</p>
             </div>
        </div>
      </div>
  </section>


  <!-- skill -->
 <section class=" skill  bg-light text-dark ">
    <div class="container text-center">
      <div class="row">
        <sec class="col-lg-10 mx-auto ">
        <a  id="skill" class="anchor"></a>
        <h2 class="m-5 text-secondary">Skill Set</h2>
    <!-- <div class="row">
        <div class="col-lg-6">
             <div class="card-body ">
                                <img class="bd-placeholder-img card-img-top" src="{{ asset('images/laravel2.jpg') }}" alt=""></title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">
                  <div class="card-body">
                    <p class="card-text">
                      twitter風のSNSのwebアプリの作成やその他各種アプリなどの開発で主にlaravelを使っています。
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated  2020/04</small></p>
                  </div>
             </div>
        </div>
        <div class="col-lg-6">
             <div class="card-body ">
                  <img class="bd-placeholder-img card-img-top" src="{{ asset('images/react2.png') }}" alt=""></title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">
                    <div class="card-body">
                      <p class="card-text">コピーサイトの作成や各種アプリの作成に主に使っています。</p>
                      <p class="card-text"><small class="text-muted">Last updated  2020/04</small></p>
          </div>
             </div>
        </div> -->
                <div class="col-lg">
            <p class=" ">
                <ul class="list-group list-group-flush　 pt-5 mt-5">
                    <li class="list-group-item text-left">言語：HTML / CSS / JavaScript / jQuery / PHP</li>
                    <li class="list-group-item text-left">フレームワーク：Laravel/React/Bootstrap/Materialize/Vue.js</li>
                    <li class="list-group-item text-left">データベース：Mysql/sqlite</li>
                    <li class="list-group-item text-left">ツール：Git/Cithub/Vagrant</li>
                    <li class="list-group-item text-left">OS：windows/Linux</li>
                    <li class="list-group-item text-left">その他のツール：Excel/Word/PowerPoint/backlog/slack/chtwork/セールスフォース/スプレッドシート</li>
                </ul>
            </p>
        </div>
      </div>
  </section>

<!-- portfolio -->
<section class=" bg-dark text-light" id="portfolio">
  <sec class="col-lg-10 mx-auto " id="work">
  <h2 class="m-5 text-center text-light">Portfolio</h2>
  <div class="container ">
    <div class="row">
     <div class="col-sm col-md">
      <img src="{{ asset('images/shirokuma2.png') }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">シロクマのテック</h5>
          <p class="card-text">javascriptを使用して、画像などのアニメーションなどを意識して作成したコーポレートサイト風のサイトです。レスポンシブにも対応しています。</p>
          <p class="card-text"><small class="text-muted">Last updated  2020/04</small></p>
          <div class="text-center">
            <a   href="http://shirokuma-tec.work/">
            <button type="button" class="p-4 btn btn-lg btn-secondary">Go to site</button></a>
          </div>
    </div>
    <div class="col-sm col-md">
      <img src="{{ asset('images/profile.png')}}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">プロフィール作成アプリ</h5>
          <p class="card-text">そのためにTwitter風サイトをlaravelを活用して作成しております。
            まずは、プロフィール機能や投稿機能などを別ディレクトリにて作成しております。
            上記のサイトにつきましてはそのプロフィール機能を単体でデプロイしたものになっております。
          </p>
          <p class="card-text"><small class="text-muted">Last updated  2020/04</small></p>
          <div class="text-center">
            <a   href="http://shirokuma.sakura.ne.jp/introproj/intro">
            <button type="button" class="btn btn-lg p-4 btn-secondary">
              Go to site
            </button></a>
          </div>
    </div>
  </div>
</section>

<!-- footer -->

    <footer class="blog-footer  mb-2 bg-light text-dark">
      <sec class="col-lg-10 mx-auto ">
      <div class=" text-center">
        <p>コンタクトフォームがあるのでそちらからお問い合わせください。<br>
          TwitterやInstgramのDMの方がすぐに返信できます。</p>
          <a class=" center-block" href="http://shirokuma.sakura.ne.jp/chibasite/mail">
            <button type="button" class="m-5 p-5 btn btn-lg btn-secondary">コンタクトフォーム</button>
          </a>

          <div class="sns ">
            <a class="m-5 p-3" href="https://twitter.com/barchi118"><i class="fab fa-twitter fa-3x" style="color:gray;"></i></a>
            <a class="m-5 p-3" href="https://www.instagram.com/chiba_0118/?hl=ja"><i class="fab fa-instagram fa-3x" style="color:gray;"></i></a>
          </div>
          <div class="copyright m-3">
            <p>Copyright. <a href=""></a>. 2020 All rights reserved.</p>
          </div>
        </div>
      </p>
    </footer>



    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- <script>
    var pagetop = $('#mmm');
    pagetop.hide();

    $(window).scroll(function(){
      if($(this).scrollTop()>1000){
        //---- 画面を1000pxスクロールしたらボタンを表示
        pagetop.fadeIn();
      }else{
        //---- 画面が1000pxより上ならボタンを表示しない
        pagetop.fadeOut();
      }
    });

    // ボタンをクリックしたら、スクロールして上に戻る
    pagetop.click(function(){
      $('body,html').animate({
        scrollTop: 0},1000);
        return false;
      });
      </script> -->


      @endsection


      <section class="  text-center">
    <a id="services" class="anchor"></a>
    <div class="container my-5">
      <div class="">
        <h6 class="text-primary mb-1  mt-3">Services</h6>
        <h2 class=""><strong>仕事内容</strong></h2>
      </div>

      <div class="row ">

        <div class="col-md-6 my-2">
          <div class="card">
            <img src="img/enz.jpg" class="card-img-top 	img-fluid mb-2">
          <h4 >
            エンジニア案件
          </h4>
          <p class="text-faded mb-0　 p-2">
            <small>HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件。常駐からリモートワーク、週1~から柔軟に対応します。</small>
          </p>
        </div>
      </div>

      <div class="col-md-6 my-2">
        <div class="card">
          <img src="img/code.jpg" class="card-img-top 	img-fluid mb-2">
        <h4 >
          Web制作
        </h4>
        <p class="text-faded mb-0　 p-2">
          <small>コーポレートサイトやランディング
            ページなどのweb制作も行っております。納品後も誰でも更新しやすいように、制作しておりますののでお問い合わせください。</small>

          </p>
        </div>
      </div>

      <div class="col-md-6 my-2">
        <div class="card ">
          <img src="img/hosyu.jpg" class="card-img-top 	img-fluid mb-2">
        <h4>
          運用・保守
        </h4>
        <p class="text-faded p-2 ">
          <small>システムの安定稼働のために、システムの運用・保守サービスをご提供いたします。</small>
        </p>
      </div>
    </div>

    <div class="col-md-6 my-2">
      <div class="card  ">
        <img src="img/responsive.jpg" class="card-img-top img-fluid mb-2">
      <h4>
        レスポンシブ対応
      </h4>
      <p class="text-faded p-2 ">
        <small> レスポンシブ対応の作成して、
          どの端末からでも見やすいサイトを作成します。</small>
        </p>
      </div>

    </div>
  </div>
</div>
</section>



<!-- bar -->
<!-- <div >
  <img class="img-fluid" src="{{asset('img/bar.jpg')}}" alt="">
</div> -->

<!-- Portfolio -->
<a id="portfolio" class="anchor "></a>
<section class="bg-dark">
  <div class="container ">
    <div class=" text-center">
      <h6 class="text-primary mb-1">Portfolio</h6>
      <h2 class=" text-light"><strong>制作物一覧</strong></h2>
    </div>
    <div class="row">
      <!-- シロクマ -->
      <div class="col-md-6 my-2">
        <div class="card">
          <p　style="font-size:3vw;">シロクマのテック</p>
          <img src="{{asset('img/shirokuma.png')}}" class="bd-placeholder-img card-img-top" alt="シロクマのテックサムネイル">
          <div class="card-body">
            <!-- <small class="card-text">javascriptを使用して、
            画像などのアニメーションなどを意識して作成したコーポレートサイト風のサイトです。レスポンシブにも対応しています。
          </small> -->
          <div class="text-center">
            <button type="button" class="btn btn-outline-primary ">
              <a href="http://shirokuma-tec.work/">
                サイトへ<i class="fas fa-arrow-right"></i>
              </a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- プロフィールアプリ -->
    <div class="col-md-6 my-2">
      <div class="card">
        <img src="{{asset('img/profile.png')}}" class="bd-placeholder-img card-img-top" alt="プロフィールアプリサムネイル">
        <div class="card-body">
          <h5 class="card-title">プロフィールアプリ</h5>
          <!-- <small class="card-text" >laravelを使って開発した、基本的なCRUD機能のあるプロフィール作成アプリです。
          名前、ウェブサイト、自己紹介文などの登録が可能です。
        </small> -->
        <div class="text-center">
          <button type="button" class="btn btn-outline-primary ">
            <a href="http://shirokuma.sakura.ne.jp/introproj/intro">
              サイトへ<i class="fas fa-arrow-right"></i>
            </a>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!--ボタン   -->
  <div class="col-md-6 my-2">
    <a href="{{asset('profile')}}" class="btn btn-outline-primary card border border-primary">
      <strong>Skill set <i class="fas fa-arrow-right"></i></strong>
    </a>
  </div>
  <div class="col-md-6 my-2">
    <a href="https://www.wantedly.com/user/profile/edit" class="btn btn-outline-primary card border border-primary">
      <strong>wantedly <i class="fas fa-arrow-right"></i></strong>
    </a>
  </div>
</div>
</div>
</section>