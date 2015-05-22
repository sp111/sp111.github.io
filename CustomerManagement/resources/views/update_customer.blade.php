<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/22/15
 * Time: 11:46 AM
 */
 if(isset($customer))

    $id = $customer->id;
    $name = $customer->name;
    $email = $customer->email;
    $phone = $customer->phone;
?>

@extends('app')

@section('content')
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Create a Customer</h3>
        </div>

        <form class="form-horizontal" action="{{ URL::to('customer/'.$id)}}" method="post">
            <input name="_method" type="hidden" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="control-group">
                <label class="control-label">Name</label>
                <div class="controls">
                    <input name="name" type="text"  placeholder="Name" value="{{$name}}"
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label">Email Address</label>
                <div class="controls">
                    <input name="email" type="text" placeholder="Email Address" value="{{$email}}" >
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mobile Number</label>
                <div class="controls">
                    <input name="phone" type="text"  placeholder="Mobile Number" value="{{$phone}}"
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" href="index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->

@endsection
