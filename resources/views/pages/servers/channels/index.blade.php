@extends('app')

@section('page_title', 'View channels')

@section('content')
    <div class="row">
        @include('partials.messages')
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Channel</th>
                                <th>Channel</th>
                                <th>Channel</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($channels as $channel)
                                <tr>
                                    <td>{{ $channel['channel_name'] }}</td>
                                    <td>{{ $channel['pid'] }}</td>
                                    <td>{{ $channel['cid'] }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection