<x-layout>



    {{-- <img class="img-fluid banner-img opacity-25 " src="{{ asset('img/banner.jpg') }}" alt="img non disponibile"> --}}


    <div class="text-center d-flex justify-content-center banner d-flex ">


        <div class="d-flex justify-content-center ">
            <div class="row  align-items-center ">
                <div class="col-md-4 ">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="Immagine">
                </div>
                <div class="col-md-4  justify-content-center">
                    <p style="font-size: 60px;">Per mano<br>Per l'autonomia</p>
                    <p style="font-size: 25px;">Dott.ssa Anna Difino</p>
                    <p style="font-size: 15px;">Psicologa dello Sviluppo e Musicista</p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('img/figura.png') }}" class="img-fluid d-none d-md-block" alt="Immagine">
                </div>
            </div>


        </div>




    </div>







    <div class="container bt-5">
        <div class="row">

            <div class="col-12 col-md-5 col-lg-3 mt-4 d-flex align-self-stretch card_cust ">
                <a href="{{ route('PsyanMusic') }}" class="no-underline">
                    <div class="">
                        <img src="{{ asset('img/musica.jpg') }}" class="img-fluid card-image rounded shadow mt-3"
                            alt="Immagine 1">
                        <div class="fw-bold mt-2">
                            <div class="text-center text-dark ">
                                <h5>PsyanMusic</h5>
                                <p>Percorsi di cruppo</p>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-12 col-md-5 col-lg-3 mt-4 d-flex align-self-stretch card_cust">
                <a href="{{ route('School') }}" class="no-underline">
                    <div class="">
                        <img src="{{ asset('img/school.jpg') }}" class="img-fluid card-image rounded shadow mt-3"
                            alt="Immagine 1">
                        <div class="fw-bold mt-2">
                            <div class="text-center text-dark ">
                                <h5>Per la scuola</h5>

                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-12 col-md-5 col-lg-3 mt-4 d-flex align-self-stretch card_cust ">
                <a href="{{ route('advice') }}" class="no-underline">
                    <div class="">
                        <img src="{{ asset('img/advice.jpg') }}" class="img-fluid card-image rounded shadow mt-3"
                            alt="Immagine 1">
                        <div class="fw-bold mt-2">
                            <div class="text-center text-dark ">
                                <h5>Consulenza</h5>

                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-12 col-md-5 col-lg-3 mt-4 d-flex align-self-stretch card_cust ">
                <a href="{{ route('cognitive') }}" class="no-underline">
                    <div class="">
                        <img src="{{ asset('img/cognitivo.jpg') }}" class="img-fluid card-image rounded shadow mt-3"
                            alt="Immagine 1">
                        <div class="fw-bold mt-2">
                            <div class="text-center text-dark ">
                                <h5>Potenziamento cognitivo</h5>

                            </div>

                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>








</x-layout>
