@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '400')
@section('message', __($exception->getMessage() ?: 'Nilai Paper tidak berada di range 0 sampai 100.00'))
