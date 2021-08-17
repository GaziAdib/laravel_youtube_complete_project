<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('projects.index') }}">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('projects.index') }}">AllProjects</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.projects.index') }}">Admin</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Skills</a>
          </li>

        </ul>

        <form action="{{ route('projects.search') }}" method="GET" class="d-flex">
          <input class="form-control me-2" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
