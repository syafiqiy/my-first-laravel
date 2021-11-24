
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Show') }}</div>
                </form>
                <div class="card-body">
                
                   <div class="form group">
                       <label>ID</label>
                       <input type="text" value="{{$user->id}}" name="id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" value="{{$user->name}}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" value="{{$user->email}}" name="email" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
