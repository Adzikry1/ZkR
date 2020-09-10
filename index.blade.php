@extends('layoutmaster')

@section('content')
    <DIV class="row">
        <DIV class="col-lg-12">
            <div class="pull-left">
                <h2>Laravel 6 Adzikry Cahya S</h2>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-success">Add product</a>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>no</th>
                <th>name</th>
                <th>detail</th>
                <th>action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Baju muslim</td>
                <td>ini baju muslim</td>
                <td>
                    <a href="#" class="btn btn-primary">edit</a>
                    <a href="#"  class="btn btn-danger">delete</a>
                </td>
            </tr>
        </table>
    </DIV>
@endsection