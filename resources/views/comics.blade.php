@component('layouts.new')
<section style="margin-top: 150px">
    <div class="container mt-4" style="height: 100vh">
        <div class="row text-center">
            <h2>
               <span style="background: black; padding: 0px 20px; color: white">Comics</span> 
            </h2>
        </div>
        <div class="row" style="margin-top: 70px">

            <div class="col-md-6 text-center col-sm-12">
                <div style="background-image: url({{ url('com/nawezaposter.png') }});width:100%;background-size:cover;height:400px"></div>
                <br><br>
                <h4>Naweza comic</h4>
                <br>
                <a href="{{ asset('com/NAWEZACOMICPOSTERFINAL.pdf') }}" target="_blank" class="btn text-white" style="background: #e48820" download>Download</a>
            </div>

            <div class="col-md-6 text-center col-sm-12">
                <div style="background-image: url({{ url('com/sichukuliiposter.png') }});width:100%;background-size:cover;height:400px"></div>
                <br><br>
                <h4>Sichukulii Poa comic</h4>
                <br>
                <a href="{{ asset('com/SichukuliiPoa.pdf') }}" target="_blank" class="btn text-white" style="background: #e48820" download>Download</a>
            </div>
        
        </div>
    </div>
</section>
@endcomponent
