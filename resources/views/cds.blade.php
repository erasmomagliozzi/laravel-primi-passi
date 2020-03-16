@include('layouts.head')

<body>
    <div class="container">
        <header>
            <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
        </header>

        <div class="cds-container">
            @foreach ($data as $cd)
            <div class="cd">
                <img src="{{$cd['img_path']}}" />

                <h3>{{$cd['Title']}}</h3>
                <small>{{$cd['Artist']}}</small>
                <strong>{{$cd['Year']}}</strong>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
