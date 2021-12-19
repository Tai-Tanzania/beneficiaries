@component('layouts.new')
<section style="margin-top: 150px">
    <div class="container mt-4" style="height: 100vh">
        <div class="row text-center">
            <h2>
               <span style="background: black; padding: 0px 20px; color: white">Articles</span> 
            </h2>
        </div>
        <div class="row" style="margin-top: 70px">
            @foreach ($articles as $article)
            <div class="col-md-4 text-center mb-2">
                <img src="{{ $article->thumbnail }}" style="max-width: 200px" alt="">
                <br><br>
                <a href="{{ $article->document }}" target="_blank" style="color: black">
                    <strong>{{ $article->title }}</strong>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endcomponent
