@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '400')
@section('message', __($exception->getMessage() ?: 'Nilai paper tidak berada di range 0.00 sampai 100.00'))
