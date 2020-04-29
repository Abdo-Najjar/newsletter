@extends('dashboard.partials.layout')


@section('title' , $title??"Dashboard" )


@section('subheader__title' , $title??"Dashboard" )


@section('content')

    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--skin-solid kt-bg-danger">
        <div class="kt-portlet__head kt-portlet__head--noborder">
            <div class="kt-portlet__head-label">

                <h3 class="kt-portlet__head-title">
                    Component {{$component->id}}
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">
            <lu>
                <li>
                    Content : {{$component->content}}
                </li>

                <li>
                    Created at : {{$component->created_at}}
                </li>

                <li>
                    Updated at : {{$component->updated_at}}
                </li>


            </lu>


        </div>
    </div>

    <!--end::Portlet-->

@endsection
