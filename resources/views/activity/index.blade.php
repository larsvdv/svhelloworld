@extends('layouts.master')
@section('title', 'Aanmelden activiteiten')

@section('content')
    @if ($availableActivities->count() + $upcomingActivities->count())
        <p>Dit is een overzicht van de activiteiten die georganiseerd worden door Studievereniging "Hello World".</p>

        @if ($availableActivities->count())
            <h3>Beschikbare activiteiten</h3>

            <!-- Available activities -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum en tijd</th>
                        <th>Aanmeldperiode</th>
                        <th>ITP-waarde</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($availableActivities as $activity)
                        <tr>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}">{{ $activity->title }}</a>
                            </td>
                            <td>
                                @datetime($activity->starts_at) t/m @datetime($activity->ends_at)
                            </td>
                            <td>
                                @date($activity->available_from) t/m @date($activity->available_to)
                            </td>
                            <td>
                                @if(isset($activity->itp_value))
                                    {{ $activity->itp_value }}
                                @else
                                    Onbekend
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn btn-primary btn-xs">Bekijken</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if($upcomingActivities->count())
            <h3>Toekomstige activiteiten</h3>
            <!-- Unavailable activities -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum en tijd</th>
                        <th>Aanmeldperiode</th>
                        <th>ITP-waarde</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($upcomingActivities as $activity)
                        <tr>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}">{{ $activity->title }}</a>
                            </td>
                            <td>
                                @datetime($activity->starts_at) t/m @datetime($activity->ends_at)
                            </td>
                            <td>
                                @date($activity->available_from) t/m @date($activity->available_to)
                            </td>
                            <td>
                                @if(isset($activity->itp_value))
                                    {{ $activity->itp_value }}
                                @else
                                    Onbekend
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn btn-primary btn-xs">Bekijken</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if($finishedActivities->count())
            <h3>Afgelopen activiteiten</h3>
            <!-- Unavailable activities -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Naam</th>
                        <th>Datum en tijd</th>
                        <th>Aanmeldperiode</th>
                        <th>ITP-waarde</th>
                        <th>Acties</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($finishedActivities as $activity)
                        <tr>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}">{{ $activity->title }}</a>
                            </td>
                            <td>
                                @datetime($activity->starts_at) t/m @datetime($activity->ends_at)
                            </td>
                            <td>
                                @date($activity->available_from) t/m @date($activity->available_to)
                            </td>
                            <td>
                                @if(isset($activity->itp_value))
                                    {{ $activity->itp_value }}
                                @else
                                    Onbekend
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('activity.show', $activity->id) }}" class="btn btn-primary btn-xs">Bekijken</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @else
        <p class="alert alert-info">Op dit moment zijn er geen activiteiten onbeschikbaar, kijk op een later moment nog eens!</p>
    @endif
@endsection
