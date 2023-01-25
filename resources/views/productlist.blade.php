@extends('layouts.mainlogin')

@section('content')
<div class="lime-container">
    <div class="lime-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <nav aria-label="breadcrumb">
                        </nav>
                        <h3>Price List Whatsapp</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                             <div class="row">
                                @foreach ( $products as $product )
                                <div class="col-12 col-sm-6 col-md-3">
                                    <ul class="pricing">
                                        <li>
                                            <h1>{{ $product->title }}</h1>
                                        </li>
                                        <li>{{ $product->limit_message }} Message</li>
                                        <li>{{ $product->limit_contact }} Contact</li>
                                        <li>{{ $product->limit_phone }} Add Number</li>
                                        <li>{{ $product->life_time }} Days</li>
                                        <li>
                                            <h3 style="margin-top:0;">Rp.{{ $product->price }}</h3>
                                            <span>per month</span>
                                        </li>
                                        <li>
                                            <button type="button" class="btn btn-secondary btn-rounded">Subcrabe</button>
                                        </li>
                                    </ul>
                                </div>
                                @endforeach
                            <!-- /row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
