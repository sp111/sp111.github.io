@extends('app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <nav class= "navbar navbar-default" role= "navigation" >
                    <div class= "navbar-header" >
                        <a class="btn btn-lg btn-success" href="{{ URL::to('customer/create')}}"><i class="glyphicon glyphicon-plus"></i>&nbsp;Add new Customer</a>
                    </div>
                </nav>
                @if(count($customers) > 0)

                <table class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                    <th>Id&nbsp;</th>
                    <th>Name&nbsp;</th>
                    <th>Email&nbsp;</th>
                    <th>Phone&nbsp;</th>
                    <th>Actions&nbsp;</th>

                    </thead>
                    <tbody style="width: 100%">

                    @foreach ($customers as $customer)

                        <tr style='width: 100%'>

                                <td>{{$customer['_id']}}</td>
                                <td>{{$customer['name']}}</td>
                                <td>{{$customer['email']}}</td>
                                <td>{{$customer['phone']}}</td>


                            <td>
                                <a class="btn btn-success" href="{{'customer/'.$customer['_id'].'/edit'}}">Update</a>
                                <a class="btn btn-danger" href="{{'customer/'.$customer['_id'].'/delete'}}">Delete</a>
                            </td>
                            </tr>

                    @endforeach



                    </tbody>
                </table>

                @else
                <div class="col-md-12" >
                    <div class="col-md-12">
                        <h4>No customers found</h4>
                    </div>
                </div>
                @endif
            </div>

        </div>

    </div>
@endsection
