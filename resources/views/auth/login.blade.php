@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="mb-4">Charles Fonzy Varquez</h1>
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <form class="form-inline">
                        <div class="row">
                            <div class="col-sm-7">
                                <input type="hidden" name="email" value="">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword2" class="sr-only">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary mb-2">Confirm Identity</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
