@extends('dashboard.layouts.main')

@section('content')
<div class="lime-container">
    <div class="lime-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title">
                        <nav aria-label="breadcrumb">
                        </nav>
                        <h3>Edit Your Contact</h3>
                        <p class="page-desc">You can Edit a contact by using this form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Your Contact</h5>
                            <p>Please, double-check the number you entered</p>
                            <form  action="/dashboard/contact/{{ $contact->slug }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="nameContact">Name Contact</label>
                                    <input type="text" class="form-control @error('name')
                                    is-invalid
                                    @enderror" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Contact Name"
                                    value="{{ old('name', $contact->name) }}" autofocus>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="slug" name="slug" aria-describedby="slugHelp" placeholder="Enter Slug" value="{{ old('slug', $contact->slug) }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="number" class="form-control @error('phone')
                                        is-invalid
                                    @enderror" id="phone" name="phone" placeholder="Enter Phone Number"
                                    value="{{ old('phone', $contact->phone) }}">
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="categoryContact">Category Contact</label>
                                    <select class="custom-select form-control" name="category_contact_id">
                                        <option value="">Open this select menu</option>
                                        @foreach ($categories as $category )
                                        @if(old('category_contact_id', $contact->category_contact_id) == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->title }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Edit Contact</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function(){
            // console.log(name.value);
            fetch("/dasboard/contact/checkSlug?name=" + name.value)
                .then(response => response.json())
                .then(data => slug.value= data.slug)

        });
    </script>
@endsection
