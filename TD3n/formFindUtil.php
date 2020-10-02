
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Formulaire trajet </title>
    </head>
   
    <body>
        <form method="get" action="testFindUtil.php">
          <fieldset>
            <legend>Mon formulaire passager/trajet :</legend>
            <p>
              <label for="trajet_id">Trajet</label> :
              <input type="text" placeholder="Ex : 1" name="Trajet" id="trajet_id" required/>
            </p>
            <p>
              <input type="submit" value="Envoyer" />
            </p>
          </fieldset>
        </form>


    </body>
</html>
