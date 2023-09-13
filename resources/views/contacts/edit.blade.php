@extends('layout.base')
@section('content')
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            @include('alert.alert')
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Contact</h3>
                <form action="{{ route('contacts.update', $contacts->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $contacts->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact</label>
                        <input class="form-control" id="contact" name="contact" value="{{ $contacts->contact }}"
                            required></input>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $contacts->email }}" required></input>
                    </div>
                    <button type="submit" class="btn mt-3 btn-primary">Update Contact</button>
                </form>
            </div>
        </div>
    </div>
@endsection
