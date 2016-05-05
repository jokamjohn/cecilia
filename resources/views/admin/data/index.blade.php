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
                                <th>Meter Number</th>
                                <th>Voucher Loaded</th>
                                <th>Current Units</th>
                            </tr>
                            </thead>
                            @foreach($data as $item)
                                <tr>
                                    <td>
                                        {{ $item->date->toDateString() }}
                                    </td>

                                    <td>
                                        {{ $item->meterNumber }}
                                    </td>


                                    <td>
                                        {{ $item->voucher}}
                                    </td>

                                    <td>
                                        {{ $item->currentUnits }}
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