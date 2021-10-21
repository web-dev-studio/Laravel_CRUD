@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Mike. The Engineer.</h1>
                <h2>Contacts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}" title="Create a contact">
                    <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Type</th>
            <th>Frequency</th>
            <th>Value</th>
            <th>Actions</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->type }}</td>
                <td>{{ $contact->frequency }}</td>
                <td>{{ $contact->value }}</td>
                <td>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">

                        <a href="{{ route('contacts.show', $contact->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('contacts.edit', $contact->id) }}">
                            <i class="fas fa-edit fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
