@extends('app')

@section('content')
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Create a Customer</h3>
        </div>

        <form class="form-horizontal" action="{{ URL::to('customer')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name"
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="Email Address" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <input name="phone" type="text"  placeholder="Mobile Number"
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Create</button>
                <a class="btn" href="index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->

@endsection
