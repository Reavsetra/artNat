<nav class="show-for-small-only res">
    <button type="button"  class="show-for-small-only button" data-toggle="offCanvasLeft" data-off-canvas data-transition-time="500">Menú</button>
    <p>Floreria Arte Natural</p>
</nav>
<nav class="hide-for-small-only principal">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <div class="contact-info">
        <p><a href="mailto:info@floreriaartenatural.com">info@floreriaartenatural.com</a></p>
        <p>Tel.- 6839-3950 6274-9900</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('arreglos/toda-ocasion') }}">Arreglos</a></li>
            <li><a href="{{ url('contacto') }}">Ubicación</a></li>
        </ul>
    </div>
</nav>