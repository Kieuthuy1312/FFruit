@extends('Backend.layouts.main')

@section('title')
    Trang chủ

@section('name_page')
    Trang chủ
@endsection


@section('content')
<div class="container">
  {{-- <a class="btn btn-danger" href="/roles/show_create_role">+Add role</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th >STT</th>
        <th >ID</th>
        <th >Name</th>
        <th >Created_at</th>
        <th >Updated_at</th>
        <th >Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($roles as $key=>$role)
        <tr>
            <td>{{ $key +1 }}</td>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->created_at }}</td>
            <td>{{ $role->updated_at }}</td>
            <td>
                <a href="/roles/{{ $role->id }}/edit">Update</a>
                <a href="/roles/{{ $role->id }}/delete">Delete</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
  </table> --}}
</div>
@endsection