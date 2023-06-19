
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support de cours</title>
</head>
@vite(['resources/css/app.css', 'resources/js/app.js'])

<body>
    @include('layouts.header')
    <div class="lienFormation">
        <h2>DépartementGMP -Genie Mecanique et Productique</h2>



    </div>

    <ul class="listLien">
        <li>ACCUEIL </li>
        <li> > </li>
        <li>ESPACE ENSEIGNANT</li>
        <li> > </li>
        <li>NOTES</li>
    </ul>


    <section id="section">

     @include('layouts.sidebarProf')



    
     <div class="depot mx-auto my-7">
      <h2>Dépôt du support de cours</h2>
    <br>

  <form action="traitement.php" method="POST" enctype="multipart/form-data">
  <div>
    <label for="pdf">Classe :</label>
  <ul class="flex flex-row justify-center">
        <li>
          <input type="radio" name="classe" id="classe1" value="classe1" required>
          <label for="classe1">LP MIE</label>
        </li>
        <li>
          <input type="radio" name="classe" id="classe2" value="classe2">
          <label for="classe2">LP MIEF</label>
        </li>
        <li>
          <input type="radio" name="classe" id="classe3" value="classe3">
          <label for="classe3">LP MRI</label>
        </li>
        <li>
          <input type="radio" name="classe" id="classe4" value="classe4">
          <label for="classe4">BUT GMP</label>
        </li>
      </ul>
  </div>

    <br><br>

    <label for="pdf">Fichier PDF :</label>
    <input type="file" id="pdf" name="pdf" accept="application/pdf">

    <br><br>
    
    <textarea name="commentaire" id="commentaire" placeholder="Commentaire*" rows="4" cols="30" required></textarea>
    <br><br>
    <input type="submit" value="Déposer">
  </form>
</div>
       

    </section>



</body>
@include('layouts.footer')


</html>
<style>
/*FORM*/ 
ul.flex {
    margin: 0;
    padding: 0;
  }

  ul.flex li {
    margin: 1px; 
  }
    .depot {
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
    width: 450px;
    text-align: left;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.5);
  }

  .depot h2 {
    color: #333333;
    font-size: 24px;
    margin-bottom: 20px;
  }

  .depot label {
    display: inline-block;
    width: 100px;
    text-align: left;
    margin-bottom: 10px;
  }

  .depot input[type="text"],
  .depot input[type="number"],
  .depot textarea {
    width: 400px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 10px;
  }

  .depot input[type="submit"] {
    background-color: #606C38;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .depot input[type="submit"]:hover {
    background-color: #BC6C25;
  }
/*FIN FORM*/ 

#section {
        min-height: 30vw;
        height: 100%;
        DISPLAY: flex;


    }

    ul.listLien {
        display: flex;
        padding: 18px;
        color: white;
        font-size: 13px;
        border-bottom: 1px solid;
        background: #606c38;
    }

    ul.listLien li {
        padding-left: 11px;
        position: relative;
        left: 7pc;
    }

    .lienFormation {
        background-color: #283618;
        padding: 19px;


    }

    .lienFormation h2 {
        color: white;
        position: relative;
        left: 7pc;
    }

    .listMenu {

        width: 18%;
        text-align: left;
        /* height: 100%; */
        background: #606c38;
        color: white;


    }

    .listMenu li {
        border-bottom: 1px solid white;
        padding: 15px;
        text-align: center;

    }


    div.menu {}
</style>