<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ProjetUn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <!-- Script -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


    </head>
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        <header>
            <div class="navigation_bar">
            <h1>ProjetUn</h1>
                <nav class="">
                    <ul>
                        <a href=""><li>Accueil</li></a>
                        <a href=""><li>Articles</li></a>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="container">

            <section class="article_home">
                <article class="article">
                <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 1</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article>

                <article class="article">
                    <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 2</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article>

                <article class="article">
                    <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 3</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article>
                
                <article class="article">
                    <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 4</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article> 
                
                <article class="article">
                    <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 5</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article> 
                
                <article class="article">
                    <img src="{{ asset('img/image_divers/img_medium.jpg') }}" alt="">
                    <div class="etiquette">
                        <h3 class="date">Date</h3>
                        <h3 class="auteur">Auteur</h3>
                        <h3 class="categorie">Catégorie</h3>
                    </div>
                    <h2>Article 6</h2>
                    <p>blablablablablalbalbldfsdflqpodkdoiqsjoiudjiouqshdiouhqiusdhiqhsdiuhqsiudhiuqhsdiuhqisdhi
                        qjdjqiosjdoijqsodoqjsoidjoqjsdoiqjsodijoqisjdoijqsodjqoisjdooiqsjdoijqsoidj
                    </p>
                    <a href=""></a>
                </article>
            </section>

        </main>

        </div>
    </body>
</html>
