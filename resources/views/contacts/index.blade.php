@extends('layouts.main')

@section('content')
<h1>All Contacts</h1>

<a href="{{ route('contacts.create') }}">Add Contact</a>
<a href="{{ route('contacts.show', 1) }}">Show contact</a>
@endsection