@extends('Template.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add PIC</h4>
        </div>
        <div class="card-body">
            @if (count($errors) > 0)
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('PIC.store')}}" class="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name_pic"> PIC Name </label>
                    <input type="text" class="form-control" name="name_pic">
                </div>
                <div class="form-group">
                    <label for="email"> Email Address </label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="phone-number"> Phone Number </label>
                    <input type="text" class="form-control" name="phone_number">
                </div>
                <div class="form-group">
                    <label for="pic"> Address </label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> Submit</button>
                    <a href="/PIC/Home" class="btn btn-warning"> Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection