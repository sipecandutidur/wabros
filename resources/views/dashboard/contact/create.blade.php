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
                        <h3>Add New Contact</h3>
                        <p class="page-desc">You can add a contact by using this form</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Input Your Contact</h5>
                            <p>Please, double-check the number you entered</p>
                            <form  action="/dashboard/contact" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nameContact">Name Contact</label>
                                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter Contact Name" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="slug" name="slug" aria-describedby="slugHelp" placeholder="Enter Slug" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group">
                                    <label for="categoryContact">Category Contact</label>
                                    <select class="custom-select form-control" name="category_contact_id">
                                        <option value="">Open this select menu</option>
                                        @foreach ($categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Contact</button>
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
