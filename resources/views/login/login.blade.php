@extends('master.front.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9"></div>
                                    <input type="email" class="form-control" name="email"/>
                                </div>
                                <div class="row">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9"></div>
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                                <div class="row my-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9"></div>
                                    <input type="submit" class="btn btn-outline-success w-25" name="login"/>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

@endsection
