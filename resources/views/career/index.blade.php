@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Career</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('career.create') }}" title="Create a company"> <i class="fas fa-plus-circle"></i>
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
            <th>#</th>
            <th>Company</th>
            <th>Position</th>
            <th>Location</th>
            <th>Months</th>
            <th>From Date</th>
            <th>Technologies</th>
            <!-- <th>Date Created</th> -->
            <th>Actions</th>
        </tr>
        @foreach ($career as $car)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->introduction }}</td>
                <td>{{ $car->location }}</td>
                <td>{{ $car->cost }}</td>
                <td>{{ substr($car->from_date, 0, 7) }}</td>
                <td>{{ $car->technologies }}</td>
                <!-- <td>{{ date_format($car->created_at, 'm/y') }}</td> -->
                <td>
                    <form action="{{ route('career.destroy', $car->id) }}" method="POST">

                        <a href="{{ route('career.show', $car->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('career.edit', $car->id) }}">
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

    {!! $career->links() !!}

@endsection
