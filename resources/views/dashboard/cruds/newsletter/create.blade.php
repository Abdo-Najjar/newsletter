@extends('dashboard.partials.layout')


@section('title' , $title )


@section('subheader__title' , $title )


@section('content')


<form class="kt-form" method="POST" action="{{route('newsletters.store')}}">

    @csrf

    <div class="kt-portlet__body">
        <div class="form-group validated">
            <label class="form-control-label" for="inputSuccess1">Name</label>
            <input name="name" type="text" value="{{old('name')}}" class="form-control   @error('name') is-invalid @enderror " id="inputSuccess1">

            @error('name')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group validated">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control  @error('description') is-invalid @enderror  ">{{old('description')}}</textarea>

            @error('description')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

    </div>
    <div class="kt-portlet__foot">
        <div class="kt-form__actions">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection