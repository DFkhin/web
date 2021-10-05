@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <link rel="stylesheet" href="pStyle.css">
                    <div class="container">
                        <div class="card">
                            <div class="title">
                                <p>Free</p>
                            </div>
                            <div class="price">
                                <h5><sup>₱</sup>0</h5>
                                <p>Per month</p>
                            </div>
                            <div class="option">
                                <li>One user</li>
                                <li>Email support</li>
                                <li>30 Days Trial</li>
                            </div>
                                <button type="button">Sign up</button>
                        </div>
                        <div class="card">
                            <div class="title">
                                <p>Professional</p>
                            </div>
                            <div class="price">
                                <h5><sup>₱</sup>549</h5>
                                <p>Per month</p>
                            </div>
                            <div class="option">
                                <li>Up to 7 user</li>
                                <li>Email support</li>
                                <li>Analytics</li>
                                <li>Help line</li>
                            </div>
                                <button type="button">Sign up</button>
                        </div>
                        <div class="card">
                            <div class="title">
                                <p>Premium</p>
                            </div>
                            <div class="price">
                                <h5><sup>₱</sup>899</h5>
                                <p>Per month</p>
                            </div>
                            <div class="option">
                                <li>Up to 50 user</li>
                                <li>Email support</li>
                                <li>Analytics</li>
                                <li>Phone support</li>
                            </div>
                                <button type="button">Sign up</button>
                        </div>


                    </div>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('prices.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('prices.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

