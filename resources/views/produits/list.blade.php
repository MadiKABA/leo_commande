@extends('layout.layout')
 
@section('content')
  <div class="container mx-3 py-3">
    <h1 class="text-center  py-4 fw-bold">Liste des Produits</h1>
    <nav aria-label="Page navigation example"class="container">
      <ul class="pagination justify-content-center">
         @for ($i = 1; $i <=35; $i++)
          <li class="page-item"><a class="page-link fw-bold fs-5" style="color:#4ecdc4" href="{{route('produit.pagedList',['id'=>$i])}}">{{$i}}</a></li>
        @endfor
      </ul>
    </nav>
    <div class="row  g-3">
      <div class="py-3 col-5">
        <form action="{{route('produits.getByFamilly')}}" method="Post">
          @csrf
          <div class="row">
            <div class="col-6">
            <select name="famille" data-live-search="true" class="form-select fs-3">
              @foreach($familles as $familledata)
                  <?php $famille = json_decode($familledata); ?>
                  <option value="{{$famille->FACLEUNIK}}">{{$famille->NOM}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-6">
            <button type="submit" class="btn fs-3 " style="background-color:#4ecdc4">Rechercher</button>
          </div>
          </div>
        </form>
      </div>
      <div class="py-3 col-5">
        <form action="{{route('produits.getByName')}}" method="Post">
          @csrf
          <div class="row">
            <div class="col-6">
              <input type="text fw-bold" name="nom_court" class="form-control" placeholder="Nom Produit" />
            </select>
          </div>
          <div class="col-6">
            <button type="submit" class="btn fs-3 " style="background-color:#4ecdc4">Rechercher</button>
          </div>
          </div>
        </form>
      </div>
    </div>

    <table class="table table table-striped">
      <thead>
        <tr>
          <th scope="col">N#</th>
          <th scope="col">nom_long</th>
          <th scope="col">nom_court</th>
          <th scope="col">PR_DATE_CRE</th>
          <th scope="col">prix_base</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
            @if ((is_null($produits)))
                 <th scope="row">Aucun produits ne contient le nom {{$nom_court}}</th>
            @else
              @foreach($produits as $proddata)
                  <?php $produit = json_decode($proddata); 
                    
                  ?>
                  <tr>
                      <th scope="row">{{$produit->PRCLEUNIK}}</th>
                      <th scope="row">{{$produit->nom_long}}</th>
                      <th scope="row">{{$produit->nom_court}}</th>
                      <th scope="row">{{date('d/m/Y',strtotime($produit->PR_DATE_CRE))}}</th>
                      <th scope="row">{{$produit->prix_base}}</th>
                      <th scope="row"><a style="color:#4ecdc4" href="{{route('produits.show',['id'=>$produit->PRCLEUNIK])}}"><i class="bi bi-eye"style="color:#4ecdc4"></i>Plus</a></th> 
                  </tr>
              @endforeach
            @endif
      </tbody>
    </table>
  </div>
 
@endsection