@extends('admin.main.app')

@section('title','Data')

@section('content')


    @if($data->count())

        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Your Currently Posted Jobs</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Temperature</th>
                                <th>Humidity</th>
                            </tr>
                            </thead>
                            @foreach($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->date->toDateString() }}
                                    </td>

                                    <td>
                                        {{ $item->temperature }}
                                    </td>

                                    <td>
                                        {{ $item->humidity }}
                                    </td>

                                </tr>
                            @endforeach

                        </table>
                    </div>
                </div>

            </div>
        </div>

    @else
        @include('message',[ 'title'=>'Data' ,'message' => 'You have no data now '])
    @endif

    {!! $data->render() !!}

@endsection