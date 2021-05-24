@extends('layouts.master')
@section('main')

<div class="row">
    <div class="col-sm-12">
        @if(session()->get('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>

    <div class="col-sm-12">
        <br />
        <h3 class="display-5 text-center">Our Cat List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Age</th>
                    <th colspan="2" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cats as $count => $cat)
                <tr>
                    <td>{{++$count}}</td>
                    <td><a href="{{ route('cats.show',$cat->cat_id)}}">{{$cat->name}} </a></td>
                    <td>{{$cat->date_of_birth}}</td>
                    <td>{{$cat->age()}}</td>
                    <td class="text-center">
                        <a href="{{ route('cats.edit',$cat->cat_id)}}" class="btn btn-primary btnblock">Edit</a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('cats.destroy', $cat->cat_id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-block" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
            <a style="margin: 19px;" href="{{ route('cats.create')}}" class="btn btn-primary">New Cat Details</a>
        </div>

    </div>

</div>
@endsection