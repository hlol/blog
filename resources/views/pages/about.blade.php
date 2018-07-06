@extends('layouts.master')
@section('title','about')
    
@section('scripts.header')
    <script src="header"></script>
@endsection

@section('container')
{!! $first_name !!} {{-- si on veut que blade interprete le code HTML au niveau de la var firstname--}}
<?= $first_name .' '. $last_name; ?>
@endsection


@section('scripts.footer')
    <script src="tuto"></script>
@endsection

