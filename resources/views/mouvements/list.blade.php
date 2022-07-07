@extends('layout.layout')
 
@section('content')
 
	<h1 class="text-center fw-bold my-5">Historique des Mouvements</h1>
   <div class="row  g-3">
      <div class="py-3 col-7">
        <P class="fs-3 fw-bold">Choisissez une periode</p>
        <form action="mouvementsgetByPeriod" method="Post">
          @csrf
          <div class="row">
            <div class="col-4">
              <input type="date" class="form-control fs-3" placeholder="Debut" name="datedebut">
            </div>
            <div class="col-4">
              <input type="date" class="form-control fs-3" placeholder="fin" name="datefin">
            </div>
            <div class="col-4">
              <button type="submit" class="btn fs-3 " style="background-color:#4ecdc4">Valider</button>
            </div>
          </div>
        </form>
      </div>
    </div>
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
          @if ((is_null($mouvements)))
                 <th scope="row">Aucun resultat,Veillez revoir vos dates!</th>
          @else
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
          @endif
    </tbody>
  </table>
 
@endsection