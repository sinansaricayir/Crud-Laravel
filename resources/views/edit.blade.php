@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>
                Edit Student
            </h2>
        </div>
    </div>
</div>


<div class="row">
    <form action=" {{ route('editpost',$student[0]->id) }} " method="POST">
        @csrf

        <div class="col-sm-4">

            <div class="left">
                <strong>Name</strong>
                <input  name="name" class="form-control" value=" {{ $student[0]->name}} "></textarea>
            </div>

            <div class="left">
                <strong>Surname</strong>
                <input  name="surname" class="form-control" value=" {{ $student[0]->surname}} "></textarea>
            </div>

            <div class="left">
                <strong>E-Mail</strong>
                <input  name="email" class="form-control" value=" {{ $student[0]->email}} "></textarea>
            </div>

            <div class="left">
                <strong>Phone</strong>
                <input  name="phone" class="form-control" value=" {{ $student[0]->phone}} "></textarea>
            </div>

            <div class="left">
                <strong>Adress</strong>
                <input  name="adress" class="form-control" value=" {{ $student[0]->adress}} "></textarea>
            </div>

            <br>

            <div class="left">
                <button type="submit" class="btn btn-primary" > Update </button>
            </div>


        </div>

    </form>
</div>

