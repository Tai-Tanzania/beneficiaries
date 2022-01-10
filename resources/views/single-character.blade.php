@component('layouts.new')
    <section style="margin-top: 150px">
        <div class="container">
            <div class="mt-4">
                <h2> 
                    {{ $character->name }}
                </h2>
                <br>
                <div class="row">

                    <div class="col-md-4">
                        <img src="{{ asset($character->image) }}" style="max-width: 350px" alt="">
                    </div>

                    <div class="col-md-8">
                        <p>
                            <strong>Age:</strong> {{ $character->age }} years old
                        </p>
                        <br>
                        <p style="width: 500px; text-align:justify">
                            {{ $character->description }}
                        </p>

                        <br><br>
                        <h4>
                            Appears in:
                        </h4>
                        <br><br>
                        <div class="row">
                            @foreach ($character->videos as $video)
                            <div class="col-md-6 col-sm-12 text-center mb-3">
                                <iframe width="300" height="250" src="{{ $video->link }}?autoplay=0&mute=1" allowfullscreen></iframe>
                                <br><br>
                                <h4 style="color: #e48820">
                                    {{ $video->title }}
                                </h4>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <form action="/character/thoughts/{{ $character->id }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <span style="background: black; padding: 6px 20px; color: white; font-size: 20px">What do you think of {{ $character->name }}</span> 
                            <br><br>
                            <textarea name="answer" cols="100%" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn text-white" type="submit" style="background: #e48820; padding:5px 30px">
                                Post your thoughts
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <span style="background: black; padding: 6px 20px; color: white; font-size: 20px">What others think</span>
                    <div class="mt-3">
                        @foreach ($character->comments as $comment)
                            <div class="card ps-3 shadow py-1">
                                {{ $comment->body }}
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endcomponent