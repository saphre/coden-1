@extends('layout.site')

@section('css')

@endsection

@section('title')
A propos
@endsection

@section('body')


<main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contactez-nous</h2>
                <ol>
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li>Contactez-nous</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">

            @include('components.contact')

        </div>
    </section>

</main>

@endsection
