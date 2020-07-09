@extends('Template.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data PIC</h4>
            <a href="{{ route('PIC.create') }}" class="btn btn-primary" style="float: right">
            <i class="fa fa-plus"></i> Add PIC</a>
        </div>
        <div class="card-body">
            @if (Session::has('pesan'))
                <div class="alert alert-success">{{ Session::get('pesan') }}</div>
            @endif
            <table class="table table-striped">
                <thead class="thead thead-light">
                    <tr>
                        <th>No</th>
                        <th>PIC Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>PIC</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($company as $c) --}}
                        <tr>
                            {{-- <td>{{ ++$no }}</td>
                            <td>{{ $c->name_company }}</td>
                            <td>{{ $c->phone }}</td>
                            <td>{{ $c->address }}</td>
                            <td><img src="{{ asset('images/' .$c->logo) }}" alt="" style="width:100px"></td>
                            <td>{{ $c->pic }}</td>
                            <td>
                                <form action="{{ route('company.destroy', $c->id) }}" method="POST">
                                    @csrf
                                    <a href="{{ route('company.edit', $c->id) }}"> Edit</a>
                                    <button onclick="return confrim('Are you Sure?')"> Delete</button>
                                </form>
                            </td> --}}
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection