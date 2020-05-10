<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--    function  in order to indicate where the user is"> -->
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
            <script>
             $(function(){
                $('a').each(function(){ 
                    if ($(this).prop('href') == window.location.href) {
                        $(this).addClass('active'); $(this).parents('li').addClass('active');
                     }
                });
            });
            </script>
        <script src="https://kit.fontawesome.com/94f2406347.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--  Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script|Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <!--   For bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">        
        <!--   To make the navbar responsive -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src=" {{ URL::to('js/main.js') }}"></script>
        <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ URL::to('images/favicon.png') }}" sizes="5x5">
        <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
        <title>{{ 'Déjà vu'}}
        </title>
    </head>
    <body style="padding-top: 76px;">
        @include('inc.navbar')
        
        <div >
            @include('inc.messages')
            @yield('content')
        </div>
        
    </body>
</html>