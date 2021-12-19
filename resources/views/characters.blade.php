@component('layouts.new')

<style>
    .character > h5{
        color: #e48820;
        text-decoration: none
    }

    .character:hover{
        padding: 10px;
        background: #e48820;
        border-radius: 20%
    }

    .character:hover > a > h5{
        color: white;
        text-decoration: none
    }   
</style>


    <section style="margin-top: 150px">
        <div class="container mt-4">
            <div class="row text-center">
                <h2>
                   <span style="background: black; padding: 0px 20px; color: white">Characters</span> 
                </h2>
            </div>
            <div class="row" style="margin-top: 70px">
                
                @foreach ($characters as $character)
                <div class="col-md-4 text-center mb-5">
                    @if ($character->description == null)
                    <a href="#">
                        <img src="{{ $character->thumbnail }}" class="mb-2 rounded-circle" height="200" width="220" alt="">
                        <h5 style="color: #e48820; text-decoration:none">{{ $character->name }}</h5>
                       </a>
                    @else
                       <div  class="character">
                        <a href="/character/{{ $character->id }}">
                            <img src="{{ $character->thumbnail }}" class="mb-2 rounded-circle" height="200" width="220" alt="">
                            <h5>{{ $character->name }}</h5>
                           </a>
                       </div>
                    @endif
                    
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
@endcomponent