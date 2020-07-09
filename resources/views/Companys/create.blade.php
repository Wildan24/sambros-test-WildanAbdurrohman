@extends('Template.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Company</h4>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('company.store')}}" class="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_company"> Company Name </label>
                    <input type="text" class="form-control" name="name_company">
                </div>
                <div class="form-group">
                    <label for="phone"> Phone Number </label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label for="address"> Company Address </label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label for="pic"> PIC </label>
                    <input type="text" class="form-control" name="pic">
                </div>
                <div class="form-group">
                    <label for="logo"> Upload Logo </label>
                    <input type="file" class="form-control" name="logo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Submit</button>
                    <a href="/" class="btn btn-warning"> Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection