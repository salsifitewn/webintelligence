@extends('layouts.app')

@section('content')
    @csrf

    <contacts-table :initial-contacts='{{ $contacts }}' />
    </contacts-table>

@endsection
