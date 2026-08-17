@props(['title'])
<nav class="navbar navbar-expand-lg bg-info top-0 position-sticky z-1">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="/">{{$title}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/api/product/create">Add product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="/api/product">Get products data</a>
        </li>
      </ul>
    </div>
  </div>
</nav>