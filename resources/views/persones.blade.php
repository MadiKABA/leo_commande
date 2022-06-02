<h2>Liste des Personnes</h2>
@foreach (odbc_fetch_array($etudiants as $pers))
    <p>{{$pers[1]}}</P>
@endforeach
