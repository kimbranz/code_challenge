
@extends('main')
@section('style')
<style>
    table{
        margin: auto;
    }
    td, th{
        padding: 12px;
    }
    th, th a{
        background: #536d97;
        color: whitesmoke;
        padding: 18px;
        border-radius: 5px;
    }
</style>
@stop

@section('content')
    <table>
        <thead>
            <tr>
                <th>
                    <a href="{{url('import')}}">Import Data</a>
                </th>
                <th>
                    <a href="{{url('customers')}}">List of Customers</a>
                </th>
            </tr>
        </thead>
    </table>
@stop
