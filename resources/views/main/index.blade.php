@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')


<div class="fixed-top bg-white border　"  >
  <nav class="navbar navbar-expand-lg navbar-dark p-0 m-0　nav d-flex justify-content-center" >
    <div class="nav-logo  d-lg-none d-xl-none"></div>
    <!-- <div class="navbar-nav text-dark d-flex justify-content-end ">
    <a class="nav-item nav-link  text-dark float-right" href="https://twitter.com/barchi118">
    <small><i class="fab fa-twitter fa-2x mr-1"></i>Twitter</small>
  </a>
  <a class="nav-item nav-link text-dark  float-right" href="https://github.com/barchi118">
  <small><i class="fab fa-github fa-2x mr-1"></i>Github</small>
</a>
</div> -->
<button class="navbar-toggler border border-primary  btn-primary justify-content-end ml-2 " type="button"
data-toggle="modal" data-target="#modal1"
aria-controls="navmenu1"
aria-expanded="false"
aria-label="Toggle navigation">
<div class="text-primary"><i class="fas fa-bars  "></i></div>

</button>
<div class="navbar  collapse   navbar-collapse text-dark justify-content-center " >
  <div class="navbar-nav text-dark ">
    <div class="nav-logo  "></div>
    <a class="nav-item nav-link  text-dark js-scroll-trigger mx-3" href="#top">Top</a>
    <a class="nav-item nav-link text-dark js-scroll-trigger mx-3" href="#about">About</a>
    <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="#services">Services</a>
    <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="#portfolio">Portfolio</a>
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
        <div class="nav-logo"></div>

        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="list-group">
          <a href="#top" class="js-scroll-trigger list-group-item list-group-item-action">
            Top
          </a>
          <a href="#about" class="js-scroll-trigger list-group-item list-group-item-action">
            About
          </a>
          <a href="#services" class="js-scroll-trigger list-group-item list-group-item-action">
            services
          </a>
          <a href="#portfolio" class="js-scroll-trigger list-group-item list-group-item-action">
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
</body>


