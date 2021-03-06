@extends('layouts.success')
@section('title', 'Checkout')

@section('content')
    <!-- Main -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <h1>Oops!</h1>
                <p>
                    Your transaction is failed
                    <br>
                    Please contact our representative if this problem occure!
                </p>
            <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
                    Home Page
                </a>
            </div>
        </div>
    </main>
@endsection