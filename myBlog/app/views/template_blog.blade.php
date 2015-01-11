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
			Blague Du Jour
                    </h1>
                </div>
            </header>
 
            <section>
	              @yield('content')
            </section>
			
			
			<section>
				<div class="embed-responsive-16by9">
				<ul class="media-list col-lg-7">
				<li class="media thumbnail">
				<h2> Nouvelle Blague ? </h2>
                    @yield('post')
				</li>
				</ul>
				</div>
            </section>
 
            <footer class="row">
                <div class="span12">
                    <em>
                        Designed by Kevin & Lucas
                    </em>
                </div>
            </footer>
 
        </div>
    </body>
</html>