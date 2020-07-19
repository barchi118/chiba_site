@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

@endsection

@section('content')
<div class="container" style="margin-top: 30px;">
    <div class="alert alert-success" role="alert">お問い合わせが完了しました。</div>
<!-- footer -->
<footer id="contact" class="footer text-center  py-5">
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
          <i class="fab fa-github fa-3x m-2"></i>
        </a>
      </li>
    </ul>
    <p class="text-muted small mb-3">Copyright &copy; Chiba portfolio 2020</p>
  </div>
</footer>


@endsection
