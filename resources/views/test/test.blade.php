@extends('dashboards/base')

@section('app')
<style>
.button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>

<button onclick="location.href='{{ url('http://barrocintens.test/testnaar') }}'">
     <div class="button">
     offerte aanvragen </div></button>


@endsection

