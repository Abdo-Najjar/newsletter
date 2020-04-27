
@extends('dashboard.partials.layout')


@section('title' , $title )
	

@section('subheader__title' , $title )
	

@section('content')


 {!! $dataTable->table() !!} 

@endsection

@push('js')

<script type="text/javascript">
    $.extend(true, $.fn.dataTable.defaults, {
        language: {
            url : '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json'
        }
    });
</script>

{!! $dataTable->scripts() !!}

@endpush