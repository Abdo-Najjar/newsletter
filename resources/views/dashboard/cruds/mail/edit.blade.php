
@extends('dashboard.partials.layout')


@section('title' , $title )


@section('subheader__title' , $title )


@section('content')


    <form class="kt-form" method="POST" action="{{route('mails.update' , ['mail'=>$mail->id])}}}">

        @csrf
        @method('PATCH')

        <div class="kt-portlet__body">
            <div class="form-group validated">
                <label class="form-control-label" for="inputSuccess1">Title</label>
                <input name="title" type="text" value="{{$mail->title}}" class="form-control   @error('title') is-invalid @enderror " id="inputSuccess1">

                @error('title')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group validated">
                <label class="form-control-label" for="inputSuccess1">Content</label>
                <input name="content" type="text" value= "{{$mail->content}}" class="form-control   @error('content') is-invalid @enderror " id="inputSuccess1">


                @error('content')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Chose a newsletter :</label>
                <div></div>
                <select class="custom-select form-control " name="newsletter_id">
                    <option selected disabled> </option>
                    @foreach($newsletters as $newsletter)
                        <option value="{{$newsletter->id}}">{{$newsletter->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="kt-portlet__foot">
            <div class="kt-form__actions">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>



@endsection
