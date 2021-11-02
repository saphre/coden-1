@extends('layout.site')

@section('css')

@endsection

@section('title')
 Accueil
@endsection

@section('body')

    @include('components.hero')



        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                    <h3>C'est quoi <span>CODEN</span> ?</h3>
                    <p>Solidarité. Dynamisme. Progrès</p>
                </div>

                <div class="row">
                    <div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-7 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">

                        <p class="fst-italic">
                            Conformément aux dispositions de la loi N° 90/053 du 19 Décembre 1990, sur la liberté d’Association, modifiée et complétée par la loi N° 99/011 du 20 Juillet 1999, il est crée dans l’Arrondissement de Tchéboa, Département de la Bénoué, une Association apolitique, laique et à but non lucratif dénommée Comité de Développement Durable de Ndjola en abrégé CODEN.
                        </p>
                        <ul class="row  container ml-0 pl-0" style="transform: scale(0.9)">
                            <li class="">
                                <i class="bx bx-check"></i>
                                <div>
                                    <p>Recenser les problèmes et les besoins sociaux, économiques, culturels et environnementaux de la Chefferie</p>
                                </div>
                            </li>
                            <li class="">
                                <i class="bx bx-check"></i>
                                <div>
                                    <p>Favoriser le resserrement des liens de fraternité et de solidarité entre tous les ressortissants de Ndjola en vue de susciter et réaliser les projets d’intérêt communautaire</p>
                                </div>
                            </li>
                            <li class="">
                                <i class="bx bx-check"></i>
                                <div>
                                    <p> Revaloriser le patrimoine culturel de la Chefferie de 3ième Degré de Ndjola en vue de son rayonnement aussi bien à l’intérieur du Lamidat de Tchéboa qu’à l’extérieur des frontières de la Région du Nord</p>
                                </div>
                            </li>
                            <li class="">
                                <i class="bx bx-check"></i>
                                <div>
                                    <p>Contribuer au développement de la scolarisation en général et celle de la jeune fille en particulier, en vue de garantir son autonomisation et son épanouissement   sans oublier l’alphabétisation des adultes.</p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->


    @include('components.contact')

@endsection
