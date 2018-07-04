<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Denapia :: Laravel Admin Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    {{-- CSS & Styles --}}
    @include('denapia::admin.partials.css')

</head>

<body>

    <div class="wrapper">

        {{-- Sidebar --}}
        @include('denapia::admin.partials.sidebar')

        <div class="main-panel">

            {{-- Navbar --}}
            @include('denapia::admin.partials.navbar')

            {{-- Content --}}
            <div class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>

            {{-- Footer --}}
            @include('denapia::admin.partials.footer')

        </div>

    </div>

    {{-- JS & Scripts --}}
    @include('denapia::admin.partials.js')

</body>
</html>