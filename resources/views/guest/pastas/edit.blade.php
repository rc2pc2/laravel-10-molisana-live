@extends('guest.pastas.layouts.create-or-edit')

@section('page-heading', 'Modifica tipo di pasta')


@section('form-action')
    {{  route('guest.pastas.update', $pasta) }}
@endsection


@section('form-method')
    @method('PUT')
@endsection

@section('submit-button-text', 'Modifica tipo di pasta')
