@extends('dashboard.partials.layout')


@section('title' , $title??"Dashboard" )


@section('subheader__title' , $title??"Dashboard" )


@section('content')

    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--skin-solid kt-bg-danger">
        <div class="kt-portlet__head kt-portlet__head--noborder">
            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon2-email"></i>
												</span>
                <h3 class="kt-portlet__head-title">
                    {{$mail->title}}
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">
            <ul>
                <li>
                    Content : {{$mail->content}}
                </li>


                <li>
                    Newsletter : {{$mail->newsletter->name}}
                </li>

                <li>
                    Created at : {{$mail->created_at}}
                </li>

                <li>
                    Updated at : {{$mail->updated_at}}
                </li>


            </ul>


        </div>
    </div>

    <!--end::Portlet-->
@endsection
