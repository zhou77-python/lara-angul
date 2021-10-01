@extends('layout')

@section('contenu')



 <div class="form-inline my-2 my-lg-0">
    <a class="btn btn-primary" href="acceuil">< Precedent</a>

  </div>


  <h2>HISTORIQUE SOLDE</h2>
    <ul>

        @foreach ($som as $som)

            <li>
                 {{ "Salaire" }}:{{ $som->salaire }}
                 {{ "Prime" }}:{{ $som->prime }}
                 {{ "Total" }}:{{ $som->revenuGobal }}
                 {{ "Date" }}:{{ $som->created_at }}
               
                 
            </li>
            
        @endforeach

    </ul>  

    

@endsection