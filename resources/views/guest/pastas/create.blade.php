@extends('guest.pastas.layouts.create-or-edit')

@section('page-heading', 'Crea tipo di pasta')

@section('form-action')
    {{  route('guest.pastas.store') }}
@endsection

@section('submit-button-text', 'Crea tipo di pasta')
