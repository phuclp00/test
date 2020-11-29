<!DOCTYPE html>
<html lang="en">

<head>
    @include('public.layouts.style')
</head>

<body>
    <!-- SLIDER BOOKS-->
    <header>
        @include('public.layouts.header.index_header')
    </header>
    
    <!-- SLIDER BOOKS-->
    <section class="slider">
        @include('public.layouts.content.index_slider')
    </section>
     <!--RECOMENED BOOKS -->
    <section class="recomended-sec">
        @include('public.layouts.content.index_recomended-sec')
    </section>
     <!--ABOUT BOOK -->
    <section class="about-sec">
        @include('public.layouts.content.index_about-sec')
    </section>
     <!--RECENTLY BOOKS -->
    <section class="recent-book-sec">
        @include('public.layouts.content.index_recent-book-sec')
    </section>
     <!-- FEATURE -->
    <section class="features-sec">
        @include('public.layouts.content.index_features-sec')
    </section>
     <!--OFFER BOOKS -->
    <section class="offers-sec" style="background:url(images/offers.jpg)no-repeat;">
        @include('public.layouts.content.index_offer-sec')
    </section>
     <!--QUOTES  -->
    <section class="testimonial-sec">
        @include('public.layouts.content.index_Testimonial-sec')
    </section>
     <!--FOOTER  -->
    <footer>
        @include('public.layouts.footer.index_footer')
    </footer>
    @include('public.layouts.script')
</body>

</html>