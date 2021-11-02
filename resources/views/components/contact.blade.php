<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p class="text-center w-75">	Le CODEN est en priorité ouvert aux fils et filles de Ndjola qu’ils soient domiciliés ou résidents à Ndjola Centre ou dans les autres villages de la Chefferie de la 3ième Degré de Ndjola</p>
        </div>



        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-4 "> 
                    <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31548.47403183833!2d18.082490369127573!3d8.733332748476482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10dbfe2dc0ee7aa7%3A0x2d32e37f5336106!2sNdjola%2C%20Tchad!5e0!3m2!1sfr!2scm!4v1635656239158!5m2!1sfr!2scm"
                    frameborder="0" style="border:0; width: 100%; height: 384px;"allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="col-lg-8">
                <form action=" {{route('create_contactus')}} " method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Entrez votre noms" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez vrotre addresse email" required>
                        </div>
                    </div>
                    <div class="form-group col-12">
                        <b >Motif :</b>

                        <div class="form-check form-check-inline">
                        <label class="form-check-label  m-3 pointer-cursor">
                                <input class="form-check-input rounded  bg-primary border-0" type="radio" name="motif" id="motif_adherer" value="adherer" checked>&nbsp; Adhérer
                        </label>
                        <span class="divider,"></span>
                        <label class="form-check-label m-3 pointer-cursor">
                            <input class=" form-check-input rounded bg-danger border-0" type="radio" name="motif" id="motif_autres" value="autres">&nbsp; Autres
                        </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Votre message..." required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">En cours d'envoi...</div>
                        <div class="error-message">Désolé veuillez reéssayé dans qeulque instant</div>
                        <div class="sent-message">Votre message à été reçu, merci de nous avoir contactez !</div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer</button></div>
                </form>
            </div>

        </div>


        <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Notre Addresse</h3>
                    <p>Cameroun, Nord - Ndjola </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email</h3>
                    <p>contact@coden.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Tél</h3>
                    <p>(+237) 699 99 99 99</p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->
