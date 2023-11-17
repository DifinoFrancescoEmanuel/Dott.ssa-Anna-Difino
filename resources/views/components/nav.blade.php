<div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bs-primary-text fixed-top shadow nav_cust ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="contenitore-img">
                    <img src="{{ asset('img/logo.png') }}" height="35" class="me-2" alt="immagine non disponibile">
                </div>

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                    <li class="nav-item align-items-center d-flex me-2">
                        <a class="text-black name" href="{{ route('homePage') }} ">Dott.ssa
                            Anna
                            Difino</a>
                    </li>

                </ul>



                <ul class="navbar-nav  mb-2 mb-lg-0 fs-4">

                    <li class="nav-item align-items-center d-flex">
                        <a class="nav-link" aria-current="page" href="{{ route('aboutMe') }}">Chi
                            sono</a>
                    </li>

                    <li class="nav-item d-flex align-items-center ">
                        <a class="nav-link" href="#">Servizi</a>
                    </li>
                    <li class="nav-item d-flex align-items-center ">
                        <a class="nav-link" href="#">Vuoi parlare con me?</a>
                    </li>


                </ul>




            </div>
        </div>
    </nav>

    {{-- <div class="collapse mt-5 col-3" id="contactMe">
        <div class="card card-body   ">
            <form action="/richiesta/info/annuncio" class="column g-3" method="POST">
                @csrf


                <div class="col-12 mt-2">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome">
                </div>

                <div class="col-12 mt-2">
                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
                </div>

                <div class="col-12 mt-2">
                    <textarea name="message" id="" cols="30" rows="3" placeholder="Raccontami" class="form-control"></textarea>
                </div>

                <div class="col-12 my-2">
                    <button type="submit" class="btn ">Invia</button>
                </div>
            </form>
        </div>
    </div> --}}


</div>
