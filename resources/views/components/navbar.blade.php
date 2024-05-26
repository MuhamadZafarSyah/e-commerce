<!-- NAVBAR -->
<section id="header">
    <a href="/"><img class="w-[10.5rem]" src="../img/logo/logo.png" alt="logo_failurebrand" /></a>

    <div>
        <ul id="navbar">
            <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li><a class="{{ Request::is('all-products') ? 'active' : '' }}" href="/all-products">Shop</a></li>
            <a href="#" id="close"><i class="fa fa-times"></i></a>
        </ul>
    </div>
    <div id="mobile">

        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
