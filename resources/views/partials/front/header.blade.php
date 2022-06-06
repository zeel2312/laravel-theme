<!-- header -->
<header class="header">
    <div class="container-fluid px-lg-5">
        <!-- nav -->
        <nav class="py-4">
            <div id="logo">
                <h1> <a href="{{route('shoesHome')}}"><span class="fa fa-bold" aria-hidden="true"></span>ootie</a></h1>
            </div>

            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="active"><a href="{{route('shoesHome')}}">Home</a></li>
                <li><a href="{{route('shoesAbout')}}">About</a></li>
                <li><a href="{{route('shoesBlog')}}">Blog</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                    <a href="#">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                    <input type="checkbox" id="drop-2" />
                    <ul>
                        <li><a href="{{route('shoesBlog')}}">Blog</a></li>
                        <li><a href="shop.html">Shop Now</a></li>
                        <li><a href="shop-single.html">Single Page</a></li>
                    </ul>
                </li>
                <li><a href="{{route('shoesContact')}}">Contact</a></li>
            </ul>
        </nav>
        <!-- //nav -->
    </div>
</header>
<!-- //header -->
