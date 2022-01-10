@component('layouts.new')
    <section style="margin-top: 150px">
        <div class="container mt-3">
            <div class="row text-center">
                <h2>
                   <span style="background: black; padding: 0px 20px; color: white">REGISTER</span> 
                </h2>
            </div>
            <div class="d-flex flex-row justify-content-center" style="margin-top: 70px">
                
                <div class="card" style="width: 30rem">
                    <div class="card-body">
                        <form action="/register" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-lg text-white" style="background: #e48820;" type="submit">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        Have an account already? Then <a href="/login">Login</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endcomponent