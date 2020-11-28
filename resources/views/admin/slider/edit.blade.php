
@inject('blog', 'App\Helpers\Helper')

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <a href="{{$view =route("$controller_name"."_view")}}" target="_blank">list</a>
        <a href="{{$add=route("$controller_name"."_form")}}" target="_blank">add</a>
        <a href="{{$edit=route("$controller_name"."_form",['id'=>11])}}" target="_blank">edit</a>
        <a href="{{$delete=route("$controller_name"."_delete",['id'=>10])}}" target="_blank">delete</a>
        <a href="{{$status=route("$controller_name"."_status",['id'=>'1','active'=>'inactive'])}}" target="_blank">status</a>
        <h1> Xin Chao {{ $blog->getname_Admin(route("$controller_name"."_form")) }}</h1>

        <?php 
        
        echo "<h1>$view</h1>";

        echo "<br>".route("$controller_name"."_view")."<br>";
        echo route("$controller_name"."_form")."<br>";
        echo route("$controller_name"."_form",['id'=>11])."<br>";
        echo route("$controller_name"."_delete",['id'=>10])."<br>";
        echo route("$controller_name"."_status",['id'=>'1','active'=>'inactive'])."<br>";
        ?>
        
    </body>
</html>