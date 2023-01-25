@extends('dashboard.layouts.main')

@section('content')
<div class="lime-container">
    <div class="lime-body mailbox">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mailbox-options d-flex align-items-center">
                        <button class="btn btn-primary m-r-xxs" data-toggle="modal" data-target="#compose">Compose</button>
                        <button class="btn btn-secondary m-r-xxs">Refresh</button>
                        <button class="btn btn-secondary m-r-xxs">Settings</button>
                        <p class="mail-count ml-auto">1-50 of 1,957</p>
                        <button class="btn btn-secondary m-l-xxs mail-left-btn">&lt;</button>
                        <button class="btn btn-secondary float-right m-l-xxs no-m-r mail-right-btn">&gt;</button>
                        <div class="modal fade" id="compose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="emailto" aria-describedby="emailto" placeholder="To">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Message" id="mail-message" rows="3"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mailbox-search">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Message" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="button" id="button-addon1">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="card card-transparent">
                        <div class="card-body">
                            <div class="mailbox-menu">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="active"><i class="material-icons">send</i>Sent</a></li>
                                    <li><a href="#"><i class="material-icons">mail_outline</i>Drafts</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="material-icons">delete_outline</i>Trash</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="email-list">
                                <ul class="list-unstyled">
                                    @foreach ($message as $chat )
                                    <li class="active">
                                        <a href="#">
                                            <div class="email-list-item">
                                                <div class="email-author">
                                                    {{-- <img src="{{ $c->img }}" alt="{{ $c->name_message }}"> --}}
                                                    <span class="author-name">{{ $chat->title }}</span>
                                                    <span class="email-date">{{ $chat->created_at->diffForHumans() }}</span>
                                                </div>
                                                <div class="email-info">
                                                    <span class="email-subject">
                                                        {{ $chat->subject }}
                                                    </span>
                                                    <span class="email-text">
                                                       {{ $chat->body }}
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="mail-container">
                                <div class="mail-header">
                                    <div class="mail-title">
                                      {{ $message[0]->subject }}
                                    </div>
                                    <div class="mail-actions">
                                        <button class="btn btn-secondary">Forwawrd</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                                <div class="mail-info">
                                    <div class="mail-author">
                                        <img src="/assets/images/avatars/store.jpg" alt="Mentari Shop">
                                        <div class="mail-author-info">
                                            <span class="mail-author-name">{{ $message[0]->title }}</span>
                                            <span class="mail-author-address">{{ $message[0]->sender }}</span>
                                        </div>
                                    </div>
                                    <div class="mail-other-info">
                                        <span>{{ $message[0]->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <div class="divider"></div>
                                <div class="mail-text">
                                    <p>Dear ,<br><br>{{ $message[0]->body }}<br><br>Thanks in {{ $message[0]->title }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('dashboard.layouts.footer')

@endsection
