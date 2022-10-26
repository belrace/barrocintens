@extends('dashboards/base')

@section('sidebar')
    @include('dashboards.maintenance.sidebar')
@endsection

@section('app')

    <div class="appointment-items">
        @foreach($allapointments as $appointment)
            <div class="appointment-item">
                <h2>Afspraak #{{ $appointment->id }}</h2><br><br>
                <div class="details">
                    <b>Bedrijf:</b> <br>
                    <b>Opmerking:</b> {{ $appointment->remark }}<br>
                    <b>Datum: {{ $appointment->date_added }}</b><br><br>
                </div>
            </div>
        @endforeach

    </div>
@endsection
