@extends('layout')

@section('contenu')
      

              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-6 offset-md-3">

                    <div class="form-inline my-2 my-lg-0">
                      <a class="btn btn-primary" href="/deconnexion">Deconnexion</a>
                                
                    </div>
                    <div class="form-inline my-2 my-lg-2">
                      <a class="btn btn-primary" href="/acceuil">< Precedent</a>
                                
                    </div><br>

                      <form action="/formulaire_achat" method="post">

                              {{ csrf_field() }}

                        <label for="depense">Choisir le type de depense:</label>
                                  <br>
                          <select  name="depense" value="depense">
                              <option value="depenses_fixe">Depenses fixes</option>
                              <option value="depenses_variable">Depenses variables</option>
                              <option value="depenses_spontane">Depenses spontanées</option>  
                          </select> <br>

                          <label for="article">Article:</label><br>
                           <input type="text" name="article"><br>
                          <label for="quantite">Quantité:</label><br>
                           <input type="number" name="quantite" id="quantite" min="1"><br>
                          <label for="prix">Prix:</label><br>
                           <input type="number" name="prix" id="prix" min="1">   

                                 <br><br>

                          <input type="submit" class="btn btn-primary" value="Valider" />
                        
                      </form>

                   </div>
                </div>
              </div>

            
      






@endsection