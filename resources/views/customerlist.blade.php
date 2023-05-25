
@extends('main')
@section('style')
<style>
    table{
        margin: auto;
    }
    td, th{
        padding: 12px;
    }
    th{
        background: #7979ac;
        color: whitesmoke;
    }
    td{
        background: whitesmoke;
    }
</style>
@stop

@section('content')
    <table border=1>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->getFirstname()}} {{$customer->getLastname()}}</td>
                    <td>{{$customer->getEmail()}}</td>
                    <td>{{$customer->getCountry()}}</td>
                    <td><a href="customers/{{$customer->getId()}}">view details</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@stop
