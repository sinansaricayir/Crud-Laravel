@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Crud Operations With Laravel</h2>
        </div>
    </div>
</div>
<div class="row" align="left">
    <div class="pull-right">
        <a class="btn btn-success" href="/add">New Student Add</a>
    </div>
</div>



<table class="table table-stripped">
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Adress</th>
        <th>Option</th>
    </tr>

    @foreach ($students as $student)

    <tr>
        <td> {{$student->name}} </td>
        <td> {{$student->surname}} </td>
        <td> {{$student->email}} </td>
        <td> {{$student->phone}} </td>
        <td> {{$student->adress}} </td>
        <td>
            <a class="btn btn-primary" href=" {{route('edit',$student->id)}} ">Edit</a>
            <a class="btn btn-primary" href=" {{route('delete',$student->id)}} ">Delete</a>
        </td>

    </tr>

    @endforeach

</table>

@endsection
