<?
include_once "../lib/db.funcs.php";
//$auth->requiresAuth();
include_once $GLOBALS['config']['paths']['libs'].'views.funcs.php';
?>
<form action="?u=accueil" enctype="multipart/form-data" method="POST">
<input type="hidden" name="action" value="addMat">
<div class="container container-fluid">
  <div class="addcourse-input input-group input-group-lg col-md-4">
      <?php if (adminOnly()): ?>
      <span class="input-group-addon" id="sizing-addon1">Promo</span>
        <select name="promo" class="form-control">
        <?
        $promos = getPromos();
        foreach ($promos as $promo) {
          echo "<option value='".$promo['id_promo']."'";
          if($promo['id_promo']==$_SESSION['promo']) {
            echo " selected";
          }
          echo ">".$promo['nom']."</option>";
        }
        ?>
      </select>
      <?php else: ?>
        <p class="text-primary">La matière sera insérée dans la promo <?= getPromoName($_SESSION['promo'])?>.</p>
        <input type="hidden" name="promo" value="<?= $_SESSION['promo'] ?>">
      <?php endif ?>
 </div><br/>
  <div class="addcourse-input input-group input-group-lg col-md-4">
    <span class="input-group-addon" id="sizing-addon1">Nom</span>
    <input name="nom" type="text" class="form-control" placeholder="Micro-informatique" aria-describedby="sizing-addon1" required>
  </div><br/>
 <div class="addcourse-input input-group input-group-lg col-md-4">
    <span class="input-group-addon" id="sizing-addon1">Dimunituf</span>
    <input name="Dimunituf" type="text" class="form-control" placeholder="MIN" aria-describedby="sizing-addon1" required>
  </div><br/>
    <p class="text-danger">Attention, une fois la matière créée, elle ne pourra plus être supprimée.</p>
  <input type="submit" class="btn btn-success btn-lg" value="Ajouter">
</div>
</form>