@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Contact me</h2>
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
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->type }}</td>
                <td>{{ $contact->frequency }}</td>
                <td><a href="{{ $contact->value }}" target="_blank">{{ $contact->value }}</a></td>
            </tr>
        @endforeach
    </table>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>#</th>
            <th>Company</th>
            <th>Position</th>
            <th>Location</th>
            <th>Months</th>
            <th>From Date</th>
            <th>Technologies</th>
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
            </tr>
        @endforeach
    </table>
@endsection
