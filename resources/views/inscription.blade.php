<!doctype html>
<html lang=" {{config('app.local')}} ">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" type="text/css" href="css/style.css">
        
  
  </head>
  <body style="background:url("https://www.google.com/url?sa=i&url=https%3A%2F%2Farchzine.fr%2Flifestyle%2Fart%2Fles-plus-beaux-paysages-du-monde%2F&psig=AOvVaw2JwzjJi1TgDC0cRXzZmV8G&ust=1613693672902000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCLi-jcST8u4CFQAAAAAdAAAAABAD")">
   
     
     <div class="contenue">  
         <div class="img">
            <img class="img" src="/image/img.svg">
         </div>  
           <div class="login-container">
            <form  action="/" method="POST">

                {{ csrf_field() }}

                <img class="avatar" src="/image/avatar.svg">
                <h2>BIENVENUE</h2>
                <div class="input-div one focus">
                    <div class="i">
                        <span><i class="fa fa-user"></i></span>
                    </div>
                    <div>
                        <h5>NOM D'UTILISATEUR</h5>
                        <input class="input" type="email" name="email" id="email" value="{{ old('email')}}" required>
                    </div>
                </div>  
                <div class="input-div two focus">
                    <div class="i">
                        <span><i class="fa fa-lock"></i></span>
                    </div>
                    <div>
                        <h5>MOTS DE PASSE</h5>
                        <input class="input" type="password" name="password" id="password" required>
                    </div>
                </div>  
                <a href="/cree_compte">CLIQUEZ POUR S'INSCRIRE</a>
                <input type="submit" class="btn" value="Se connecter">
            </form>
            
           </div>
     </div> 
    
    
</body>


</html>