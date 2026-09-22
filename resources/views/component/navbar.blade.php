<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">
    @stack('navbar-title')
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

      <a class="nav-item nav-link active" href="{{ route('student.store_student') }}">Home <span class="sr-only">(current)</span></a>

      <a class="nav-item nav-link" href="{{ route('admin.about') }}">About Us</a> 

      <a class="nav-item nav-link" href="#">Contact Us</a>

      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>