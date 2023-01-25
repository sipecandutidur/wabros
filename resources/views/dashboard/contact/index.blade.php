@extends('dashboard.layouts.main')

@section('content')
<div class="lime-container">
    <div class="lime-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}

            </div>

            @endif
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="todo-sidebar">
                                        <div class="todo-new-task">
                                            {{-- <button class="btn btn-primary btn-block mb-2" data-toggle="modal" data-target="#newTask">Create New Contact</button> --}}
                                            <a class="btn btn-primary btn-block mb-2" href="/dashboard/contact/create" role="button">Create New Contact</a>
                                            <div class="col-md-6 container text-center"><small class="text-center row justify-content-md-center">- OR -</small></div>

                                            <button class="btn btn-success btn-block mt-2" data-toggle="modal" data-target="#newTask">Import Contact</button>
                                            <div class="modal fade" id="newTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalContact">Add New Contact</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/dashboard/contact" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control mb-3 @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name Contact" value="{{ old('name') }}" autofocus required>
                                                                    @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>

                                                                    @enderror
                                                                    <input type="text" class="form-control mb-3" name="slug" id="slug" placeholder="slug"  readonly hidden value="{{ old(
                                                                    'slug') }}" required>
                                                                    <input type="number" class="form-control mb-3 @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}" required>
                                                                    @error('phone')
                                                                        <div class="invalid-feedback">
                                                                            {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                    {{-- <select class="custom-select " aria-label="Default select example"> --}}
                                                                        {{-- <option >Open this select menu</option>
                                                                        @foreach ($categories as $category)
                                                                            @if(old('id') == $category->id)
                                                                            <option name="id" id="id" value="{{ $category->id }}" selected>{{ $category->title }} </option>
                                                                            @else
                                                                            <option name="id" id="id" value="{{ $category->id }}">{{ $category->title }}</option>

                                                                            @endif
                                                                        @endforeach
                                                                      </select> --}}
                                                                      <div class="modal-footer">
                                                                          <button type="submit" class="btn btn-primary">Add</button>
                                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                      </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="todo-menu">
                                            <h3>Filters</h3>
                                            <ul class="list-unstyled">
                                                <li class="active"><a href="#"><i class="fas fa-bars"></i>All Contact</a></li>
                                            </ul>
                                            <h3>Category</h3>
                                            {{-- <ul class="list-unstyled">
                                                @foreach ($contacts as $contact)
                                                <li class=""><a href="#"><i class="fas fa-tags"></i>{{ $c }}</a></li>
                                                @endforeach
                                            </ul> --}}
                                        </div>
                                        {{-- <div class="divider"></div> --}}

                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="todo-list">
                                        <div class="todo-search m-b-lg">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" id="todo-search" class="form-control" placeholder="Search Contact">
                                                </div>
                                            </form>
                                        </div>
                                            <div class="col-xl">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name</th>
                                                                    <th scope="col">Phone Number</th>
                                                                    <th scope="col">Option</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($contacts as $contact )
                                                                <tr>
                                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                                    <td>{{ $contact->name }}</td>
                                                                    <td>{{ $contact->phone }}</td>
                                                                    <td>
                                                                        <a class="badge bg-warning border-0" href="/dashboard/contact/{{ $contact->slug }}/edit" role="button">Edit</a>
                                                                        |
                                                                        <form action="/dashboard/contact/{{ $contact->id }}" method="post" class="d-inline">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure..?')">Delete</button>
                                                                        </form>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{ $contacts->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener("keyup", function(){
            // console.log(name.value);
            let preslug = name.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();

        });
        // name.addEventListener("keyup", function(){
            // let preslug = name.value;
            // preslug = preslug.replace(/ /g."-");
            // slug.value = preslug.toLowerCase();
            // console.log($name);

    </script>

    @include('dashboard.layouts.footer')
@endsection
