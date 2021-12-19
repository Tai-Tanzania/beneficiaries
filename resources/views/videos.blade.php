@component('layouts.new')
    <section style="margin-top: 150px">
        <div class="container mt-3">
            <div class="row text-center">
                <h2>
                   <span style="background: black; padding: 0px 20px; color: white">Animations</span> 
                </h2>
            </div>
            <div class="row" style="margin-top: 70px">
                
                @foreach ($videos as $video)
                <div class="col-md-4 text-center mb-5">
                    <iframe width="100%" height="350" src="{{ $video->link }}?autoplay=0&mute=1" allowfullscreen></iframe>
                    <br><br>
                    <h4 style="color: #e48820">
                        {{ $video->title }}
                    </h4>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
@endcomponent