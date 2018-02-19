@extends ('layout.master')



@section('content')
    <div class="jumbotron jumbotron-fluid text-white text-center" id="indexJumbotron">
        <div class="container">
            <h1 class="display-1 text-white">Glamour Essence Beauty</h1>
            <p class="lead">Modern Beauty For Your Everyday Life...</p>
        </div>
    </div>



    <div class="row">

        <div class="container col-xs-12 col-sm-4 text-center" id="testBox">
            <h3>
            Here's a Test
            </h3>

            <p>
            Adding in a paragraph here. I don't really care what it is.
            </p>

        </div>

        <div class="container col-xs-12 col-sm-4 text-center" id="announcement">
            @include('posts.post')
        </div>
        
        <div class=" container col-xs-12 col-sm-4 text-center" id="testBox">
            <h3>
            Here's a Test
            </h3>
            <p>
            Adding in a paragraph here. I don't really care what it is.
            </p>
            
        </div>

    </div>


     <script src="/js/index/index.js"></script>

@endsection

{{--  @yield('post-content')  --}}
