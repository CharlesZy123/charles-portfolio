@extends('layouts.app')

@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1 class="mb-4">Charles Fonzy Varquez</h1>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-12 mt-4">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-7">
                                <input type="hidden" name="email" value="varquezcharles@fonzy.com">
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
