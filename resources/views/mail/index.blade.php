@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')

<!-- Header -->
<header class="masthead d-flex">
  <div class="container  text-dark my-auto">
    <h1 class="mb-1">Contact</h1>
  </div>
  <div class="overlay"></div>
</header>

<!-- form -->
<section class=" bg-dark id="portfolio">
  <div class="container">
    <div class="card">
      <h5 class="card-header text-center">問い合わせフォーム</h5>
      <form class="form-horizontal" role="form" method="post" action="{{url('mail')}}">
        @csrf
        <div class="form-group">
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
        <div class=" text-center ">
          <button class="btn btn-lg btn-primary center-block " type="submit">送信</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- footer -->
<footer id="contact" class="footer text-center">
  <div class="container text-center ">
    <h6 class="text-primary mb-0">Contact</h6>
    <h2 class="mb-3">お問い合わせ・SNS</h2>
    <div class="h5">制作の依頼・ご相談（無料）などは
      コンタクトフォームまたはツイッターDMでご連絡ください。</div>
      <ul class="list-inline my-5">
        <!-- twitter -->
        <li class="list-inline-item">
        <a class=" rounded-circle bg-primary btn  text-light mr-3" href="https://twitter.com/barchi118" target=”_blank”>
          <i class="fab fa-twitter fa-3x m-2"></i>
        </a>
        </li>
        <!-- git hub -->
        <li class="list-inline-item">
        <a class="rounded-circle bg-primary btn  text-light" href="https://github.com/barchi118" target=”_blank”>
          <i class="fab fa-github fa-2x mx-2"></i>
        </a>
      </li>
    </ul>
    <p class="text-muted small mb-3">Copyright &copy; Chiba portfolio 2020</p>
  </div>
</footer>
  @endsection
