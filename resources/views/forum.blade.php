@component('layouts.new')
<section style="margin-top: 150px">
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

    <div class="container mt-4" style="height: 100vh">
        <div class="row text-center">
            <h2>
                <span style="background: black; padding: 0px 20px; color: white">Discuss</span>
            </h2>
        </div>
        <div class="row" style="margin-top: 70px">

            <div class="col-md-9">

                <div class="card mb-4" style="width: 100%">
                    <div class="card-body text-center">
                        <a href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Create
                            post</a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered"">
      <div class=" modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create post</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/forum" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Content</label>
                                    <textarea name="body" id="" cols="100%" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mb-3 d-grid">
                                    <button class="btn d-block text-white" style="background: #e48820;" type="submit">
                                        Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($forum as $post)
            <div class="card mb-3 shadow" style="width: 100%">
                <div class="card-body">
                    <h5>{{ $post->title }}</h5>
                    <br>
                    <p>
                        {{ \Illuminate\Support\Str::words($post->body, 5, '...') }}
                    </p>
                    <small><a href="/post/{{ $post->id }}">Read more >></a></small>
                </div>
            </div>
            @endforeach

            {{ $forum->links() }}

        </div>

        <div class="col-md-3">
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
