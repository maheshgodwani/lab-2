<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="{{ asset('js/bootstrap.js') }}" ></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  </head>
  <body>
        @include('template.header')
        @include('template.menu')
        @yield('content')
        @include('template.footer')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

      </body>
    </html>
