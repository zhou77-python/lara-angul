@extends('layout')

@section('contenu')



<section style="padding-top:100px" style="padding-wight:100px">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 offset-md-3">
            
    

            <div class="form-inline my-2 my-lg-0">
              <a class="btn btn-primary" href="/deconnexion">Deconnexion</a>

            </div>
        
     
                <div class="somme">                   
                    
                    <h4>BIENVENU </h4>
                                <br>
                    <h4>VOTRE SOLDE EST DE : {{$somme}} Fcfa </h4>

                
                    <form name="somme" method="post" action="/acceuil">

                               {{ csrf_field() }} 
                               
                               

                            <label for="salaire">SALAIRE:</label>
                            <input type="number" autocomplete="off" name="salaire" id="salaire" step="50" size="10" min="500">
                            <button type="submit" class="btn btn-primary">valider</button>
                   
                               <br><br>
                    
                            <label for="prime">PRIME:</label>    
                            <input type="number" autocomplete="off" name="prime" id="prime" step="50" size="10" min="500">
                            <button type="submit" class="btn btn-primary">valider</button>
                    </form>
                </div>
             
        
            <br>

            <a href="/solde"><button class="btn btn-primary" type="submit"><span class="fa fa-calendar" style="color:#747dcdf;"></span> Historique solde</button></a>
            
            <a href="/formulaire_achat"><button class="btn btn-primary" type="submit"><span class="fa fa-shopping-cart" style="color:#747dcdf;"></span> Faire un Dépense</button></a>
                    <br><br>

            <a href="/depenses"><button class="btn btn-primary" type="submit"><span class="fa fa-shopping-cart" style="color:#747dcdf;"></span> Consulter mes Dépenses</button></a>
            
        </div>
    </div>
</div>
</section>

@endsection