<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>


<div class="container ">
    <div class="row">
        <div class="col s12">
            <body>

                <h1>MON PREMIER CRUD SUR LARAVEL</h1>
                <hr>
                @if (@session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                    
                @endif
                <h2>Ajouter un étudiant </h2>  
                <form class="form-group" action="/ajout/traitement" method="POST">
                    <div class="form-group">
                      <label for="nom">nom</label>
                      <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        @csrf 
                        <input type="text" class="form-control" id="prenom" name="prenom">
                      </div>
                      <div class="form-group">
                        <label for="classe">classe</label>
                        <input type="text" class="form-control" id="classe" name="classe">
                      </div>
                    
                        <br>
                    <button type="submit" class="btn btn-primary ">Ajouter un étudiant</button>
                    <br>
                    <br>
                    <a href="/etudiant" class="btn btn-danger">Retour retour a la liste des Eléves </a>
                  </form >
               </table>
            
        </div>
       
    </div>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>