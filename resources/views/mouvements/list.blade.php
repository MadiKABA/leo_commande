@extends('layout.layout')
 
@section('content')
 
	<h1>Historique des Mouvements</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Libelle Produit</th>
      <th scope="col">Date Mvt</th>
      <th scope="col">Quantite</th>
      <th scope="col">Reference Mvt</th>
      <th scope="col">Observations</th>
      <th scope="col">Entree</th>
      <th scope="col">type_mvt</th>
      <th scope="col">montant</th>
      <th scope="col">pmp</th>
      <th scope="col">PrixVente</th>
      <th scope="col">PrixAchat</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
        @foreach($mouvements as $mvtdata)
            <?php $mvt = json_decode($mvtdata); ?>
            <tr>
                <th scope="row">{{$mvt->LibProd}}</th>
                <th scope="row">{{date('d/m/Y',strtotime($mvt->date_mvt))}}</th>
                <th scope="row">{{$mvt->Quantite}}</th>
                <th scope="row">{{$mvt->ref_mvt}}</th>
                <th scope="row">{{$mvt->Observations}}</th>
                <th scope="row">{{$mvt->entree}}</th>
                <th scope="row">{{$mvt->type_mvt}}</th> 
                <th scope="row">{{$mvt->montant}}</th> 
                <th scope="row">{{$mvt->pmp}}</th> 
                <th scope="row">{{$mvt->PrixVente}}</th> 
                <th scope="row">{{$mvt->PrixAchat}}</th> 
            </tr>
        @endforeach
  </tbody>
</table>
 
@endsection