@extends('coreui::default.main')
@section('pagename', 'Default page')
@section('content')
<h3>Here's some content</h3>
<ul>
    <li>Total users active: 10</li>
    <li>Total active calls: 5</li>
</ul>
<h3>Multi-tenant stuff</h3>
@foreach ($tenants as $tname => $data)
<h4><a href='/tenant?tname={{ $tname }}'>{{ $tname }}</a></h4>
@if (!empty($data['error']))
<p>Error detected - {{ $data['error'] }}</p>
@endif
<ul>
    @foreach($data['rows'] as $name => $val)
    <li>{{ $name }} : {{ json_encode($val) }}</li>
    @endforeach
</ul>
@endforeach
@endsection