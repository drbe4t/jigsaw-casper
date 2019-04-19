<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="@yield('body-class', 'home-template')">
        <div class="site-wrapper">

            @yield('body')

            {{-- The footer at the very bottom of the screen --}}
            <footer class="site-footer outer">
                <div class="site-footer-content inner">
                    <section class="copyright"><a href="{{ $page->baseUrl }}">{{ $page->siteName }}</a> &copy; <script type="text/javascript">document.write(new Date().getFullYear());</script></section>
                    <nav class="site-footer-nav">
                        <a href="#">Latest Posts</a>
                        {{--<a href="{{ $page->socials->facebook->link }}" target="_blank" rel="noopener">Facebook</a>--}}
                        {{--<a href="{{ $page->socials->twitter->link }}" target="_blank" rel="noopener">Twitter</a>--}}
                        <a href="https://ghost.org" target="_blank" rel="noopener">Ghost</a>
                    </nav>
                </div>
            </footer>

        </div>

        {{--The big email subscribe modal content--}}
        @if($page->subscribe)
        <div id="subscribe" class="subscribe-overlay">
            <a class="subscribe-overlay-close" href="#"></a>
            <div class="subscribe-overlay-content">
                {{--{{#if @site.logo }}--}}
                {{--<img class="subscribe-overlay-logo" src="{{@site.logo}}" alt="{{@site.title}}" />--}}
                {{--{{/if}}--}}
                <h1 class="subscribe-overlay-title">Subscribe to {{ $page->siteName }}</h1>
                <p class="subscribe-overlay-description">Stay up to date! Get all the latest &amp; greatest posts delivered straight to your inbox</p>
                <form method="post" action="/subscribe/" id="" class="" _lpchecked="1">
                    <input class="confirm" type="hidden" name="confirm"><input class="location" type="hidden" name="location" value="https://demo.ghost.io/welcome-short/"><input class="referrer" type="hidden" name="referrer" value="https://demo.ghost.io/tag/getting-started/">

                    <div class="form-group">
                        <input class="subscribe-email" type="email" name="email" placeholder="youremail@example.com">
                    </div>
                    <button id="" class="" type="submit"><span>Subscribe</span></button>
                </form>
            </div>
        </div>
        @endif

        <script>
            var images = document.querySelectorAll('.kg-gallery-image img');
            images.forEach(function (image) {
                var container = image.closest('.kg-gallery-image');
                var width = image.attributes.width.value;
                var height = image.attributes.height.value;
                var ratio = width / height;
                container.style.flex = ratio + ' 1 0%';
            })
        </script>


        {{--jQuery + Fitvids, which makes all video embeds responsive--}}
        <script
                src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous">
        </script>
        {{--<script type="text/javascript" src="{{asset "built/jquery.fitvids.js"}}"></script>--}}

        {{--{{#if pagination.pages}}--}}
        {{--<script src="{{asset "built/infinitescroll.js"}}"></script>--}}
        {{--{{/if}}--}}
        @yield('scripts')
    </body>
</html>