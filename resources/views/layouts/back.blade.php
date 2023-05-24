<!DOCTYPE html>
<html>

<head>
    <!-- META -->
    @include('includes.dashboard.meta')
    <title>@yield('title') | DASHBOARD</title>
  
    <!-- CSS STYLE -->
    @stack('before-style')
    @include('includes.dashboard.style')
    @stack('after-style')

</head>

<body>
  
    @include('includes.dashboard.sider')

    @yield('content')

</div>
    <!-- JS -->
    @stack('before-script')
    @include('includes.dashboard.script')
    @stack('after-script')
</body>
</html>