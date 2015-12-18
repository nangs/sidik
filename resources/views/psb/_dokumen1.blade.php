<ul>
	@foreach ($dokumen as $d)
	<li><a href="/uploads/{{$d->file}}" target="_blank">{{$d->nama}}</a></li>
	@endforeach
</ul>