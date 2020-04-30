@extends('dashboard.partials.layout')


@section('title' , $title ?? "Dashboard" )


@section('subheader__title' , $title ?? "Dashboard" )


@section('content')

@push('css')
<style>
    #newslettermails-table_length {

        margin-right: 3rem;

    }
</style>

@endpush

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
        <ul>
            <li>
                Description : {{$newsletter->description}}
            </li>

            <li>
                Etat : {{$newsletter->active}}
            </li>
            <li>
                Created at : {{$newsletter->created_at}}
            </li>

            <li>
                Updated at : {{$newsletter->updated_at}}
            </li>

            <li>
                Number of mails :
            </li>

            <li>
                Number of subscribers :
            </li>
        </ul>


    </div>
</div>


<div>
    <div class="kt-portlet__body">
        <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12">

                    {!! $dataTable->table([
                    'class'=>'kt-datatable__table'
                    ]) !!}

                </div>
            </div>
        </div>
    </div>
</div>


@endsection


@push('js')


<script>
    $.extend(true, $.fn.dataTable.defaults, {
        language: {
            url : '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json'
        }
       });

</script>


{!! $dataTable->scripts() !!}

@endpush