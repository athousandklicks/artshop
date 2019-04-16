
<!-- Close Icon -->
<div class="nav-close">
    <i class="fa fa-close" aria-hidden="true"></i>
</div>
<!-- Logo -->
<div class="logo">
    <a href="index.html"><img src="/images/core-img/logo.png" alt=""></a>
</div>
<!-- Amado Nav -->
<nav class="amado-nav">
    <ul>
        <li><a href="{{route('product.index')}}">Gallery</a></li>
        <li><a href="{{route('product.create')}}">Add Art Work</a></li>
        <li><a href="{{route('artist.create')}}">Add Artist</a></li>
        <li><a href="{{route('type.index')}}">Art Type</a></li>
        <li><a href="{{route('frame.index')}}">Frame Options</a></li>
        <li><a href="{{route('hang.index')}}">Hang Options</a></li>
        <li><a href="{{route('sign.index')}}">Signature Options</a></li>
        <li><a href="{{route('sign-location.index')}}">Signature Location</a></li>
        <li><a href="{{route('support.index')}}">Support Options</a></li>
        <li><a href="{{route('country.index')}}">Country</a></li>
        <li><a href="{{route('style.index')}}">Art Style</a></li>
        <li><a href="{{route('subject.index')}}">Art Subject</a></li>
        <li><a href="{{route('medium.index')}}">Art Medium</a></li>
        <li><a href="{{route('tag.index')}}">Art Tags</a></li>
    </ul>
</nav>
<!-- Logout implementation -->
<div class="amado-btn-group mt-30 mb-100">
    <a class="btn amado-btn active" href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

</div>

