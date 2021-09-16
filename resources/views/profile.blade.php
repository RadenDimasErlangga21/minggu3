<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
        @yield('header-wrapper')
            </div>

            <nav class="tm-nav" id="tm-nav">            
            @yield('nav-barraden')       
            </nav>
            
            <div class="tm-mb-65">
            @yield('social-media')
            </div>

            <p class="tm-mb-80 pr-5 text-white">
                2031710121 - Raden Dimas Erlangga
            </p>
        </div>
    </header>

        
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                </div>                
            </div>   

            <div class="row tm-row tm-mb-45"> 
            <div class="row tm-row tm-mb-60">
                <div class="col-12">
                    <hr class="tm-hr-primary  tm-mb-55">
                </div>                
                <div class="col-lg-6 tm-mb-60 tm-person-col">
                    <div class="media tm-person">
                        <img src="img/raden-image.png" alt="Image" class="img-fluid mr-4">
                        <div class="media-body">
                            <h2 class="tm-color-primary tm-post-title mb-7">Raden Dimas Erlangga</h2>
                            <h3 class="tm-h7 mb-7">Mahasiswa Politeknik Negeri Malang</h3>
                        </div>
                    </div>
                </div>
                
                <footer class="row tm-row">
                @yield('footer')
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>