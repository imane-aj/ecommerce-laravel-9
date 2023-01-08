<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#pop">Trending Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#new">New arrived</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#reco">Recommended</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid" style="margin: 0; padding:0; border-radius: unset;">
      @if (session()->has('message'))
      <div class="alert alert-success alert-dismissbile fade show" role="alert" style="margin-bottom: 0">
          {{ session()->get('message') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" 
          aria-label="Close" style="float: right"></button>
      </div>          
      @endif
</div>