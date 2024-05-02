
<?php

require '../includes/connect.php';
$pdo = connect() ;
$sql = 'SELECT * FROM user WHERE role= "infirmier"';
$statement = $pdo->query($sql);
// get all publishers
$infirmiers = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infirmier</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">
</head>
<body>
    <header>
        
        <h1>Bienvenue flen fouleny</h1>
        <nav>
            <ul>
                <li><a href="medecin.php">Médecin</a></li>
                <li><a href="infirmier.php">Infirmier</a></li>
                <li><a href="Pharmacie.php">Pharmacie</a></li>
                <li><a href="Labo.php">Laboratoire Médicale</a></li>
                <li><a href="rendezvous.html">Rendez-vous</a></li>
                <li><a href="profil.html">Profil</a></li>
               <!-- <li><a href="connexion.php" class="btn">Se connecter</a></li>
                <li><a href="inscription.php" class="btn">S'inscrire</a></li>-->
            </ul>
        </nav>
    </header>
    <main>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Numéro téléphone</th>
      <th scope="col">email</th>
      <th scope="col">Demande Service</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    if ($infirmiers) {
        foreach ($infirmiers as $inf) {
    echo "<tr>
      <th scope='row'>1</th>
      <td>image</td>
      <td>{$inf['nom']}</td>
      <td>{$inf['prenom']}</td>
      <td>{$inf['address']}</td>
      <td>{$inf['num_tel']}</td>
      <td>{$inf['email']}/td>
      <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' data-bs-whatever='@fat'>Open modal for @fat</button>
      
    </tr>";
}
}
    ?>
    
  </tbody>
</table>
    </main>
    <footer>
        <!-- Pied de page -->
    </footer>
</body>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<script>
  var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
});
</script>
</html>
