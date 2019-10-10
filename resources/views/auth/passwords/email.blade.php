@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <h1>
                            <div class="login-logo">
                                <a href="#">
                                    {{ env('APP_NAME', 'Permissions Manager') }}
                                </a>
                            </div>
                        </h1>
                        <p class="text-muted"></p>
                        <div>
                            {{ csrf_field() }}
                            <div class="form-group has-feedback">
                                <input type="email" name="email" class="form-control" required="autofocus" placeholder="Email">
                                @if($errors->has('email'))
                                    <em class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </em>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection