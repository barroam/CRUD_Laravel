<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>


<div class="container text-center">
    <div class="row">
        <div class="col s12">
            <body>

                <h1>MON PREMIER CRUD SUR LARAVEL</h1>
                <hr>
               <a href="/ajout" class="btn btn-primary">Ajouter un etudiant</a>
            
               <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                     <th>Prénom</th> 
                     <th>Classe</th>
                     <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ama</td>
                    <td>Barro</td>
                    <td>1er</td>
                    <td> 
                        <a href="#" class="btn btn-info">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>MHD</td>
                    <td>Ndour</td>
                    <td>1er</td>
                    <td>
                         <a href="#" class="btn btn-info">Update</a>
                         <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
               </table>
            
        </div>
       
    </div>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>