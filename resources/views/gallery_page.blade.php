<x-guest-layout>

    <div id="page_caption" class="hasbg parallax  withtopbar  "
        style="background-image:url(car_assets/upload/driver-2.jpg);">

        <div class="page_title_wrapper">
            <div class="page_title_inner">
                <div class="page_title_content">
                    <h1 class="withtopbar">Car 2 Columns Classic</h1>
                    <div class="page_tagline">
                        This is sample of page tagline and you can set it up using page option </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg withtopbar ">
        <form id="car_search_form" name="car_search_form" method="get"
            action="http://themes.themegoods.com/grandcarrental/demo/car-2-columns-classic/">
            <div class="car_search_wrapper">
                <div class="one_fourth themeborder">
                    <select id="brand" name="brand">
                        <option value="">Any Brand</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Mercedes Benz">Mercedes Benz</option>
                        <option value="MINI">MINI</option>
                        <option value="Porsche">Porsche</option>
                    </select>
                    <span class="ti-angle-down"></span>
                </div>
                <div class="one_fourth themeborder">
                    <select id="type" name="type">
                        <option value="">Any Type</option>
                        <option value="Coupe">Coupe</option>
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                    </select>
                    <span class="ti-angle-down"></span>
                </div>
                <div class="one_fourth themeborder">
                    <select id="sort_by" name="sort_by">
                        <option value="price_low">Price Low to High</option>
                        <option value="price_high">Price High to Low</option>
                        <option value="model">Sort By Model</option>
                        <option value="popular">Sort By Popularity</option>
                        <option value="review">Sort By Review Score</option>
                    </select>
                    <span class="ti-exchange-vertical"></span>
                </div>
                <div class="one_fourth last themeborder">
                    <input id="car_search_btn" type="submit" class="button" value="Search" />
                </div>
            </div>
        </form>

        <!-- Begin content -->

        <div class="inner">

            <div class="inner_wrapper nopadding">

                <div id="page_main_content" class="sidebar_content full_width fixed_column">

                    <div class="standard_wrapper">

                        <div id="portfolio_filter_wrapper"
                            class="gallery classic two_cols portfolio-content section content clearfix"
                            data-columns="3">

                            @foreach ($cars as $car)
                                <div class="element grid classic2_cols animated2">

                                    <div class="one_half gallery2 classic static filterable portfolio_type themeborder"
                                        data-id="post-2">

                                        <a class="car_image" href="{{ route('details_page', $car->id) }}">
                                            <img src="/storage/images/{{ $car->image }}"
                                                alt="BMW 3 Series" />
                                        </a>

                                        <div class="portfolio_info_wrapper">
                                            <div class="car_attribute_wrapper">
                                                <a class="car_link" href="#">
                                                    <h4>{{ $car->name }}</h4>
                                                </a>
                                                <div class="car_attribute_rating">
                                                    <div class="br-theme-fontawesome-stars-o">
                                                        <div class="br-widget">
                                                            <a href="javascript:;" class="br-selected"></a>
                                                            <a href="javascript:;" class="br-selected"></a>
                                                            <a href="javascript:;" class="br-selected"></a>
                                                            <a href="javascript:;" class="br-selected"></a>
                                                            <a href="javascript:;"></a>
                                                        </div>
                                                    </div>
                                                    <div class="car_attribute_rating_count">
                                                        4&nbsp; reviews </div>
                                                </div>

                                                <div class="car_attribute_wrapper_icon">
                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-user"></div>
                                                        <div class="car_attribute_content">
                                                            4 </div>
                                                    </div>

                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-briefcase"></div>
                                                        <div class="car_attribute_content">
                                                            2 </div>
                                                    </div>

                                                    <div class="one_fourth">
                                                        <div class="car_attribute_icon ti-panel"></div>
                                                        <div class="car_attribute_content">
                                                            Auto </div>
                                                    </div>
                                                    <button>View Details</button>

                                                </div>
                                                <br class="clear" />
                                            </div>
                                            <div class="car_attribute_price">
                                                <div class="car_attribute_price_day two_cols">
                                                    <span class="single_car_currency">$</span><span
                                                        class="single_car_price">{{ $car->price }}</span> <span
                                                        class="car_unit_day">
                                                        </span>
                                                </div>
                                            </div>
                                            <br class="clear" />
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <br class="clear" />
                        <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a>
                        </div>
                        <div class="pagination_detail">
                            Page 1 of 2
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</x-guest-layout>
