@extends('dashboard.partials.layout')


@push('css')
    
<style>
    #newsletter-table_length , #mail-table_length{

    margin-right: 3rem;

    }
</style>
@endpush


@section('title' , $title )


@section('subheader__title' , $title )


@section('content')

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