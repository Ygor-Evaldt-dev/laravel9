<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  {{-- mdb --}}
  <!-- Font Awesome -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
  />
  <!-- Google Fonts -->
  <link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
  />
  <!-- MDB -->
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
  />
  <!-- MDB -->
  <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"
  ></script>

  <link rel="shortcut icon" href="{{ url('images/ico.ico') }}" type="image/png">

  <title>@yield('title') - App Laravel 9</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('users.index') }}">Início</a>
        <form class="d-flex input-group w-auto" action="{{ route('users.index') }}" method="GET">
          <input
            type="search"
            class="form-control rounded"
            placeholder="Pesquisar usuário"
            aria-label="Search"
            aria-describedby="search-addon"
            name="search"
          />
          <button class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search" title="Pesquisar"></i>
          </button>
        </form>
      </div>
    </nav>
  </header>
  <main class="app container-fluid">
    @yield('content')
  </main>
  <footer class="container-fluid bg-secondary bg-gradient mt-5">
    <p class="text-white text-center py-2 mb-0">Copyright<i class="far fa-copyright"></i><a class="text-white" title="Ygor Evaldt GitHub" href="https://github.com/Ygor-Evaldt-dev" target="_blanck">YgorEvaldt</a></p>
  </footer>
</body>
</html>