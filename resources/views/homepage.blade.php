@extends('layout')
@section('title', 'ESENYURT BARINAĞI')

@section('inline-styles')
    .slide-bg {
    height: 80vh;
    width: 100%;
    background-color: whitesmoke;
    overflow: hidden;
    }
    .slide-bg>img{
    object-fit: cover;
    width: 100%;
    height: 100%;
    object-position: center center;

    }

    @media  (min-width:992px){
        .slide-bg {
            height: 50vh;

        }
    }


@endsection

@section('content')
    <div class="row">


        <h1>HOŞGELDİNİZ</h1>


        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class="active"
                        aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="slide-bg">
                        <img src="https://cdn.pixabay.com/photo/2021/08/25/20/42/field-6574455_960_720.jpg"
                             alt="Doğayla içiçe">
                    </div>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slide-bg">
                        <img src="https://cdn.pixabay.com/photo/2020/05/24/23/44/hands-5216585_960_720.jpg" alt="Yardım Eli">
                    </div>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">


                    <div class="slide-bg">


                        <img src="https://cdn.pixabay.com/photo/2020/07/03/14/28/hands-5366493_960_720.jpg"
                             alt="Doğaya açılan eller">
                    </div>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2 class="my-3">Son Eklenenler</h2>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <span><i class="bi bi-alarm fs-2"></i></span>
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">Barınağımıza yeni Eller</h6>
                            <p class="mb-0 opacity-75">Sayın Maçaoğlu barınağımıza gençlerle birlikte katılım sağlıyor.</p>
                        </div>
                        <small class="opacity-50 text-nowrap">now</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                         class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">Büyük destek</h6>
                            <p class="mb-0 opacity-75">Ekrem İmamoğlu: "İBB için toplanan çevre temizlik vergilerinin %15
                                kadarını barınaklara ayrılmasını doğru buluyorum. Bu konuda çalışmalarımızı yakın zamanda
                                tamamlayacağız." dedi.</p>
                        </div>
                        <small class="opacity-50 text-nowrap">3d</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                         class="rounded-circle flex-shrink-0">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">Konuklarımız daha mutlu</h6>
                            <p class="mb-0 opacity-75">Hayvan koruma derneğinin öncülüğünü yaptığı BARINAKLARDA MUTLULUK
                                raporunda barınağımızın konuklarının ülkedeki insanlarının yüzde ellisinden daha mutlu
                                olduğu sonucu çıktı.</p>
                        </div>
                        <small class="opacity-50 text-nowrap">1w</small>
                    </div>
                </a>
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    Tümünü Gör
                </a>
            </div>
        </div>

    </div>
    <div>

    </div>
@endsection
