@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Speedrunner Rankings</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Rank</th>
            <th>Player Name</th>
            <th>Completion Time (seconds)</th>
        </tr>
        @foreach ($speedruns as $speedrun)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $speedrun->player_name }}</td>
            <td>{{ $speedrun->completion_time }}</td>
        </tr>
        @endforeach
    </table>
@endsection
