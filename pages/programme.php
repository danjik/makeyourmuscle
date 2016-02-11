<!DOCTYPE html>
<html lang="en">


        <?php 
            include ("header.php"); 
            $db = new Mypdo();
            $ficheExerciceController = new FicheExerciceController($db);
            $list = $ficheExerciceController->getAllFicheExercice();
        ?>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
        <div class="row">
            <h1 class="page-header">Séance</h1>
            <div class="row">
       			<div class="col-lg-8">
          		  	<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i> Créer une séance
						</div>
						<div class="panel-body">
                            <form id="formExercice" name="formExercice">
    							<div class="form-group">
                                    <label>Choisir un exercice</label>
                                    <select class="form-control" id="exercice">
                                        <?php
                                            foreach ($list as $value) {
                                                echo "<option idPartieCorps='".$value->getIdPartieCorps()."' id='".$value->getIdFicheExercice()."'>".$value->getTitre()."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <p class="help-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero quidem saepe molestiae repudiandae, debitis omnis sint laudantium mollitia exercitationem nihil obcaecati esse neque assumenda numquam odit, suscipit dolorum! Consequatur, accusamus.
                                    </p>
                                </div>
                                <div class="form-group" >
                                	
                                	<label for="serie">Nombre de série</label>
                                    <input id="serie" name="serie" type="number" class="form-control" placeholder="Nombre de série" required="required">
                                </div>
                                <div class="form-group" >
                                	
                                	<label for="repetition">Nombre de répétition</label>
                                    <input id="repetition" name="repetition" type="number" class="form-control" placeholder="Nombre de répétition" required="required">
                                </div>
                                <div class="form-group" >
                                	<button type="button" id="addExercice" class="btn btn-primary btn-lg btn-block">Ajouter l'exercice</button>
                                </div>
                            </form>
						</div>

                    </div>
                </div>
       			<div class="col-lg-4">
          		  	<div class="panel panel-default">
          		  		<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i> Résumé de la séance
						</div>
						<div class="panel-body slide-fade">
							<ul id="sortable">
							</ul>
							<div class="form-group" >
	                        	<button type="button" id="validerSeance" class="btn btn-primary btn-lg btn-block">Valider la séance</button>
	                        </div>
						</div>
					</div>
       			</div>
            </div>
        </div>
    <!-- /#wrapper -->
	</div>
    <?php include("incScript.php"); ?>
</body>

</html>
