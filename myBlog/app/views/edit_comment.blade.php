<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
			Blague du jour
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                {{ HTML::style('assets/css/bootstrap.min.css') }}
                {{ HTML::style('assets/css/bootstrap-responsive.min.css') }}
                {{ HTML::style('assets/css/main.css') }}
                {{ HTML::style('http://fonts.googleapis.com/css?family=Imprima') }}
    </head>
 
    <body>
        <div class="container">
 
            <header class="row">
                <div id="entete" class="span12">
                    <h1>
			Edit : Blague Du Jour
                    </h1>
                </div>
            </header>
 
            <section>
              @yield('edit')
            </section>

 
            <footer class="row">
                <div class="span12">
                    <em>
                        Copyright Kevin
                    </em>
                </div>
            </footer>
 
        </div>
    </body>
</html>