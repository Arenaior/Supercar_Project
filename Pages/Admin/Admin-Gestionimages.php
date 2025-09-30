<?php
include("../../requetedb/bdconnect.php");
if (!isset($_SESSION)) { session_start(); }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestion des Images - Admin SuperCar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body, html { height: 100%; margin: 0; }
    .sidebar { background-color: #f8f9fa; height: 100%; overflow-y: auto; padding-top: 20px; position: fixed; width: 25%; }
    .content { margin-left: 25%; padding: 20px; height: 100vh; overflow-y: auto; }
    .styled-table { width: 100%; border-collapse: collapse; font-size: 14px; }
    .styled-table thead tr { background-color: #2c3e50; color: #fff; text-align: left; }
    .styled-table th, .styled-table td { padding: 10px 12px; border-bottom: 1px solid #ddd; }
    .styled-table tbody tr:nth-of-type(even) { background-color: #f9f9f9; }
    .styled-table tbody tr:hover { background-color: #e8f0fe; }
    .styled-table th { border-top-left-radius: 12px; border-top-right-radius: 12px; }
    .btn-modifier { background-color: #3498db; color: white; border: none; padding: 6px 12px; border-radius: 6px; text-decoration: none; }
    .btn-modifier:hover { background-color: #2980b9; }
    img.preview { max-width: 150px; max-height: 100px; object-fit: cover; border-radius: 6px; }
</style>
</head>
<body>

<!-- Sidebar admin -->
<div class="sidebar">
    <?php include("Admin-Navbar.php"); ?>
</div>

<!-- Contenu principal -->
<div class="content">
    <h2 class="mb-4">Gestion des Images</h2>

    <?php
    $stmt = $bdd->query("SELECT * FROM interface_images");
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Aperçu</th>
                <th>Nom</th>
                <th>Chemin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($images): ?>
                <?php foreach ($images as $image): ?>
                    <tr>
                        <td>
                            <?php
                            if (!empty($image['nom']) && !empty($image['chemin'])) {
                                $imageUrl = "/supercar_project/" . $image['chemin'] . $image['nom'];
                                $serverPath = $_SERVER['DOCUMENT_ROOT'] . "/supercar_project/" . $image['chemin'] . $image['nom'];

                                if (file_exists($serverPath)) {
                                    echo "<img src='" . htmlspecialchars($imageUrl) . "' alt='" . htmlspecialchars($image['nom']) . "' class='preview'>";
                                } else {
                                    echo "<span>Image introuvable<br><small>" . htmlspecialchars($imageUrl) . "</small></span>";
                                }
                            } else {
                                echo "Aucune image";
                            }
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($image['nom']); ?></td>
                        <td><?php echo htmlspecialchars($image['chemin']); ?></td>
                        <td>
                            <button class="btn-modifier" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#editModal" 
                                    data-id="<?php echo $image['id']; ?>" 
                                    data-nom="<?php echo htmlspecialchars($image['nom']); ?>">
                                Modifier
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="4">Aucune image trouvée.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Modal de modification -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="Admin-ModifierImage.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Modifier le nom de l'image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="id" id="modal-image-id">
            <div class="mb-3">
                <label for="modal-image-nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="modal-image-nom" name="nom" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
var editModal = document.getElementById('editModal')
editModal.addEventListener('show.bs.modal', function (event) {
  var button = event.relatedTarget
  var id = button.getAttribute('data-id')
  var nom = button.getAttribute('data-nom')

  var modalIdInput = editModal.querySelector('#modal-image-id')
  var modalNomInput = editModal.querySelector('#modal-image-nom')

  modalIdInput.value = id
  modalNomInput.value = nom
})
</script>

</body>
</html>
