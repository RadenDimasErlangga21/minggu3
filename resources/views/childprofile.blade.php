@extends('profile')

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
                    <li class="tm-nav-item"><a href="/" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a></li>
                    <li class="tm-nav-item active"><a href="/profil" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Profil
                    </a></li>
                </ul>
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



