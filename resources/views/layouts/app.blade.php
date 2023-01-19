<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100">
<main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="{{ route('home.index') }}">Laravel CMS | @yield('title')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.index') ? 'active text-warning' : '' }}" href="{{ route('home.index') }}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.about') ? 'active text-warning' : '' }}" href="{{ route('home.about') }}">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.contact') ? 'active text-warning' : '' }}" href="{{ route('home.contact') }}">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.pricing') ? 'active text-warning' : '' }}" href="{{ route('home.pricing') }}">Fiyatlandırma</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.faq') ? 'active text-warning' : '' }}" href="{{ route('home.faq') }}">S.S.S.</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.blog') ? 'active text-warning' : '' }}" href="{{ route('home.blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('home.portfolio') ? 'active text-warning' : '' }}" href="{{ route('home.portfolio') }}">Portfolyo</a></li>
                </ul>
            </div>
        </div>
    </nav>
@yield('content')
</main>
<!-- Footer-->
<footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
        <div class="row align-items-center justify-content-between flex-column flex-sm-row">
            <div class="col-auto">
                <div class="small m-0 text-white">Copyright &copy; Laravel CMS | Made by <a
                            href="https://metehan.org">Metehan</a>
                </div>
            </div>
            <div class="col-auto">
                <a class="link-light small" href="#!">Gizlilik Politikası</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">Şartlar & Koşullar</a>
                <span class="text-white mx-1">&middot;</span>
                <a class="link-light small" href="#!">İletişim</a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
