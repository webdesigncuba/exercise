@extends('layout.base')
@section('content')
    <div class="row">
        @if (Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contacts)
                    <tr>
                        <th scope="row">{{ $contacts->id }}</th>
                        <td>{{ $contacts->name }}</td>
                        <td>{{ $contacts->contact }}</td>
                        <td>{{ $contacts->email }}</td>
                        <td>
                            <div class="lista">
                                <a href="{{ route('contacts.edit', $contacts->id) }}"
                                    class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('contacts.destroy', $contacts->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
