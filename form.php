<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="./thanks.php"  method="post">
    
    <div>
      <label  for="name">Nom :</label>
      <input  type="text"  id="name"  name="name">
    </div>
    <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>    
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="email">
    </div>
    <div>
        <label for="telephone">Telephone :</label>
        <input type="text" id="telephone" name="telephone">
    </div> 
        <label for="objet">Objet:</label>
        <select name="objet" id="objet">
            <option value="" disabled>choisir</option>
            <option value="document">Envoyer un document</option>
            <option value="formation">Trouver une formation</option>
            <option value="entretien">Obtenir un entretien</option> 
        </select>     
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>  
</body>
</html>