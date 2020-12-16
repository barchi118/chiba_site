@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')


@component('components.nav')
@endcomponent







<!-- Top -->
<a id="top" class="anchor"></a>
<section>
  <!-- pc用 -->
  <div class="pt-4  container  ">
    <div id="carouselExampleIndicators" class="carousel slide p-0 m-0  d-none d-lg-block" data-ride="carousel" style="">
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

          </div>
        </div>
      </div>
    </div>
<!-- レスポンシブここまで -->
</div>

<!-- スマホ用 -->
</section>

<!-- infomation -->
<section class="container-fluid" style="">

  <div class="row " >
    <div class="col-4 bg-primary d-flex justify-content-end ">
      <div class="my-auto text-white float-left">
        重要なお知らせ
      </div>
    </div>
    <div class="col-8 bg-secondary " >
      <ul style="list-style:none"class="my-1 pl-0">
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
<section class=" ">
<!-- about-bg -->
  <div class="container text-center  ">
    <div class="row">
      <div class="col-lg-10 mx-auto ">
        <div class="mb-3">
          <h6 class="text-primary mb-1 mt-3">About</h6>
          <h2 class=" d-inline border-primary border-bottom" style="font-weight:bold;">自己紹介</h2>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <span class="  text-center" style="">
              <img src="{{asset('img/icon.jpg')}}" alt="chiba-icon"class="mx-auto img-fluid rounded-circle d-none  d-lg-block" width="800px">
              <img src="{{asset('img/icon.jpg')}}" alt="chiba-icon"class="mx-auto rounded-circle d-sm-block d-lg-none " width="200px">
            </span>
            <span class="text-center">
            </span>
          </div>
          <div class="col-lg-8"style="font-size: 14px; color:black;line-height:2;">
            <table class="table " style="text-align:left;">
              <tr class="table-primary">
                <td scope="col" style="font-size: 14px;font-weight:bold; ">名前</td>
                <td scope="col" style="font-size: 14px; ">Chiba Seiya</td>
              </tr>
              <tr>
                <td nowrap scope="row" style="font-size: 14px; font-weight:bold;">出身</td>
                <td style="font-size: 14px; ">神奈川県（東京都に在住）</td>
              </tr>
              <tr class="table-primary">
                <td scope="row" style="font-size: 14px; font-weight:bold;">学歴</td>
                <td style="font-size: 14px; ">日本大学文理学部数学科</td>
              </tr>
              <tr>
                <td scope="row" style="font-size: 14px; font-weight:bold;">活動</td>
                <td style="font-size: 14px; ">友人がエンジニアスクールを始めたのをきっかけに、自分でアプリ開発やweb制作することに興味を持ち現在はlaravelを使ってtwitter風サイトの開発などをしています。</td>
              </tr>
              <tr class="table-primary">
                <td scope="row" style="font-size: 14px;font-weight:bold; ">他</td>
                <td style="font-size: 14px; ">三年程営業職をしていたため、インサイドセールやナーチャリングについて詳しいです。</td>
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
            <small class="pt-3 d-block" style="font-size: 14px;">対応している業務について記載してます。</small>
          </div>

          <div class="col-lg-12 pt-2 " style="padding:0;">
            <ul style="padding:0;text-align:center; ">
              <li  style="display:inline-block;width:30%;padding-bottom:2vh;float:left;" data-aos="fade-right" data-aos-duration="800">
                <h6 style="color:#212529;font-size:2vw;">エンジニア案件</h6>
                <p style="font-size: 14px; color:black;line-height:2;padding-top:2vh;">
                  HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件。常駐からリモートワーク、週1~から柔軟に対応します。
                </p>
              </li>
              <li  class="border-left border-right border-primary"
              style="display:inline-block;width:35%;padding:0 1vw 2vh 1vw;" data-aos="fade-up" data-aos-duration="1200">
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
      <div class=" d-lg-none d-sm-block">
        <div class="px-3 ">
          <div class="col-12 bg-white  py-3">
            <h6 class="text-primary">Servers</h6>
            <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">事業内容</h1>
            <small class="mt-3 d-block mb-2" style="font-size: 14px;">対応している業務について記載してます。</small>
            <div class="row d-flex justify-content-center mx-auto">
              <ul class="pl-0">
                <li  style="display:inline-block;" class="float-left  border-top border-primary pt-1" >
                  <h6  class="text-left"><strong>エンジニア案件</strong></h6>
                  <p style="font-size: 14px;color:black;line-height:2;　class="text-left">HTML,CSS,javascript等を使ったフロントエンドの案件やPHPなどを使ったサーバーサイド案件。常駐からリモートワーク、週1~から柔軟に対応します。</p>
                </li>
                <li  style="display:inline-block;" class="float-left border-top border-primary  pt-1" >
                  <h6  class="text-left"><strong>Web制作</strong></h6>
                  <p style="font-size: 14px;color:black;line-height:2;"　class="text-left">コーポレートサイトやランディング
                    ページなどのweb制作も行っております。納品後も誰でも更新しやすいように、制作しておりますののでお問い合わせください。</p>
                  </li>
                  <li  style="display:inline-block;" class="float-left border-top border-bottom border-primary pt-1" >
                    <h6  class="text-left"><strong>レスポンシブ</strong></h6>
                    <p style="font-size: 14px;color:black;line-height:2;"　class="text-left">レスポンシブデザイン対応のサイト作成しており、
                      スマホ専用やパソコン、タブレットどの端末から見ても見やすい最適なサイトを作成します。</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- portfolio -->
        <a id="portfolio" class="anchor "></a>
        <section>
          <div class="container d-none d-lg-block">
            <div class="row  ">
              <div class="col-4">
                <img src="{{asset('img/portfolio/bg-pc.jpg')}}" alt=""height="300px"  >
              </div>
              <div class="col-8 bg-white  py-3">
                <h6 class="text-primary">Portfolio</h6>
                <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">制作実績</h1>
                <small class="mt-3 d-block">今まで経験してきた開発現場についてやポートフォリオの一覧を記載しております。メルカリクローンは開発中です。</small>
                <div class="row d-flex justify-content-end mr-3">
                  <div class="col-4 bg-light mr-3 text-left px-0 " style="font-size: 18px;">
                    <img src="{{asset('img/portfolio/chibakari.jpg')}}" alt="" width="75px" class="">
                    <small class="border-bottom border-primary">メルカリクローン</small>
                  </div>
                  <div class="col-4 bg-light mr-3 text-left px-0" style="font-size: 18px;">
                    <a style="text-decoration:none;" 
                    href="http://ec2-18-220-251-230.us-east-2.compute.amazonaws.com/guests">
                      <img src="{{asset('img/portfolio/twitter.jpg')}}" alt="" width="75px" class="" >
                      <small class="text-dark border-bottom border-primary">Twitterクローン</small>
                    </a>
                  </div>
                  <div class="col-4 bg-light mr-3 text-left px-0 mt-3" style="font-size: 18px;">
                    <a href="http://stg-stock.work/" style="text-decoration:none;">
                    <img src="{{asset('img/portfolio/stock.jpg')}}" alt="" width="75px" class="">
                    <small class="text-dark border-bottom border-primary"> 在庫管理アプリ</small>
                    </a>
                  </div>
                  <div class="col-4 bg-light mr-3 text-left px-0 mt-3" style="font-size: 18px;">
                    <img src="{{asset('img/portfolio/coming.jpg')}}" alt="" width="75px" class="">
                    <small class="border-bottom border-primary">Coming Soon</small>
                  </div>
                </div>
                <div class="row d-flex justify-content-end mt-3 mr-3">
                </div>
              </div>
            </div>
          </div>


          <!-- レスポンシブ -->
          <div class=" d-lg-none d-sm-block">
            <div class="px-3 ">
              <div class="col-12 bg-white  py-3">
                <h6 class="text-primary">Portfolio</h6>
                <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">制作実績</h1>
                <small class="mt-3 d-block">今まで経験してきた開発現場についてやポートフォリオの一覧を記載しております。メルカリクローンは開発中です。</small>
                <div class="row d-flex justify-content-center mx-auto">
                  <div class="col-lg-4 bg-light mt-2 text-left px-0 " style="font-size: 18px;">
                    <a href="" style="text-decoration:none;">
                    <img src="{{asset('img/portfolio/chibakari.jpg')}}" alt="" width="75px" class="" >
                    <small class="text-dark border-bottom border-primary">メルカリクローン</small>
                    </a>
                  </div>
                  <div class="col-lg-4 bg-light text-left px-0 mt-2" style="font-size: 18px;">
                    <a href="http://ec2-18-220-251-230.us-east-2.compute.amazonaws.com/guests" 
                    style="text-decoration:none;">
                      <img src="{{asset('img/portfolio/twitter.jpg')}}" alt="" width="75px" class="" >
                      <small class="text-dark border-bottom border-primary">Twitterクローン</small>
                    </a>
                  </div>
                  <div class="col-lg-4 bg-light text-left px-0 mt-2" style="font-size: 18px;">
                    <a href="http://stg-stock.work/" style="text-decoration:none;">
                      <img src="{{asset('img/portfolio/stock.jpg')}}" alt="" width="75px" class="" >
                      <small class="text-dark border-bottom border-primary">在庫管理アプリ</small>
                    </a>
                  </div>
                  
                </div>
              </div>
            </div>
          </section>

          <!-- Skillset -->
          <a id="skillset" class="anchor "></a>
          <section>
            <div class="container d-none d-lg-block">
              <div class="row  ">
                <div class="col-12 bg-white  py-3">
                  <h6 class="text-primary">Skill set</h6>
                  <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">スキルシート</h1>
                  <small class="my-3 d-block">スキルセットをまとめております。「スキルシート詳細」から詳しいプロフィールやwantedlyにて職歴などをまとめております。</small>
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                      <table class="table text-black " style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>言語</strong></td>
                          <td scope="col" style="font-size: 14px;font-weight:bold; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">PHP</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">HTML</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">CSS</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr  >
                          <td scope="" style="font-size: 14px; ">JavaScript</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>FW・ライブラリー</strong></td>
                          <td scope="col" style="font-size: 14px;font-weight:bold; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">React</td>
                          <td style="font-size: 14px; ">1カ月</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Laravel</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Jquery</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr  >
                          <td scope="" style="font-size: 14px; ">Cakephp</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>データベース</strong></td>
                          <td scope="col" style="font-size: 14px;font-weight:bold; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">Mysql</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Sqlite</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">RDS</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>開発環境</strong></td>
                          <td scope="col" style="font-size: 14px;font-weight:bold; ">学習年数</td>
                        </tr>
                        <tr >
                          <td nowrap scope="row" style="font-size: 14px; ">Windows10</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Linux</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr >
                          <td scope="row" style="font-size: 14px; ">AWS(EC2)</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-center ">
                    <a href="{{asset('profile')}}" style="text-decoration:none;">
                      <div class="col-md-5 bg-light mt-2 text-left px-0  mr-3" style="font-size: 18px;">
                        <img src="{{asset('img/portfolio/skillset.jpg')}}" alt="" width="76px" class="" >
                        <small class="text-dark border-bottom border-primary" style="font-weight:bold;">スキルシート詳細</small>
                      </a>
                    </div>
                    <div class="col-md-5 bg-light text-left px-0 mt-2 " style="font-size: 18px;">
                      <a href="https://www.wantedly.com/users/130963693" style="text-decoration:none;">
                        <img src="{{asset('img/portfolio/wantedly.jpg')}}" alt="" width="75px" class="" >
                        <small class="text-dark border-bottom border-primary "
                        style="text-decoration:none;">Wantedly</small>
                      </a>
                    </div>
                </div>
              </div>
            </div>
              </section>

              <!-- レスポンシブ -->
             <div class=" d-lg-none d-sm-block">
              <div class="p-3 ">
                <div class="col-12 bg-white  py-3">
                  <h6 class="text-primary">Skill set</h6>
                  <h1 class=" border-bottom d-inline border-primary" style="font-weight:bold;">スキルシート</h1>
                  <small class="my-3 d-block">スキルセットをまとめております。「スキルシート詳細」から詳しいプロフィールやwantedlyにて職歴などをまとめております。</small>
                  <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                      <table class="table text-blackcol-md-4" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>言語</strong></td>
                          <td scope="col" style="font-size: 14px; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">PHP</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">HTML</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">CSS</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr  >
                          <td scope="" style="font-size: 14px; ">JavaScript</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>FW・ライブラリー</strong></td>
                          <td scope="col" style="font-size: 14px; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">React</td>
                          <td style="font-size: 14px; ">1カ月</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Laravel</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Jquery</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr  >
                          <td scope="" style="font-size: 14px; ">Cakephp</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>DB</strong></td>
                          <td scope="col" style="font-size: 14px; ">学習年数</td>
                        </tr>
                        <tr>
                          <td nowrap scope="row" style="font-size: 14px; ">Mysql</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Sqlite</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">RDS</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>

                    <div class="col-md-6">
                      <table class="table text-black" style="text-align:left;">
                        <tr>
                          <td scope="col" style="font-size: 18px; " class="text-primary"><strong>開発環境</strong></td>
                          <td scope="col" style="font-size: 14px; ">学習年数</td>
                        </tr>
                        <tr >
                          <td nowrap scope="row" style="font-size: 14px; ">Windows10</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr>
                          <td scope="row" style="font-size: 14px; ">Linux</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                        <tr >
                          <td scope="row" style="font-size: 14px; ">AWS(EC2)</td>
                          <td style="font-size: 14px; ">1年</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="row d-flex justify-content-center ">
                   <!-- cccここにいれる -->
                   <div class="col-sm-6">
                    <a href="{{asset('profile')}}" style="text-decoration:none;">
                      <div class=" bg-light mt-2 text-left px-0  mr-3" style="font-size: 16px;">
                        <img src="{{asset('img/portfolio/skillset.jpg')}}" alt="" width="76px" class="" >
                        <small class="text-dark border-bottom border-primary">スキルシート詳細</small>
                        </div>
                      </a>
                   </div>
                   <div class="col-sm-6">
                    <a href="https://www.wantedly.com/users/130963693" style="text-decoration:none;">
                      <div class=" bg-light mt-2 text-left px-0  mr-3" style="font-size: 16px;">
                        <img src="{{asset('img/portfolio/wantedly.jpg')}}" alt="" width="76px" class="" >
                        <small class="text-dark border-bottom border-primary">Wantedly</small>
                      </a>
                   </div>
                   </div>

                  </div>
              </div>
            </div>
          </div>


              <!-- Footer -->
              @component('components.footer')
              @endcomponent



                @endsection
