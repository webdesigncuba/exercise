@extends('layout.base')
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
           @include('alert.alert')
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Add a Contacts</h3>
                <form action="{{ route('contacts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input class="form-control" id="contact" name="contact" required></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required></input>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Create Contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
