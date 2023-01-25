@extends('layouts.main')

@section('content')
<div class="lime-container">
    <div class="lime-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h3>Help Center</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="help-search">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter keywords" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button" id="button-addon1">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Popular Articles</h5>
                                    <div class="help-topics">
                                        <ul class="list-unstyled">
                                            <li><a href="#">How to request refund?</a></li>
                                            <li><a href="#">Why I didn't get my refund?</a></li>
                                            <li><a href="#">How long is author supposed to support an item?</a></li>
                                            <li><a href="#">How do I purchase an item?</a></li>
                                            <li><a href="#">Where is my purchase code?</a></li>
                                            <li><a href="#">Whats the difference between license types?</a></li>
                                            <li><a href="#">Is support included in the item price?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Account</h5>
                                    <div class="help-topics">
                                        <ul class="list-unstyled">
                                            <li><a href="#">How do I purchase an item?</a></li>
                                            <li><a href="#">Where is my purchase code?</a></li>
                                            <li><a href="#">Is support included in the item price?</a></li>
                                            <li><a href="#">How to request refund?</a></li>
                                            <li><a href="#">Why I didn't get my refund?</a></li>
                                            <li><a href="#">How long is author supposed to support an item?</a></li>
                                            <li><a href="#">Whats the difference between license types?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Licenses</h5>
                                    <div class="help-topics">
                                        <ul class="list-unstyled">
                                            <li><a href="#">How long is author supposed to support an item?</a></li>
                                            <li><a href="#">Whats the difference between license types?</a></li>
                                            <li><a href="#">Why I didn't get my refund?</a></li>
                                            <li><a href="#">How do I purchase an item?</a></li>
                                            <li><a href="#">How to request refund?</a></li>
                                            <li><a href="#">Where is my purchase code?</a></li>
                                            <li><a href="#">Is support included in the item price?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Privacy</h5>
                                    <div class="help-topics">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Is support included in the item price?</a></li>
                                            <li><a href="#">How long is author supposed to support an item?</a></li>
                                            <li><a href="#">How do I purchase an item?</a></li>
                                            <li><a href="#">How to request refund?</a></li>
                                            <li><a href="#">Where is my purchase code?</a></li>
                                            <li><a href="#">Whats the difference between license types?</a></li>
                                            <li><a href="#">Why I didn't get my refund?</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Topic Category</h5>
                            <div class="help-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#">Installation</a></li>
                                    <li><a href="#">Basic Usage</a></li>
                                    <li><a href="#" class="active">Payments</a></li>
                                    <li><a href="#">Registration</a></li>
                                    <li><a href="#">Plugins</a></li>
                                    <li><a href="#">Control Panel</a></li>
                                    <li><a href="#">Uploading Files</a></li>

                                    <button type="button" class="btn btn-primary m-t-sm" data-toggle="modal" data-target="#exampleModal">
                                        Subimt Request
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Help Request</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="topic" placeholder="Enter topic">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="account" placeholder="Account link">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Ask a question" id="question" rows="3"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@include('partials.footer')
@endsection
