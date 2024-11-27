<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset"UTF-8">
        <meta name="viewport" content="widht=device-widht,intial-scale=1.0">
        <title>@include('partials.header')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.main.css') }}">
    </head>
    <body>
        @include('partials.sidebar') 
        <div class="main-content">
            @include('partials.content')
        </div>
        <script src="{{asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('js/app.js') }}"</script>
        </body>
        <footer>
            @include ('partials.footer')

            </footer>
            </html>
        
        