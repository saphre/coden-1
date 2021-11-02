@extends('layout.site')

@section('css')

@endsection

@section('title')
Actualités
@endsection

@section('body')


<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Actualités</h2>
                <ol>
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li>Actualités</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <p>
                Actualités de CODEN
            </p>
        </div>
    </section>

</main>

@endsection
