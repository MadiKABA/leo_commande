@extends('layout.layout')
 
@section('content')
 
<div class="container">
       
    @foreach($produit as $proddata)
        <?php $prod = json_decode($proddata);?>
    @endforeach  
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <h1 class="text-center my-5 fw-bold">Details du produit: {{$prod->nom_long}}</h1>
    </div>
    <div class="row">
        <div class="col-6 px-5 py-2 shadow p-3 mb-5 rounded"">
            <p class="fs-3">
                Nom Long: {{$prod->nom_long}}
            </p>
            <p class="fs-3 fw-bold">Nom court: {{$prod->nom_court}}</p>
            <p class="fs-3">PR_SOUS_FAMILLE: {{$prod->PR_SOUS_FAMILLE}}</p>
            <p class="fs-3 fw-bold">Prix De Base: {{$prod->prix_base}}</p>
            <p class="fs-3">Code TVA : {{$prod->code_tva}}</p>
            <p class="fs-3">Prevoir Etiquette: {{$prod->PrevoirEtiquette}}</p>
            <p class="fs-3">Code Compta: {{$prod->code_compta}}</p>
            <p class="fs-3">Dessin: {{$prod->dessin}}</p>
            <p class="fs-3">Fond: {{$prod->fond}}</p>
            <p class="fs-3">Touche: {{$prod->touche}}</p>
            <p class="fs-3">Code Barre: {{$prod->Code_barre}}</p>
            <p class="fs-3 fw-bold">FACLEUNIK: {{$prod->FACLEUNIK}}</p>
            <p class="fs-3">Imp_prod: {{$prod->imp_prod}}</p>
            <p class="fs-3">msg_prod: {{$prod->msg_prod}}</p>
            <p class="fs-3">Code_Fourn: {{$prod->code_fourn}}</p>
            <p class="fs-3">Ref Fourn: {{$prod->ref_fourn}}</p>
            <p class="fs-3">condit: {{$prod->condit}}</p>
            <p class="fs-3">Code_unigest: {{$prod->Code_unigest}}</p>
            <p class="fs-3 fw-bold">Type_produit: {{$prod->Type_produit}}</p>
            <p class="fs-3">PR_NEGATIF: {{$prod->PR_NEGATIF}}</p>
            <p class="fs-3">PMP: {{$prod->pmp}}</p>
            <p class="fs-3">PRSUP1: {{$prod->PRSUP1}}</p>
            <p class="fs-3">PRSUP2: {{$prod->PRSUP2}}</p>
            <p class="fs-3">PR_NOM_TOUCHE: {{$prod->PR_NOM_TOUCHE}}</p>
            <p class="fs-3">PR_NOM_PORTABLE: {{$prod->PR_NOM_PORTABLE}}</p>
            <p class="fs-3">PR_NOM_PROD: {{$prod->PR_NOM_PROD}}</p>
            <p class="fs-3">PR_CODE_PESE: {{$prod->PR_CODE_PESE}}</p>
            <p class="fs-3">PR_CATEGORIE: {{$prod->PR_CATEGORIE}}</p>
            <p class="fs-3">PR_COLLECTION: {{$prod->PR_COLLECTION}}</p>
            <p class="fs-3">PR_MARQUE: {{$prod->PR_MARQUE}}</p>
            <p class="fs-3 fw-bold">PR_DATE_CRE: {{date('d/m/Y',strtotime($prod->PR_DATE_CRE))}}</p>
            <p class="fs-3 fw-bold">PR_DATE_MOD: {{$prod->PR_DATE_MOD}}</p>
            <p class="fs-3">PR_REF_INT: {{$prod->PR_REF_INT}}</p>
            <p class="fs-3">PR_LOT: {{$prod->PR_LOT}}</p>
            <p class="fs-3">PR_DELAI_PER: {{$prod->PR_DELAI_PER}}</p>
            <p class="fs-3">PR_UNITEMPS: {{$prod->PR_UNITEMPS}}</p>
            <p class="fs-3">PR_PRIX_HT: {{$prod->PR_PRIX_HT}}</p>
            <p class="fs-3">PR_CONTENANCE: {{$prod->PR_CONTENANCE}}</p>
             <p class="fs-3">PR_UG_ACHAT: {{$prod->PR_UG_ACHAT}}</p>
            
        </div>
        <div class="col-6 px-4 py-2 shadow p-3 mb-5 rounded"">
            <p class="fs-3 fw-bold">Prix Achat: {{$prod->prix_achat}}</p>
            <p class="fs-3">PR_COND_ACHAT: {{$prod->PR_COND_ACHAT}}</p>
            <p class="fs-3 fw-bold">PR_TVA_ACHAT: {{$prod->PR_TVA_ACHAT}}</p>
            <p class="fs-3 fw-bold">PR_DATE_DVENTE: {{$prod->PR_DATE_DVENTE}}</p>
            <p class="fs-3">PR_BLOCAGE: {{$prod->PR_BLOCAGE}}</p>
            <p class="fs-3">PR_GESTOCK: {{$prod->PR_GESTOCK}}</p>
            <p class="fs-3">PR_DESTOCK: {{$prod->PR_DESTOCK}}</p>
            <p class="fs-3">PR_PHOTO: {{$prod->PR_PHOTO}}</p>
            <p class="fs-3">PR_GARANTIE: {{$prod->PR_GARANTIE}}</p>
            <p class="fs-3">PR_NOSERIE: {{$prod->PR_NOSERIE}}</p>
            <p class="fs-3">PR_COMMENTAIRE: {{$prod->PR_COMMENTAIRE}}</p>
            <p class="fs-3">PR_ECOTAXE: {{$prod->PR_ECOTAXE}}</p>
            <p class="fs-3">PR_IMPPROD: {{$prod->PR_IMPPROD}}</p>
            <p class="fs-3">PR_COMMISSION: {{$prod->PR_COMMISSION}}</p>
            <p class="fs-3">PR_CALORIES: {{$prod->PR_CALORIES}}</p>
            <p class="fs-3">PR_TAUX_COM: {{$prod->PR_TAUX_COM}}</p>
            <p class="fs-3">PR_DELAI_PREPA: {{$prod->PR_DELAI_PREPA}}</p>
            <p class="fs-3">PR_CPTA_ACHAT: {{$prod->PR_CPTA_ACHAT}}</p>
            <p class="fs-3">CouleurFond: {{$prod->CouleurFond}}</p>
            <p class="fs-3">CouleurTexte: {{$prod->CouleurTexte}}</p>
            <p class="fs-3">PR_TARE: {{$prod->PR_TARE}}</p>
            <p class="fs-3">PR_PESE: {{$prod->PR_PESE}}</p>
            <p class="fs-3">PR_POIDS: {{$prod->PR_POIDS}}</p>
            <p class="fs-3">PR_UG_CONT: {{$prod->PR_UG_CONT}}</p>
            <p class="fs-3">PR_PRODSUB: {{$prod->PR_PRODSUB}}</p>
            <p class="fs-3">PR_RAYON: {{$prod->PR_RAYON}}</p>
            <p class="fs-3">PR_ETIQUETTE: {{$prod->PR_ETIQUETTE}}</p>
            <p class="fs-3">PR_PRIX_LIBRE: {{$prod->PR_PRIX_LIBRE}}</p>
            <p class="fs-3">PR_COEF_UG: {{$prod->PR_COEF_UG}}</p>
            <p class="fs-3">PR_NATURE_PRODUIT: {{$prod->PR_NATURE_PRODUIT}}</p>
            <p class="fs-3">PR_REMISE_INTERDITE: {{$prod->PR_REMISE_INTERDITE}}</p>
            <p class="fs-3">PR_TR_AUTORISE: {{$prod->PR_TR_AUTORISE}}</p>
            <p class="fs-3">PR_CONTROLE_AGE: {{$prod->PR_CONTROLE_AGE}}</p>
            <p class="fs-3">PR_GESLOT: {{$prod->PR_GESLOT}}</p>
            <p class="fs-3">PR_ORIGINE: {{$prod->PR_ORIGINE}}</p>
            <p class="fs-3">PR_TRAITEMENT: {{$prod->PR_TRAITEMENT}}</p>
            <p class="fs-3">PR_CALIBRE: {{$prod->PR_CALIBRE}}</p>
            <p class="fs-3">IDGenImpression: {{$prod->IDGenImpression}}</p>
        </div>
    </div>    
</div>
 
@endsection 