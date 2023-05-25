
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
        @foreach($customers as $customer)
            <thead>
                <tr>
                    <th colspan=2>{{$customer->getFirstname()}} {{$customer->getLastname()}}</th>
                </tr>
                
            </thead>
            <tbody>
                <tr>
                    <td>Email</td>
                    <td>{{$customer->getEmail()}}</td>
                </tr>
                <tr>
                    <td>User Name</td>
                    <td>{{$customer->getUsername()}}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{$customer->getGender()}}</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>{{$customer->getCountry()}}</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>{{$customer->getCity()}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$customer->getPhone()}}</td>
                </tr>
            </tbody>
        @endforeach
    </table>

    
@stop