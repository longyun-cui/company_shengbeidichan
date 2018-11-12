{{--footer--}}
<footer id="footer">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <section class="widget about-widget clearfix">
                        <h4 class="title hide">关于我们</h4>
                        <a class="footer-logo" href="javascript:void(0);">
                            <img src="{{ url('/templates/moban2030/assets/images/footer-logo.png') }}" alt="Footer Logo">
                            {{--<img src="{{ config('company.info.logo') }}" alt="Footer Logo">--}}
                        </a>
                        <p>{{ config('company.info.description') }}</p>
                        <ul class="social-icons clearfix">
                            <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-2 col-sm-6">
                    <section class="widget twitter-widget clearfix">
                        <h4 class="title"></h4>
                        <div id="twitter-feeds" class="clearfix"></div>
                    </section>
                </div>
                <div class="col-md-4 col-sm-6">
                    <section class="widget address-widget clearfix">
                        <h4 class="title">联系我们</h4>
                        <ul>
                            <li><i class="fa fa-copyright"></i> {{ config('company.info.name') }} </li>
                            <li><i class="fa fa-map-marker"></i> {{ config('company.info.address') }} </li>
                            <li><i class="fa fa-user"></i> {{ config('company.info.linkman') }} </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:{{ config('company.info.mobile') }}">{{ config('company.info.mobile') }}</a> </li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:{{ config('company.info.email') }}">{{ config('company.info.email') }}</a> </li>
                            <li><i class="fa fa-clock-o"></i> 周一 - 周六: 9:00 - 18:00 </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            {{--<p class="copyright pull-left wow slideInRight">Copyright © 2018.{{ config('company、.info.name') }} All rights reserved.</p>--}}
            {{--<p class="copyright pull-left wow slideInRight">Copyright © 2018.上海盛贝房地产营销策划有限公司 All rights reserved.</p>--}}
            <p class="copyright pull-left wow slideInRight">
                版权所有@上海盛贝房地产营销策划有限公司(2018) &nbsp;&nbsp;
                <a href="http://www.miitbeian.gov.cn" target="_blank">备案号:沪ICP备18041650号</a>
            </p>
            <nav class="footer-nav pull-right wow slideInLeft _none">
                <ul>
                    <li><a href="{{ url('/houses') }}">楼盘</a></li>
                    <li><a href="{{ url('/contact') }}">联系我们</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="site-footer-bottom" style="height: 140px;">
    </div>
</footer>