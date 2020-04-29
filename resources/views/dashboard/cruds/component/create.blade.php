@extends('dashboard.partials.layout')


@section('title' , $title )


@section('subheader__title' , $title )


@section('content')


<form class="kt-form" method="POST" action="{{route('components.store')}}">

    @csrf

        <div class="form-group validated">
            <label class="form-control-label" for="inputSuccess1">Content</label>
            <input name="content" type="text" value="{{old('content')}}" class="form-control   @error('content') is-invalid @enderror " id="inputSuccess1">


            @error('content')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group validated">
            <label>Chose a type:</label>
            <div></div>
            <select class="custom-select form-control " name="type_id">
                <option selected disabled> </option>
                @foreach($types as $type)
                <option value="{{ $type->id}}">{{ $type->type}}</option>
                @endforeach
            </select>
        </div>

    <div class="form-group">
        <div class="kt-form__actions">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection
