@extends('layouts.master')

@section('title', 'Contáctanos')

@section('content')
    <main>
        <div id="map"></div>
        <h2>Contáctanos</h2>
        <section class="row contact-foot">
            <div class="small-12 medium-4 columns element">
                <div class="icon">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h3>Correo Electrónico</h3>
                    <p>info@floreriaartenatural.com</p>
                </div>
            </div>
            <div class="small-12 medium-4 columns element">
                <div class="icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h3>Teléfono</h3>
                    <p> 6839-3950 / 6274-9900</p>
                </div>
            </div>
            <div class="small-12 medium-4 columns element">
                <div class="icon">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </div>
                <div class="info">
                    <h3>Whatsapp</h3>
                    <p></p>
                </div>
            </div>
        </section>
        {{-- formulario de contacto --}}
        <section class="row">
            <article class="columns small-12 medium-6">
                <form name="bio-contact-form" method="post" action="envio_contacto.php">
                    <div class="row">
                        <div class="medium-6 columns">
                            <label>Nombre:
                                <input type="text" name="bio_nombre" required>
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>Apellido:
                                <input type="text" name="bio_apellido" required>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-6 columns">
                            <label>Email:
                                <input type="text" name="bio_email" required>
                            </label>
                        </div>
                        <div class="medium-6 columns">
                            <label>Asunto:
                                <input type="text" name="bio_asunto" required>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <label>Asunto:
                                <textarea rows="5" name="bio_mensaje" required>
                                
                                </textarea>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="medium-12 columns">
                            <button type="submit" class="expanded button">Enviar</button>
                        </div>
                    </div>
                </form>
            </article>
            <article class="columns small-12 medium-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1ses-419!2smx!4v1479756097652!6m8!1m7!1sop8QQwXzjgAJj-WWF5v29w!2m2!1d19.3728725889224!2d-99.27782500431974!3f205.21630424479156!4f-7.248857316259489!5f0.7820865974627469" width="100%" height="450"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
        </section>
    </main>
@endsection