<!-- Top -->
<a id="top" class="anchor"></a>
<section>
  <!-- pc用 -->
  <div class="pt-4  container ">
    <div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-ride="carousel" style="">
      <div class=" carousel-inner pt-4">
        <!-- slide1 -->
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-item active ">
          <div class="row ">
            <div class="col-lg-3 d-flex align-items-center ">
              <div class="d-flex align-items-center ">
                <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                  <div class="p-2 pt-4 bd-highlight font-weight-bold slide-title"  >
                    <h6 class="border-bottom border-primary d-inline-block">About Me</h6>
                    <h2>PROFILE</h2>
                  </div>
                    <div class="p-2 bd-highlight ">
                      <a type="button" href="#about" style=""
                        class=" btn btn-outline-primary text-primary js-scroll-trigger" >
                        click
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 bg-primary pl-0 ">
                <img src="{{asset('img/slide/slide1-pc.jpg')}}" alt="First slide" class="img-fluid">
              </div>
            </div>
          </div>
          <!-- slide2 -->
          <div class="carousel-item  ">
            <div class="row ">
              <div class="col-lg-9  ">
                <img src="{{asset('img/slide/slide2-pc.jpg')}}" alt="Second slide" class="img-fluid">
              </div>
              <div class="col-lg-3 pl-0 my-auto">
                <div class=" ">
                <div class="  " >
                  <div class="p-2 pt-4 font-weight-bold slide-title" >
                    <h6 class="border-bottom border-primary d-inline-block"s>Service</h6>
                    <h2>Business</h2>
                  </div>
                    <div class="p-2 bd-highlight ">
                      <a type="button" href="#services"
                        class=" btn btn-outline-primary text-primary js-scroll-trigger">
                        click
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- slide3 -->
          <div class="carousel-item  ">
            <div class="row ">
              <div class="col-3 d-flex align-items-center ">
              <div class="d-flex align-items-center text-leftcol-12">
                <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                  <div class=" pt-4 bd-highlight font-weight-bold slide-title">
                    <h6 class="border-bottom border-primary d-inline-block">Portfolio list</h6>
                    <h2>Product</h2> 
                    </div>
                    <div class="p-2 bd-highlight ">
                      <a type="button" href="#portfolio"
                        class="btn btn-outline-primary text-primary js-scroll-trigger ">
                        click
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-9 bg-primary pl-0 ">
                <img src="{{asset('img/slide/slide3-pc.jpg')}}" alt="First slide" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--レスポンシブ -->
      <div id="carouselExampleIndicators" class=" carousel slide d-block d-lg-none" data-ride="carousel" style="">
      <div class=" carousel-inner pt-4">
        <!-- slide1 -->
        <div class="carousel-item active ">
          <div class="row ">
              <div class="col-lg-9 bg-primary pl-0 ">
                <img src="{{asset('img/slide/slide1-pc.jpg')}}" alt="First slide" class="img-fluid">
              </div>
              <div class="col-lg-3  ">
                <div class="d-flex justify-content-center" >
                  <div class="p-2 pt-4  font-weight-bold slide-title text-center"  >
                    <h2>PROFILE</h2>
                    <h6 class="border-bottom border-primary d-inline-block">About Me</h6>
                    <p></p>
                  </div>
                    <div class="p-2  ">
                      <!-- <a type="button" href="#about" style=""
                        class=" btn btn-outline-primary text-primary js-scroll-trigger" >
                        click
                      </a> -->
                    </div>
              </div>
            </div>
          </div>
          <!-- slide2 -->
          <!-- <div class="carousel-item  ">
            <div class="row ">
              <div class="col-lg-9  ">
                <img src="{{asset('img/slide/slide2-pc.jpg')}}" alt="Second slide" class="img-fluid">
              </div>
              <div class="col-lg-3 pl-0 my-auto">
                <div class=" ">
                <div class="  " >
                  <div class="p-2 pt-4 font-weight-bold slide-title" >
                    <h6 class="border-bottom border-primary d-inline-block"s>Service</h6>
                    <h2>Business</h2>
                  </div>
                    <div class="p-2 bd-highlight ">
                      <a type="button" href="#services"
                        class=" btn btn-outline-primary text-primary js-scroll-trigger">
                        click
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- slide3 -->
          <!-- <div class="carousel-item  ">
            <div class="row ">
              <div class="col-3 d-flex align-items-center ">
              <div class="d-flex align-items-center text-leftcol-12">
                <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                  <div class=" pt-4 bd-highlight font-weight-bold slide-title">
                    <h6 class="border-bottom border-primary d-inline-block">Portfolio list</h6>
                    <h2>Product</h2> 
                    </div>
                    <div class="p-2 bd-highlight ">
                      <a type="button" href="#portfolio"
                        class="btn btn-outline-primary text-primary js-scroll-trigger ">
                        click
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-9 bg-primary pl-0 ">
                <img src="{{asset('img/slide/slide3-pc.jpg')}}" alt="First slide" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- レスポンシブここまで -->
    </div>

    <!-- スマホ用 -->
  </section>

  <!-- infomation -->
  <section class="container-fluid" style="">

    <div class="row " >
      <div class="col-4 bg-primary d-flex justify-content-end ">
        <div class="my-auto">
          <small>重要なお知らせ</small>
        </div>
      </div>
      <div class="col-8 bg-secondary " >
        <ul style="list-style:none"class="my-1 pl-0"　>
          <li class="">
            <a href="http://ec2-18-220-251-230.us-east-2.compute.amazonaws.com/" class="text-black ">
            <small class="text-white">Twitterクローンをデプロイしました。</small>
          </a>
          </li>
          <li class=><a href="" class="text-black"><small class="text-white">新型コロナウィルスの対応</small></a></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- About -->
  <a id="about" class="anchor"></a>
  <section class=" about-bg">
    <div class="container text-center  ">
      <div class="row">
        <div class="col-lg-10 mx-auto ">
          <div class="mb-3">
            <h6 class="text-primary mb-1 mt-3">About</h6>
            <h2 class=" text-light" style="font-weight:bold;">自己紹介</h2>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <span class="  text-center" style="">
                <img src="{{asset('img/icon.jpg')}}" alt="chiba-icon"class="mx-auto img-fluid rounded-circle d-none  d-md-block">
                <img src="{{asset('img/icon.jpg')}}" alt="chiba-icon"class="mx-auto rounded-circle d-sm-block d-md-none " width="200px">
              </span>
              <span class="text-center">
              </span>
            </div>
            <div class="col-lg-8">
              <table class="table text-light " style="text-align:left;">
                <tr>
                  <td scope="col" style="font-size:1vw;">名前</td>
                  <td scope="col" style="font-size:1vw;">Chiba Seiya</td>
                </tr>
                <tr>
                  <td nowrap scope="row" style="font-size:1vw;">出身</td>
                  <td style="font-size:1vw;">神奈川県（東京都に在住）</td>
                </tr>
                <tr>
                  <td scope="row" style="font-size:1vw;">学歴</td>
                  <td style="font-size:1vw;">日本大学文理学部数学科</td>
                </tr>
                <tr>
                  <td scope="row" style="font-size:1vw;">活動</td>
                  <td style="font-size:1vw;">友人がエンジニアスクールを始めたのをきっかけに、自分でアプリ開発やweb制作することに興味を持ち現在はlaravelを使ってtwitter風サイトの開発などをしています。</td>
                </tr>
                <tr>
                  <td scope="" style="font-size:1vw;">その他</td>
                  <td style="font-size:1vw;">三年程営業職をしていたため、インサイドセールやナーチャリングについて詳しいです。</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- Services -->
    <a id="services" class="anchor"></a>
    <section>
      <!-- pc用 -->
      <div class="container d-none d-lg-block">
        <div class="row">
          <div class="col-lg-8  ">
            <h6 class="mb-1  mt-3 text-primary">servers</h6>
            <h1 class=" border-bottom d-inline border-primary mb-1" style="font-weight:bold;">事業内容</h1>
            <div>
              <small class="pt-3 d-block">対応している業務について記載してます。</small>
            </div>

            <div class="col-lg-12 pt-2 " style="padding:0;">
              <ul style="padding:0;text-align:center; ">
                <li  style="display:inline-block;width:30%;padding-bottom:2vh;float:left;" data-aos="fade-right" data-aos-duration="800">
                  <h6 style="color:#212529;font-size:2vw;">エンジニア案件</h6>
                  <p style="font-size: 14px; color:black;line-height:2;padding-top:2vh;">
                    HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件。常駐からリモートワーク、週1~から柔軟に対応します。
                  </p>
                </li>
                <li  style="display:inline-block;width:35%;padding:0 1vw 2vh 1vw;border-right:solid 1px #666;border-left:solid 1px #666;" data-aos="fade-up" data-aos-duration="1200">
                  <h4 style="color:#212529;font-size:2.2vw;">Web制作</h4>
                  <p style="font-size: 14px;color:black;line-height:2;padding-top:2vh;">
                    コーポレートサイトやランディング
                    ページなどのweb制作も行っております。納品後も誰でも更新しやすいように、制作しておりますののでお問い合わせください。
                  </p>
                </li>
                <li  style="display:inline-block;width:30%;padding-bottom:2vh;float:right;" >
                  <h4 style="color:#212529;font-size:2.2vw;">レスポンシブ</h4>
                  <p style="font-size: 14px;color:black;line-height:2;padding-top:2vh;">レスポンシブ対応の作成して、
                    どの端末からでも見やすいサイトを作成します</p>
                </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 pl-0">
              <img src="{{asset('img/services/bg-pc.jpg')}}" alt="" class="">
              </div>
          </div>
          </div>

          <!-- レスポンシブ -->
          <div class="d-block d-lg-none ">
        <div class="row">
          <div class="col-md-12  ">
            <h6 class="mb-1  mt-3 text-primary">servers</h6>
            <h1 class=" border-bottom d-inline border-primary mb-1" style="font-weight:bold;">事業内容</h1>
            <div>
              <small class="pt-3 d-block">対応している業務について記載してます。</small>
            </div>
            <img src="{{asset('img/services/bg-mb.jpg')}}" alt="" class="img-fluid" style="width:100%;">
            <div class="col-lg-12 pt-2 " style="padding:0;">
              <ul class="pl-0">
                <li  style="display:inline-block;" class="float-left  border-bottom p-1" >
                  <h6  class="text-left"><small>エンジニア案件</small></h6>
                  <p style="font-size: 14px;color:black;line-height:2;　class="text-left">HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件。常駐からリモートワーク、週1~から柔軟に対応します。</p>
                </li>
                <li  style="display:inline-block;" class="float-left border-top border-bottom p-1" >
                  <h6  class="text-left"><small>Web制作</small></h6>
                  <p style="font-size: 14px;color:black;line-height:2;"　class="text-left">コーポレートサイトやランディング
                    ページなどのweb制作も行っております。納品後も誰でも更新しやすいように、制作しておりますののでお問い合わせください。</p>
                </li>
                <li  style="display:inline-block;" class="float-left border-top border-bottom p-1" >
                  <h6  class="text-left"><small>レスポンシブ</small></h6>
                  <p style="font-size: 14px;color:black;line-height:2;"　class="text-left">レスポンシブ対応の作成して、
                    どの端末からでも見やすいサイトを作成します</p>
                </li>
                </ul>
              </div>
            </div>
        </section>

        <!-- portfolio -->
        <a id="portfolio" class="anchor "></a>
        <section>
          <div class="container d-none d-lg-block">
            <div class="row d-flex ">
              <div class="col-4">
              <img src="{{asset('img/portfolio/bg-pc.jpg')}}" alt="" >
              </div>
              <div class="col-8 bg-white  py-3">
                <h6 class="text-primary">Portfolio</h6>
                <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">制作実績</h1>
                  <small class="mt-3 d-block">今まで経験してきた開発現場についてやポートフォリオの一覧を記載しております。</small>
                <div class="row d-flex justify-content-end mr-3">
                  <div class="col-4 bg-light mr-3 text-left px-0 " style="font-size: 18px;">
                    <img src="{{asset('img/portfolio/chibakari.jpg')}}" alt="" width="75px" class="" >
                    <small>メルカリクローン</small>
                  </div>
                  <div class="col-4 bg-light mr-3 text-left px-0" style="font-size: 18px;">
                    <a href="">
                      <img src="{{asset('img/portfolio/twitter.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark">Twitterクローン</small>
                    </a>
                  </div>
                </div>
                <div class="row d-flex justify-content-end mt-3 mr-3">
                  <div class="col-4 bg-light mr-3 text-left px-0" style="font-size: 18px;">
                    <a href="{{asset('profile')}}">
                      <img src="{{asset('img/portfolio/skillset.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark">Skill set</small>
                    </a>
                  </div>
                  <div class="col-4 bg-light mr-3 text-left px-0" style="font-size: 18px;">
                    <a href="https://www.wantedly.com/user/profile/edit">
                      <img src="{{asset('img/portfolio/wantedly.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark">Wantedly</small>
                    </a>
                  </div>

                </div>
              </div>
            </div>
          </div>


          <!-- レスポンシブ -->
          <div class=" d-lg-none d-sm-block">
            <div class=" ">
              <div class="col-12 bg-white  py-3">
                <h6 class="text-primary">Portfolio</h6>
                <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">制作実績</h1>
                  <small class="mt-3 d-block">今まで経験してきた開発現場についてやポートフォリオの一覧を記載しております。</small>
                <div class="row d-flex justify-content-center mx-auto">
                  <div class="col-lg-4 bg-light mt-2 text-left px-0 " style="font-size: 18px;">
                    <img src="{{asset('img/portfolio/chibakari.jpg')}}" alt="" width="75px" class="" >
                    <small>メルカリクローン</small>
                  </div>
                  <div class="col-lg-4 bg-light text-left px-0 mt-2" style="font-size: 18px;">
                    <a href="">
                      <img src="{{asset('img/portfolio/twitter.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark">Twitterクローン</small>
                    </a>
                  </div>
                </div>
                <div class="row d-flex justify-content-center mx-auto">
                  <a href="{{asset('profile')}}">
                    <div class="col-lg-4 bg-light mt-2 text-left px-0 " style="font-size: 18px;">
                    <img src="{{asset('img/portfolio/skillset.jpg')}}" alt="" width="75px" class="" >
                    <small>スキルシート</small>
                  </a>
                  </div>
                  <div class="col-lg-4 bg-light text-left px-0 mt-2" style="font-size: 18px;">
                    <a href="https://www.wantedly.com/user/profile/edit">
                      <img src="{{asset('img/portfolio/wantedly.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark">Wantedly</small>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        </section>




        <!-- Footer -->
        <footer id="contact" class="footer text-center bg-light text-dark py-1">
          <div class="container text-center ">
            <h6 class="text-primary mb-1">Contact</h6>
            <h2 class="mb-2">お問い合わせ</h2>
            <div class="mb-1" style="font-size:1vw;">制作の依頼・ご相談（無料）などは
              コンタクトフォームまたはツイッターDMでご連絡ください。</div>
              <ul class="list-inline ">
                <!-- mail -->
                <li class="list-inline-item">
                  <a class="rounded-circle bg-primary btn  text-light  mr-3" href="{{asset('mail')}}"" target=”_blank”>
                    <i class="fas fa-envelope fa-2x "></i>
                  </a>
                </li>
                <!-- twitter -->
                <li class="list-inline-item">
                  <a class=" rounded-circle bg-primary btn  text-light mr-3" href="https://twitter.com/barchi118" target=”_blank”>
                    <i class="fab fa-twitter fa-2x "></i>
                  </a>
                </li>
                <!-- git hub -->
                <li class="list-inline-item">
                  <a class="rounded-circle bg-primary btn  text-light" href="https://github.com/barchi118" target=”_blank”>
                    <i class="fab fa-github fa-2x "></i>
                  </a>
                </li>
              </ul>
              <p class="text-muted small mb-3" style="font-size:1vw;">Copyright &copy; Chiba portfolio 2020</p>
            </div>
          </footer>



          <!-- Bootstrap core JavaScript -->
          <script src="{{asset('js/jquery.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
          <!-- Plugin JavaScript -->
          <script src="{{asset('js/jquery.easing.min.js')}}"></script>
          <!-- Custom scripts for this template -->
          <script src="{{asset('js/stylish-portfolio.min.js')}}"></script>

          @endsection
