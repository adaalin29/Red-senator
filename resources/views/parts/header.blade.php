<header id="header" class="{{ Request::is('/') ? '' : 'menu-black' }}">

  <div class="menu">
    <div id="logo">
      <a href="/">
                     <img  src="{{ Voyager::image(setting('site.logo')) }}" alt="Smiley face"/>
                     </a>
    </div>
    <div class="menu-mobile" onclick="changeMenu(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <ul class="topmenu" id="left-menu">
        <li class="menulist"><a class="{{ Request::is('/') ? 'link-activ' : '' }}" href="/">Home</a></li>
        <li class="menulist"><a class="{{ Request::is('news') ? 'link-activ' : '' }}" href="/news">News</a></li>
        <li class="menulist"><a class="{{ Request::is('dogs/boys') ? 'link-activ' : '' }}" href="/dogs/boys">Boys</a></li>
        <li class="menulist"><a class="{{ Request::is('dogs/girls') ? 'link-activ' : '' }}" href="/dogs/girls">Girls</a></li>
        <li class="menulist"><a class="{{ Request::is('puppies') ? 'link-activ' : '' }}" href="/puppies">Puppies</a></li>
        <li class="menulist"><a class="{{ Request::is('for-sale') ? 'link-activ' : '' }}" href="/for-sale">For Sale</a></li>
        <li class="menulist"><a class="{{ Request::is('contact') ? 'link-activ' : '' }}" href="/contact">Contact</a></li>
        <li class="menulist icons">
          <a class="fa-decoration" href="{{setting('site.facebook')}}"><i class="fa fa-facebook menufa"></i></a>
          <a class="fa-decoration" href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    <ul class="topmenu snip1135">
      <li class="menulist"><a class="{{ Request::is('/') ? 'link-activ' : '' }}" href="/">Home</a></li>
      <li class="menulist"><a class="{{ Request::is('news') ? 'link-activ' : '' }}" href="/news">News</a></li>
      <li class="menulist"><a class="{{ Request::is('dogs/boys') ? 'link-activ' : '' }}" href="/dogs/boys">Boys</a></li>
      <li class="menulist"><a class="{{ Request::is('dogs/girls') ? 'link-activ' : '' }}" href="/dogs/girls">Girls</a></li>
      <li class="menulist"><a class="{{ Request::is('puppies') ? 'link-activ' : '' }}" href="/puppies">Puppies</a></li>
      <li class="menulist"><a class="{{ Request::is('for-sale') ? 'link-activ' : '' }}" href="/for-sale">For Sale</a></li>
      <li class="menulist"><a class="{{ Request::is('contact') ? 'link-activ' : '' }}" href="/contact">Contact</a></li>
    </ul>
  </div>
</header>