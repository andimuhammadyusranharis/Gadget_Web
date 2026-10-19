<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ request()->routeIs('store') ? 'active' : '' }}"><a href="{{ route('store') }}">Store</a></li>
                <li><a href="{{ route('store') }}">Laptops</a></li>
                <li><a href="{{ route('store') }}">Smartphones</a></li>
                <li><a href="{{ route('store') }}">Cameras</a></li>
                <li><a href="{{ route('store') }}">Accessories</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->