<x-website.footer-news-letter/>
<footer class="bg_gray webSiteFooter">
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <p class="mb-lg-0 text-center">{!! GetCopyRight('2010',$WebConfig->name ) !!}</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="widget mb-lg-0">
                        <ul class="social_icons  social_icons_footer text-center text-lg-start">
                            @if($WebConfig->facebook)
                                <li><a href="{{$WebConfig->facebook}}" target="_blank" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                            @endif
                            @if($WebConfig->twitter)
                                <li><a href="{{$WebConfig->twitter}}"  target="_blank" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                            @endif

                            @if($WebConfig->youtube)
                                <li><a href="{{$WebConfig->youtube}}"  target="_blank" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                            @endif

                            @if($WebConfig->instagram)
                                <li><a href="{{$WebConfig->instagram}}" target="_blank" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            @endif

                            @if($WebConfig->linkedin)
                                    <li><a href="{{$WebConfig->linkedin}}" target="_blank" class="sc_linkedin"><i class="ion-social-linkedin"></i></a></li>
                            @endif





                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="footer_payment text-center text-lg-end">

                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
