<!DOCTYPE html>
<html lang="en">

<head>
    @include('public.layouts.style')
</head>

<body>
    <header>
        @include('public.layouts.header.index_header')
    </header>
    <div class="breadcrumb">
        <div class="container">
            <a class="breadcrumb-item" href="index.html">Home</a>
            <span class="breadcrumb-item active">Login</span>
        </div>
    </div>
    <section class="static about-sec">
        @include('public.login.sign-in_form')
    </section>
    <footer>
        @include('public.layouts.footer.index_footer')
    </footer>
    @include('public.layouts.script')
</body>

</html>