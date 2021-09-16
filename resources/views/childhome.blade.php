@extends('home')

@section('title','webraden')

@section('header-wrapper')
<button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">web raden</h1>
@endsection

@section('nav-barraden')
<ul>
                    <li class="tm-nav-item active"><a href="/" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a></li>
                    <li class="tm-nav-item"><a href="/profil" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Profil
                    </a></li>
                </ul>
@endsection

@section('social-media')
<a rel="nofollow" href="https://www.instagram.com/rad.raden/" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://www.linkedin.com/in/raden-dimas-erlangga-64268b179/" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
@endsection

@section('article-post')
<article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>
                    </a>      

                    <p class="tm-pt-30">
                        There is a clickable image with beautiful hover effect and active title link for each post item. 
                        Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Travel . Events</span>
                        <span class="tm-color-primary">June 24, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>36 comments</span>
                        <span>by Admin Nat</span>
                    </div>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class=" tm-post-link-inner">
                            <img src="img/img-02.jpg" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">New</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Multi-purpose blog template</h2>
                    </a>                   

                    <p class="tm-pt-30">
                        <a rel="nofollow" href="https://templatemo.com/tm-553-xtra-blog" target="_blank">Xtra Blog</a>  is a multi-purpose HTML CSS template from TemplateMo website. 
                        Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.
                    </p>

                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Creative . Design . Business</span>
                        <span class="tm-color-primary">June 16, 2020</span>
                    </div>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>48 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="img/img-03.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">How can you apply Xtra Blog</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. 
                        You can also use this for your clients. Thank you for choosing us.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Music . Audio</span>
                        <span class="tm-color-primary">June 11, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>24 comments</span>
                        <span>by John Walker</span>
                    </div>
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="img/img-04.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">A little restriction to apply</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection
                        website. This is strongly prohibited as we worked hard for this template. Please contact TemplateMo for more information.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Artworks . Design</span>
                        <span class="tm-color-primary">June 4, 2020</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>72 comments</span>
                        <span>by Admin Sam</span>
                    </div>
                </article>
@endsection

@section('next-wrapper')
<div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>                
@endsection

@section ('footer')
<hr class="col-12">
                <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 Xtra Blog Company Co. Ltd.
                </div>
@endsection