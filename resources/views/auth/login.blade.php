@extends('layouts.app')

@section('content')

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome </h2>

                <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officia eius maiores, fugiat, quasi repudiandae at nesciunt ipsum adipisci perspiciatis ad? Nesciunt neque assumenda, modi amet deserunt tempore at ad.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti in, facilis blanditiis aspernatur quaerat doloremque eveniet, saepe odio velit suscipit nam quidem eligendi impedit deleniti cumque. Repellendus culpa saepe nobis!
                   Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, alias repudiandae excepturi exercitationem veniam eveniet debitis nisi nihil facilis enim ratione commodi eligendi voluptates eos unde. Ullam delectus esse perferendis?
                </p>
            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="{{ route('login') }}" method="POST">
                            @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>

@endsection