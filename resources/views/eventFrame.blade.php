<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Interactive</title>
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="/js/old/all.js"></script>
        @yield('head')
    </head>
    <body>
        @yield('top-content')

        <div class="container">
            <div class="header clearfix">
                @yield('eventMenu')
                <h3 class="text-muted">
                    @yield('eventTitle')
                </h3>
            </div>

            @yield('content')

            <footer class="footer">
                <p>&copy; 2016 Company, Inc.</p>
            </footer>
        </div> <!-- /container -->

    </body>
</html>