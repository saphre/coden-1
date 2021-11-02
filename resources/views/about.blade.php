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
                <h2>A propos</h2>
                <ol>
                    <li><a href="{{route('home')}}">Acceuil</a></li>
                    <li>A propos</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <p>
                Ndjola est un village du Cameroun situé dans la Région du Nord et le département de la Bénoué. Il dépend administrativement de la commune de Ngong et de l’arrondissement de Tcheboa, et, au niveau de la chefferie traditionnelle, du lamidat de Tcheboa
            </p>
        </div>
    </section>

</main>

@endsection
