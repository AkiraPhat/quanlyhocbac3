@extends('layouts.metronictheme')

@section('content')
<form id="class-form" class="class-form" action="{{route('class.save')}}" method="POST" novalidate>
	@include('admin.classes.form')
</form>
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('js/classes/validation.js')}}"></script>
@endsection