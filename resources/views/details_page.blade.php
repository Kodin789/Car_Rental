<x-guest-layout>

    <div id="page_caption" class="hasbg  withtopbar " style="background-image:url(/storage/images/{{ $car->image }});">

        <div class="single_car_header_button">
            <div class="standard_wrapper">
                <a href="/car_assets/upload/nw6xremkxkg-nicolai-berntsen.jpg" id="single_car_gallery_open"
                    class="button fancy-gallery"><span class="ti-camera"></span>View Photos</a>
                <div style="display:none;">
                    <a id="single_car_gallery_image1" href="/car_assets/upload/traffic-car-vehicle-black.jpg"
                        title="" class="fancy-gallery"></a>
                    <a id="single_car_gallery_image2" href="/car_assets/upload/evening.jpg" title=""
                        class="fancy-gallery"></a>
                    <a id="single_car_gallery_image3" href="/car_assets/upload/IMG_3496bfree.jpg"
                        title="The road to success and the road to failure are almost exactly the same"
                        class="fancy-gallery"></a>
                    <a id="single_car_gallery_image4" href="/car_assets/upload/road-people-street-smartphone.jpg"
                        title="" class="fancy-gallery"></a>
                </div>

                <a href="#video_review112" id="single_car_video_review_open" class="button" data-type="inline"><span
                        class="ti-control-play"></span>Video Review</a>

                <div id="video_review112" class="car_video_review_wrapper" style="display:none;">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/rV7FQaAf4nc"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="single_car_header_content">
            <div class="standard_wrapper">
                <div class="single_car_header_price">
                    <span id="single_car_price"><span class="single_car_currency">$</span><span
                            class="single_car_price">{{ $car->price }}</span></span>
                    <span id="single_car_price_per_unit_change" class="single_car_price_per_unit">
                        <span id="single_car_unit"></span>
                        <span class="ti-angle-down"></span>

                        <ul id="price_per_unit_select">
                            <li class="icon arrow"></li>
                            <li class="active">
                                <a class="active" href="javascript:;" data-filter="car_price_day"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;84&lt;/span&gt;">Per
                                    Day</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_hour"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;10&lt;/span&gt;">Per
                                    Hour</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_airport"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;99&lt;/span&gt;">Airport
                                    Transfer</a>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin content -->
    <div id="page_content_wrapper" class="hasbg withtopbar ">
        <div class="inner">

            <!-- Begin main content -->
            <div class="inner_wrapper">

                <div class="sidebar_content">

                    <h1>{{ $car->name }}</h1>
                    <div class="car_attribute_wrapper">
                        <div class="car_attribute_rating">
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="car_attribute_rating_count">
                                4&nbsp; reviews </div>
                        </div>
                    </div>
                    <div class="single_car_attribute_wrapper themeborder">
                        <div class="one_fourth">
                            <div class="car_attribute_icon ti-user"></div>
                            <div class="car_attribute_content">
                                5&nbsp;Passengers </div>
                        </div>

                        <div class="one_fourth">
                            <div class="car_attribute_icon ti-briefcase"></div>
                            <div class="car_attribute_content">
                                2&nbsp;Luggages </div>
                        </div>

                        <div class="one_fourth">
                            <div class="car_attribute_icon ti-panel"></div>
                            <div class="car_attribute_content">
                                Auto </div>
                        </div>

                        <div class="one_fourth last">
                            <div class="car_attribute_icon ti-car"></div>
                            <div class="car_attribute_content">
                                4&nbsp; Doors </div>
                        </div>
                    </div>
                    <br class="clear" />
                    <div class="single_car_content">
                        <h4 class="p1">Refueling</h4>
                        <p class="p2">Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic
                            fingerstache fanny pack nostrud. Photo booth anim 8-bit hella, PBR 3 wolf moon beard
                            Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave. Seitan
                            High Life reprehenderit consectetur cupidatat kogi. Et leggings fanny pack, elit bespoke
                            vinyl art party Pitchfork selfies master cleanse.</p>
                        <h4 class="p1">Car Wash</h4>
                        <p class="p2">Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                            chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami
                            readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar stumptown yr
                            pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth</p>
                        <h4 class="p1">No Smoking</h4>
                        <p class="p2">See-through delicate embroidered organza blue lining luxury acetate-mix
                            stretch pleat detailing. Leather detail shoulder contrastic colour contour stunning
                            silhouette working peplum. Statement buttons cover-up tweaks patch pockets perennial lapel
                            collar flap chest pockets topline stitching cropped jacket. Effortless comfortable full
                            leather lining eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek.
                            Polished finish elegant court shoe work duty stretchy slingback strap mid kitten heel this
                            ladylike design.</p>
                    </div>

                    <ul class="single_car_departure_wrapper themeborder">
                        <li>
                            <div class="single_car_departure_title">Included</div>
                            <div class="single_car_departure_content">
                                <div class="one_half ">
                                    <span class="ti-check"></span>Audio input
                                </div>
                                <div class="one_half last">
                                    <span class="ti-check"></span>All Wheel drive
                                </div>
                                <div class="one_half ">
                                    <span class="ti-check"></span>Bluetooth
                                </div>
                                <div class="one_half last">
                                    <span class="ti-check"></span>USB input
                                </div>
                                <div class="one_half ">
                                    <span class="ti-check"></span>Heated seats
                                </div>
                                <div class="one_half last">
                                    <span class="ti-check"></span>FM Radio
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="single_car_departure_title">Not Included</div>
                            <div class="single_car_departure_content">
                                <div class="one_half ">
                                    <span class="ti-close"></span>GPS Navigation
                                </div>
                                <div class="one_half last">
                                    <span class="ti-close"></span>Sunroof
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="fullwidth_comment_wrapper sidebar">

                        <h3 class="comment_title">4 Reviews</span></h3>
                        <div class="avg_comment_rating_wrapper themeborder">
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a name="comments"></a>

                            <div class="comment" id="comment-20">
                                <div class="gravatar">
                                    <img src="/car_assets/upload/author1-100x100.jpg" width="60" height="60"
                                        alt="Jack Dawson"
                                        class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                                </div>

                                <div class="right ">

                                    <h7>Jack Dawson</h7>

                                    <div class="comment_date">January 17, 2017 at 1:56 pm</div>
                                    <a rel='nofollow' class='comment-reply-link' href='#'
                                        onclick='return addComment.moveForm( "comment-20", "20", "respond", "112" )'
                                        aria-label='Reply to Jack Dawson'>Reply</a>
                                    <div class="comment_text" />
                                    <p>Et leggings fanny pack, elit bespoke vinyl art party Pitchfork selfies master
                                        cleanse Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan
                                        sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat
                                        flexitarian four loko tempor duis single-origin coffee. Banksy, elit small batch
                                        freegan sed.</p>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Driving</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Interior Layout</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Space &amp; Practicality</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment_rating_wrapper">
                                        <div class="comment_rating_label">Overall</div>
                                        <div class="br-theme-fontawesome-stars-o">
                                            <div class="br-widget">
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;" class="br-selected"></a>
                                                <a href="javascript:;"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br class="clear" />
                        </li>
                        <!-- #comment-## -->

                        <div class="comment" id="comment-21">
                            <div class="gravatar">
                                <img src="/car_assets/upload/me-100x100.jpg" width="60" height="60"
                                    alt="Anna Kornikova"
                                    class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                            </div>

                            <div class="right ">

                                <h7>Anna Kornikova</h7>

                                <div class="comment_date">January 17, 2017 at 2:01 pm</div>
                                <a rel='nofollow' class='comment-reply-link' href='#'
                                    onclick='return addComment.moveForm( "comment-21", "21", "respond", "112" )'
                                    aria-label='Reply to Anna Kornikova'>Reply</a>
                                <div class="comment_text" />
                                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed.
                                    Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident
                                    chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do
                                    umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean vinegar
                                    stumptown yr pop-up artisan sunt. Craft beer elit seitan exercitation, photo booth,
                                </p>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Driving</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Interior Layout</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Space &amp; Practicality</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_rating_wrapper">
                                    <div class="comment_rating_label">Overall</div>
                                    <div class="br-theme-fontawesome-stars-o">
                                        <div class="br-widget">
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;" class="br-selected"></a>
                                            <a href="javascript:;"></a>
                                            <a href="javascript:;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br class="clear" />
                    </li>
                    <!-- #comment-## -->

                    <div class="comment" id="comment-22">
                        <div class="gravatar">
                            <img src="/car_assets/upload/avatar-100x100.png" width="60" height="60"
                                alt="Marie Argeris"
                                class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                        </div>

                        <div class="right ">

                            <h7>Marie Argeris</h7>

                            <div class="comment_date">January 17, 2017 at 2:04 pm</div>
                            <a rel='nofollow' class='comment-reply-link' href='#'
                                onclick='return addComment.moveForm( "comment-22", "22", "respond", "112" )'
                                aria-label='Reply to Marie Argeris'>Reply</a>
                            <div class="comment_text" />
                            <p>Statement buttons cover-up tweaks patch pockets perennial lapel collar flap chest pockets
                                topline stitching cropped jacket. Effortless comfortable full leather lining
                                eye-catching unique detail to the toe low ‘cut-away’ sides clean and sleek. Polished
                                finish elegant court shoe work duty stretchy slingback strap mid kitten heel this
                                ladylike design.</p>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Driving</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Interior Layout</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Space &amp; Practicality</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_rating_wrapper">
                                <div class="comment_rating_label">Overall</div>
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br class="clear" />
                </li>
                <!-- #comment-## -->

                <div class="comment" id="comment-23">
                    <div class="gravatar">
                        <img src="/car_assets/upload/author2-100x100.jpg" width="60" height="60"
                            alt="Jessica Medina"
                            class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo" />
                    </div>

                    <div class="right ">

                        <h7>Jessica Medina</h7>

                        <div class="comment_date">January 17, 2017 at 2:06 pm</div>
                        <a rel='nofollow' class='comment-reply-link' href='#'
                            onclick='return addComment.moveForm( "comment-23", "23", "respond", "112" )'
                            aria-label='Reply to Jessica Medina'>Reply</a>
                        <div class="comment_text" />
                        <p>Foam padding in the insoles leather finest quality staple flat slip-on design pointed toe
                            off-duty shoe. Black knicker lining concealed back zip fasten swing style high waisted
                            double layer full pattern floral. Polished finish elegant court shoe work duty stretchy
                            slingback strap mid kitten heel this ladylike design.</p>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Driving</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Interior Layout</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Space &amp; Practicality</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_rating_wrapper">
                            <div class="comment_rating_label">Overall</div>
                            <div class="br-theme-fontawesome-stars-o">
                                <div class="br-widget">
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;" class="br-selected"></a>
                                    <a href="javascript:;"></a>
                                    <a href="javascript:;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br class="clear" />
            </li>
            <!-- #comment-## -->
        </div>

        <!-- End of thread -->
        <div style="height:10px"></div>

        <div id="respond" class="comment-respond">
            <h3 id="reply-title" class="comment-reply-title">Write A Review <small><a rel="nofollow"
                        id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small>
            </h3>
            <form action="#" method="post" id="commentform" class="comment-form">
                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                    Required fields are marked <span class="required">*</span></p>
                <p class="comment-form-comment">
                    <label for="comment">Comment</label>
                    <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea>
                </p>
                <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input id="author" name="author" type="text" value="" size="30"
                        maxlength="245" required='required' />
                </p>
                <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input id="email" name="email" type="text" value="" size="30"
                        maxlength="100" aria-describedby="email-notes" required='required' />
                </p>
                <p class="comment-form-url">
                    <label for="url">Website</label>
                    <input id="url" name="url" type="text" value="" size="30"
                        maxlength="200" />
                </p>
                <p class="comment-form-rating">
                    <label for="driving_rating">Driving</label>
                    <span class="commentratingbox">
                        <select id="driving_rating" name="driving_rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                </p>
                <p class="comment-form-rating"><label for="interior_rating">Interior Layout</label>
                    <span class="commentratingbox">
                        <select id="interior_rating" name="interior_rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                </p>
                <p class="comment-form-rating"><label for="space_rating">Space &amp; Practicality</label>
                    <span class="commentratingbox">
                        <select id="space_rating" name="space_rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                </p>
                <p class="comment-form-rating"><label for="overall_rating">Overall</label>
                    <span class="commentratingbox">
                        <select id="overall_rating" name="overall_rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                </p>
                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                        value="Post Review" /> <input type='hidden' name='comment_post_ID' value='112'
                        id='comment_post_ID' />
                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                </p>
            </form>
        </div><!--  -->

    </div>

    </div>

    <div class="sidebar_wrapper">

        <div class="sidebar_top"></div>

        <div class="sidebar">

            <div class="content">

                <div class="single_car_header_price">
                    <span id="single_car_price_scroll"><span class="single_car_currency">$</span><span
                            class="single_car_price">{{ $car->price }}</span></span>
                    <span id="single_car_price_per_unit_change_scroll" class="single_car_price_per_unit">
                        <span id="single_car_unit_scroll"></span>
                        <span class="ti-angle-down"></span>

                        <ul id="price_per_unit_select_scroll">
                            <li class="icon arrow"></li>
                            <li class="active">
                                <a class="active" href="javascript:;" data-filter="car_price_day"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;84&lt;/span&gt;">Per
                                    Day</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_hour"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;10&lt;/span&gt;">Per
                                    Hour</a>
                            </li>
                            <li>
                                <a class="active" href="javascript:;" data-filter="car_price_airport"
                                    data-price="&lt;span class=&quot;single_car_currency&quot;&gt;$&lt;/span&gt;&lt;span class=&quot;single_car_price&quot;&gt;99&lt;/span&gt;">Airport
                                    Transfer</a>
                            </li>
                        </ul>
                    </span>
                    <hr />
                </div>

                <div class="single_car_booking_wrapper themeborder book_instantly">
                    <div role="form" class="wpcf7" id="wpcf7-f5-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <h1>payment method</h1>

                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8"
                            class="form-horizontal" role="form">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">
                                    <p>
                                    </p>
                                    <input type="hidden" name="email" value="{{Auth::user()->email}}">
                                    {{-- required --}}
                                    <input type="hidden" name="amount" value="{{$car->price * 100}}"> {{-- required in kobo --}}
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                                    {{-- required --}}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                     <input type="hidden" name="callback_url" value="{{ route('callback') }}">

                                    <p>
                                        <button class="btn btn-danger btn-lg btn-block" type="submit"
                                            value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </p>


                                </div>
                            </div>
                        </form>
                    </div>
                    <br class="clear" />
                </div>

                <a id="single_car_share_button" href="javascript:;" class="button ghost themeborder"><span
                        class="ti-email"></span>Share this car</a>

                <div class="single_car_users_online_wrapper themeborder">
                    <div class="single_car_users_online_icon">
                        <span class="ti-info-alt"></span>
                    </div>
                    <div class="single_car_users_online_content">
                        <strong>231</strong> traveler(s) are considering our cars right now!
                    </div>
                </div>

            </div>

        </div>
        <br class="clear" />

        <div class="sidebar_bottom"></div>
    </div>

    </div>
    <!-- End main content -->

    <br class="clear" />
    <div class="car_related">
        <h3 class="sub_title">Similar cars</h3>
        <div id="portfolio_filter_wrapper"
            class="gallery classic three_cols portfolio-content section content clearfix" data-columns="3">
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                    data-id="post-141">

                    <a class="car_image" href="#">
                        <img src="/car_assets/upload/Mercedes-C-Class-Estate-1-700x466.jpg"
                            alt="Mercedes Benz C-Class" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#">
                                <h4>Mercedes Benz C-Class</h4>
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
                                        5 </div>
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

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">90</span>
                                <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                    data-id="post-251">

                    <a class="car_image" href="#">
                        <img src="/car_assets/upload/2017-lexus-ls-460-2-700x466.jpg" alt="Lexus LS 460" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#">
                                <h4>Lexus LS 460</h4>
                            </a>
                            <div class="car_attribute_rating">
                                <div class="br-theme-fontawesome-stars-o">
                                    <div class="br-widget">
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;" class="br-selected"></a>
                                        <a href="javascript:;"></a>
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
                                        5 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-briefcase"></div>
                                    <div class="car_attribute_content">
                                        4 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-panel"></div>
                                    <div class="car_attribute_content">
                                        Auto </div>
                                </div>

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">99</span>
                                <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
            <div class="element grid classic3_cols">
                <div class="one_third gallery3 classic static filterable portfolio_type themeborder"
                    data-id="post-255">

                    <a class="car_image" href="#">
                        <img src="/car_assets/upload/Porsche-Panamera-700x466.jpg" alt="Porsche Panamera" />
                    </a>

                    <div class="portfolio_info_wrapper">
                        <div class="car_attribute_wrapper">
                            <a class="car_link" href="#">
                                <h4>Porsche Panamera</h4>
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
                                        4 </div>
                                </div>

                                <div class="one_fourth">
                                    <div class="car_attribute_icon ti-panel"></div>
                                    <div class="car_attribute_content">
                                        Auto </div>
                                </div>

                            </div>
                            <br class="clear" />
                        </div>
                        <div class="car_attribute_price">
                            <div class="car_attribute_price_day three_cols">
                                <span class="single_car_currency">$</span><span class="single_car_price">252</span>
                                <span class="car_unit_day">Per Day</span>
                            </div>
                        </div>
                        <br class="clear" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
