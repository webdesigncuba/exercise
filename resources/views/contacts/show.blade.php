@extends('layout.base')
@section('content')
    <div class="col-sm">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $contacts->name }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $contacts->contact }}</p>
                <p class="card-text">{{ $contacts->email }}</p>
            </div>
            <div class="card-footer">
                <div class="row">
                    @auth
                        <div class="col-sm">
                            <a href="{{ route('contacts.edit', $contacts->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </div>
                        <div class="col-sm">
                            <form action="{{ route('contacts.destroy', $contacts->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
