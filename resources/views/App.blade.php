<!DOCTYPE html>
<html lang="en" class="pb-0 mb-0">
    <head>
        <title>Nom du site</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('css/style-index.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @livewireStyles
    </head>

    <body style="background: rgba(219, 218, 218, 0.719);">


        <!-- Header -->
        <header id="main-header" class="row d-flex">
            <div class="d-flex col-7" id="left-side">
                <p id="header-title"><a href="index.html" class="text-white">Titre du site</a></p>
                <input id="header-search" class="form-control" placeholder="Effectuer une recherche...">
                <button class="btn btn-success" id="header-btn" type="submit">Rechercher</button>
            </div>
            <div class="d-flex col-5 text-white" id="right-side">
                <a><i class="fas fa-bell"></i> Annonces</a>
                <a><i class="fas fa-blog"></i> Blog</a>
                <a id="fa-user"><i class="fas fa-user"></i> Compte</a>
            </div>
        </header>

        <section class="header-menu"> 
            <a href="#"><h3>Utilisateur</h3></a>
            <a href="#">Profil</a>
            <a href="#">Paramétres</a>
            <a href="#">Deconnexion</a>
        </section>


        <!-- Menu de gauche -->

    @include('layouts.SidBars.sidbar')
    
         <!-- sliders publicités -->
         <div id="adds-slides" class="carousel carousel-dark slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#adds-slides" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" id="slider-bg">
                    <img src="images/bg1.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" id="slider-bg">
                    <img src="images/bg2.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" id="slider-bg">
                    <img src="images/bg3.jpg" class="d-block w-100 rounded" alt="...">
                </div>
                <div class="carousel-item" id="slider-bg">
                    <img src="images/bg4.jpg" class="d-block w-100 rounded" alt="...">
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#adds-slides" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#adds-slides" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @yield('content')
        <!-- grille de publicités -->

   

        
        <!-- Footer de la page-->

      @include('Layouts.Footters.footer')

        <script src="{{asset('js/script-index.js')}}">
        </script>
         @livewireScripts
    </body>
</html>