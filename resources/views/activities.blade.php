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
                <h2>Nos Activités</h2>
                <ol>
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li>Activités</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <p>
                Nos activités...
            </p>
        </div>
    </section>

</main>

@endsection
