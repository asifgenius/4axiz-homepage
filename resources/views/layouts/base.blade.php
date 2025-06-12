<!DOCTYPE html>
<html lang="en">
@include('partials.head') 

<body class="home wp-singular page-template page-template-blank-builder page-template-blank-builder-php page page-id-2500 wp-embed-responsive wp-theme-iteck wp-child-theme-iteck-child elementor-default elementor-kit-8 elementor-page elementor-page-2500 e--ua-blink e--ua-chrome e--ua-webkit rs-safari"
	data-elementor-device-mode="desktop">

    @include('partials.header')

    <div>
        @yield('content')
    </div>

    @include('partials.footer')

       @include('partials.script')
</body>
</html>
