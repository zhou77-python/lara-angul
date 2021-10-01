@extends('layout')

@section('contenu')

  
<div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8">  
    
    
    <div class="form-inline my-2 my-lg-0">
      <a class="btn btn-primary" href="/"> < Precedent </a>

    </div>
   
 <form action="/cree_compte" method="POST">

       {{ csrf_field() }}

    
        
                            <div class="j">
                                 <span><i class="fa fa-user"></i></span>
                            </div>                          
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" class="form-control" id="nom" required>
                            
                    
                            <div class="j">
                                 <i class="fa fa-user"></i>
                            </div>
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" class="form-control" id="prenom" required>
                       
                                <div class="j">
                                  <i class="fa fa-envelope"></i>
                                </div>
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{ old('email')}}" required >
                               
                    
                                <div class="j">
                                   <i class="fa fa-lock"></i>
                                </div>
                                <label for="password">Mots de passe</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                                
                    
                                <div class="j">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <label for="password">Mots de passe(confirmation)</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
              
        <div class="pied_formulaire" align="center">
           <br> <button class="btn btn-primary" type="submit"><span class="fa fa-send" style="color:#747dcdf;"></span> Envoyer</button>
        </div>
  </form>
</div>
</div>
</div>
 
@endsection