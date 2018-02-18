<nav class="d-none d-sm-block">
  <ul class="navbar fixed-top">
    <div class="container">
      <li> <a href="#top" class="navbar-brand">@include('../svgs/logo')</a></li>
      <li class="nav-item"><a href="#top" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
      <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
      <li class="nav-item"><a href="#discounts" class="nav-link">Discounts</a></li>
      <li class="nav-item"><a href="#bottom" class="nav-link">Contact</a></li>
    </div>
  </ul>
</nav>

<nav class="d-block d-sm-none navbar navbar-dark bg-dark fixed-top p-3 mobile-navigation">
  <button type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
    <span class="navbar-toggler-icon"></span>
  </button>
  <span class="pl-3"><a href="#top">@include('../svgs/logo')</a></span>
  <div class="pos-f-t">
    <div id="navbarToggleExternalContent" class="collapse bg-dark p-4">
      <ul>
        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#discounts" class="nav-link">Discounts</a></li>
        <li class="nav-item"><a href="#bottom" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>