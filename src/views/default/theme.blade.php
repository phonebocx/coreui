<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="coreui/css/bootstrap.css" rel="stylesheet">
    <link href="coreui/generic.css" rel="stylesheet">
    <style>
        .wb {
            word-break: break-all
        }

        .waiting {
            cursor: wait;
        }
    </style>

</head>
@include('coreui::default.sidebar')

<body>
    @yield('header')
    <div class="container-fluid">
        <div class="row">
            @yield('sidebar')
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 col-9">@yield('pagename')</h1>
                    <div class='col-3'>@yield('pagesize')</div>
                </div>
                @yield('content')
            </main>
        </div>
    </div>
    <script src="coreui/js/bootstrap.bundle.js"></script>
    <script src="coreui/feather.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    <script>
        feather.replace()
        // Well THIS is handy! Found at https://stackoverflow.com/a/47065313/7417695
        window.post = function(url, data) {
            return fetch(url, {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            });
        }

        if (!String.prototype.format) {
            String.prototype.format = function() {
                var args = arguments;
                return this.replace(/{(\d+)}/g, function(match, number) {
                    return typeof args[number] != 'undefined' ?
                        args[number] :
                        match;
                });
            };
        }
    </script>
    @yield('scripts')

</body>

</html>