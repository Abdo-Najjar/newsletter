@extends('dashboard.partials.layout')


@section('title' , $title ?? "Dashboard" )


@section('subheader__title' , $title ?? "Dashboard" )


@section('content')

    <!--begin::Portlet-->
    <div class="kt-portlet kt-portlet--skin-solid kt-bg-danger">
        <div class="kt-portlet__head kt-portlet__head--noborder">
            <div class="kt-portlet__head-label">
												<span class="kt-portlet__head-icon">
													<i class="flaticon-folder"></i>
												</span>
                <h3 class="kt-portlet__head-title">
                  {{$newsletter->name}}
                </h3>
            </div>

        </div>
        <div class="kt-portlet__body">
            <lu>
                <li>
                    Description :    {{$newsletter->description}}
                </li>

                <li>
                   Etat :    {{$newsletter->active}}
                </li>
                <li>
                    Created at   :  {{$newsletter->created_at}}
                </li>

                <li>
                    Updated at   :  {{$newsletter->updated_at}}
                </li>

                <li>
                    Number of mails :
                </li>

                <li>
                    Number of subscribers  :
                </li>
            </lu>


        </div>
    </div>

    <!--end::Portlet-->


    <!--end::Portlet-->
@endsection
