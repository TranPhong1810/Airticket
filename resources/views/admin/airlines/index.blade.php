@extends('admin.main')
@section('header')
    <style>
        *{
            font-size: 14px;
        }
        #airlines_filter{
            margin-right: 8px;
        }
        #airlines_filter label{
            width: 100%;
            text-align: right;
        }
        #airlines_filter input{
            width: 80%;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    <div class="container-fluid mt-5">
        <h3 class="mt-3 mb-3 text-center">
            List of airlines
        </h3>
        <h1>
            <a href="{{ route('airlines.create')}}" class="btn btn-primary mb-3">Add Airline</a>
        </h1>
        <table id="airlines" class="table table-striped pe-2  ps-2" style="width:100%; font-size:14px">
            <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Create date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)

                <tr>
                    <td>{{$item->name}}</td>
                    <td><img class="" width="100px" height="100px" src="{{asset('storage/'.$item->image)}}" alt=""></td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('airlines.edit',$item)}}">Edit</a>
                        <button class="btn btn-danger" onclick="document.getElementById('item-{{$item->id}}').submit();">Delete</button>
                        <form action="{{ route('airlines.destroy',$item)}}" id="item-{{$item->id}}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
@section('footer')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#airlines');
    </script>
@endsection
