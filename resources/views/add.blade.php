@extends('layout')

@section('content')


<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>
                Add New Student
            </h2>
        </div>
    </div>

    <form action=" {{route('addpost')}} " method="POST">
        @csrf


            <div class="col-sm-4">

                <div class="left">
                    <strong>Name</strong>
                    <input  name="name" class="form-control" placeholder="Name"></textarea>
                </div>

                <div class="left">
                    <strong>Surname</strong>
                    <input  name="surname" class="form-control" placeholder="Surname"></textarea>
                </div>

                <div class="left">
                    <strong>E-Mail</strong>
                    <input  name="email" class="form-control" placeholder="E-Mail"></textarea>
                </div>

                <div class="left">
                    <strong>Phone</strong>
                    <input  name="phone" class="form-control" placeholder="Phone"></textarea>
                </div>

                <div class="left">
                    <strong>Adress</strong>
                    <input  name="adress" class="form-control" placeholder="Adress"></textarea>
                </div>

                <br>

                <div class="left">
                    <button type="submit" class="btn btn-primary" > Add </button>
                </div>


            </div>


    </form>
</div>

