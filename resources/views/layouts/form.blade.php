@extends('layouts.master')
@section('form')
<form method="post" action="/process" >
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
	<p>nama Proyek :</p>
	<input type="text" name="namaProyek">
	<p>Deskripsi Proyek:</p>
	<input type="text" name="descProyek">
	<p>Tanggal Mulai:</p>
	
	<p>Tanggal Deadline:</p>
</form>

@endsection