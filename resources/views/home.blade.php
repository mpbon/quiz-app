@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            <div id="app">
                <quiz-question></quiz-question>
            </div>
                    You are logged in!
                </div>

                <div class="links">
                    <a href="https://github.com/mpbon/quiz-app"><i class="fab fa-github"></i> See the code at my GitHub account</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
