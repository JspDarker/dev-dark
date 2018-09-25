
<nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="mm-toggle-wrap">
                    <div class="mm-toggle">
                        <i class="fa fa-align-justify"></i>
                    </div>
                    <span class="mm-label">Categories</span>
                </div>
                <div class="mega-container visible-lg visible-md visible-sm">
                    <div class="navleft-container">
                        <div class="mega-menu-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="mega-menu-category">
                            <ul class="nav">
                                {{--<li>
                                    <a href="#">
                                        <i class="icon fa fa-camera fa-fw"></i> Camera & Photo</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Canon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Nikon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Olympus</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>ALPA</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bolex</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Samsung </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Panasonic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Thomson </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bell & Howell</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon fa fa-desktop fa-fw"></i> Computers</a>
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Canon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Nikon</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Olympus</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>ALPA</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bolex</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Samsung </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Panasonic</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Thomson </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_grid.html">
                                                                <span>Bell & Howell</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>--}}
                                @foreach($menu as $parents => $children)
                                    @php $parent = explode('::',$parents) @endphp
                                <li @if($children[0]->id_sub == '') class="nosub" @endif>
                                    <a href="shop_grid.html/{{ $parent[2] }}" itemid="{{ $parent[1] }}">
                                        <i class="icon fa {{ $children[0]->icon }}"></i> {{ $parent[0] }}</a>
                                    @if(count($children) > 1)
                                    <div class="wrap-popup column1">
                                        <div class="popup">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="nav">
                                                        @foreach( $children as $value)
                                                            <li>
                                                                <a href="shop_grid.html/{{ $value->url_sub }}" itemid="{{ $value->id_sub }}">
                                                                    <span>{{ $value->name_sub }}</span>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="mtmegamenu">
                    <ul>
                        <li class="mt-root demo_custom_link_cms">
                            <div class="mt-root-item">
                                <a href="index.html">
                                    <div class="title title_font">
                                        <span class="title-text">Home</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item">
                                <a href="contact_us.html">
                                    <div class="title title_font">
                                        <span class="title-text">Contact Us</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root">
                            <div class="mt-root-item">
                                <a href="about_us.html">
                                    <div class="title title_font">
                                        <span class="title-text">about us</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="mt-root demo_custom_link_cms">
                            <div class="mt-root-item">
                                <a href="blog_full_width.html">
                                    <div class="title title_font">
                                        <span class="title-text">Blog</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>