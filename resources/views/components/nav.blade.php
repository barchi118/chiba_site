<div class="fixed-top bg-white border"  >
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
      <a class="nav-item nav-link  text-dark js-scroll-trigger mx-3" href="#top">Top</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3" href="#about">About</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="#services">Services</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="#portfolio">Portfolio</a>
      <a class="nav-item nav-link text-dark js-scroll-trigger mx-3"  href="#skilset">Skill set</a>
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