@extends('layout')

@section('contenu')



  <div class="form-inline my-2 my-lg-0">
    <a class="btn btn-primary" href="/formulaire_achat">< Precedent</a>

  </div>


  <h2>MES DEPENSES</h2>
    <ul>

        @foreach ($dep as $dep)

            <li>
                 {{ "depense" }}:{{ $dep->depense }}
                 {{ "article" }}:{{ $dep->article }}
                 {{ "quantite" }}:{{ $dep->quantite }}
                 {{ "prix unitaire" }}:{{ $dep->prix }}
                 {{ "prix total" }}:{{ $dep->prix_total }}
                 {{ "Date" }}:{{ $dep->created_at }}
                 
            </li>
            
        @endforeach

    </ul>  
    


@endsection