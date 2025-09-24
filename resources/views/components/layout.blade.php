<!DOCTYPE html>
<html>
<head>
    <title>My App</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
         <a class="nav-link"  href="{{route('index_page')}}"> Home</a>
        </li>
        <li class="nav-item">    
           <a class="nav-link" href="{{route('about_page')}}"> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('Books')}}"> Book List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('Book.create')}}"> create from</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    {{ $slot }}
</body>
</html>

