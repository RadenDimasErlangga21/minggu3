!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title> @yield('title') </title>
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
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>    

            <div class="row tm-row">
            @yield('article-post')                
            </div>
            
            <div class="row tm-row tm-mt-100 tm-mb-75">
                @yield('next-wrapper')
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