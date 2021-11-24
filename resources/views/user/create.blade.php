@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Create') }}</div>

                <div class="card-body">
                   <form action="" method="POST">
                       @csrf //auto csrf
                   <div class="form group">
                       <label>ID</label>
                       <input type="text"name="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <textarea name="name" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <textarea name="email" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Created</label>
                        <textarea name="created_at" class="form-control"></textarea>
                    </div>
                    <div class="form group">
                        <button type="submit" class="btn btn-primary">Create New Todos</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
