@extends('layout.main')
@section('title')
    Employee Send SMS
@endsection
@section('style')
@endsection


@section('content')

<div class="card m-auto" style="width: 50%">
    <div class="card-header text-center bg-success text-white"> Send SMS</div>
    <div class="card-body">
        <form action="" method="POST">
            @csrf
            <div class="fname mt-2">
                <div class="row">
                    <div class="col-md-3 p-1 ">
                        First Name
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="fname" class="form-control">
                    </div>
                </div>
            </div>
            <div class="lname mt-2">
                <div class="row">
                    <div class="col-md-3 p-1 ">
                        Last Name
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="lname" class="form-control">
                    </div>
                </div>
            </div>
            <div class="email mt-2">
                <div class="row">
                    <div class="col-md-3 p-1">
                        Phone Number
                    </div>
                    <div class="col-md-9">
                        <div class=" input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-tty"></i></span>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment mt-2">
                <div class="row">
                    <div class="col-md-3 p-1 ">
                        Message
                    </div>
                    <div class="col-md-9">
                        <textarea name="message" id="" cols="6" class="form-control"></textarea>
                    </div>
                </div>
            </div>
    
            <div class="button mt-2">
                <div class="row">
                    <div class="col-md-3 p-1 ">

                    </div>
                    <div class="col-md-9 text-end">
                        <input type="submit" name="submit" class="btn btn-dark">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>  

@endsection
@section('script')
@endsection
