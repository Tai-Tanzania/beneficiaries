@component('layouts.new')
<section style="margin-top: 150px">

    <div class="container mt-4" style="height: 100vh">

        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    
        @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row" style="margin-top: 70px">

            <div class="col-md-8">
               
                <div class="card mb-4" style="width: 100%">
                    <div class="card-body">
                        <h4>
                            {{ $post->title }}
                        </h4>
                        <br>
                        <p>
                            {{ $post->body }}
                        </p>
                    </div>
                </div>

                <h5><strong>Comments</strong></h5>

                <div class="mt-2 mb-4" style="width: 100%">
                    <form action="/comment/{{ $post->id }}" method="post">
                        @csrf
                        <textarea name="comment" id="" cols="100%" rows="4" class="form-control mb-3"></textarea>
                        <button class="btn text-white" style="background: #e48820;" type="submit">
                            Comment
                        </button>
                    </form>
                </div>

                @if (count($post->comments) == 0)
                    <div class="card" style="width: 100">
                        <div class="card-body text-center">
                            <p class="text-muted">No comments</p>
                        </div>
                    </div>
                @else
                @foreach ($post->comments as $comment)
                    <div class="card mb-2 p-0" style="width: 100%">
                        <div class="card-body d-flex flex-row justify-content-start">
                            <div>
                                <img src="{{ asset('tailogoimage.png') }}" alt="avatar" class="rounded-circle" style="max-width: 50px">
                            </div>
                            <div class="ms-4">
                                <small><strong>
                                    {{ $comment->user->username }}    
                                </strong></small>
                                <p>
                                    {{ $comment->body }}
                                </p>
                                <small>
                                    {{ $comment->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif

            </div>

            <div class="col-md-4">
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <strong>Rules</strong>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Do not say rude words</li>
                            <li>Be nice to one another</li>
                            <li>Behave like you would in real life</li>
                        </ol>
                    </div>
                </div>
            </div>
    

       </div>

    </div>
</section>
@endcomponent
