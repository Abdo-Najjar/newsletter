@extends('dashboard.partials.layout')


@section('title' , $title )


@section('subheader__title' , $title )


@section('content')


    <form class="kt-form" method="POST" action="{{route('mails.destroy' , ['mail'=>$mail->id])}}}">

    @csrf
    @method('DELETE')

    </form>


@endsection
