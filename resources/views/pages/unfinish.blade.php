@extends('layouts.success')
@section('title', 'Checkout')

@section('content')
    <!-- Main -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <h1>Sorry!</h1>
                <p>
                    Your transaction is unfinished.
                </p>
            <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection