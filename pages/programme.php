<!DOCTYPE html>
<html lang="en">


        <?php include ("header.php"); ?>

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
							<div class="form-group">
                                <label>Choisir un exercice</label>
                                <select class="form-control">
	                                <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
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
                                <input id="serie" name="serie" type="number" class="form-control" placeholder="Nombre de série">
                            </div>
                            <div class="form-group" >
                            	
                            	<label for="repetition">Nombre de répétition</label>
                                <input id="repetition" name="repetition" type="number" class="form-control" placeholder="Nombre de répétition">
                            </div>
                            <div class="form-group" >
                            	<button type="button" class="btn btn-primary btn-lg btn-block">Ajouter l'exercice</button>
                            </div>
						</div>

                    </div>
                </div>
       			<div class="col-lg-4">
          		  	<div class="panel panel-default">
          		  		<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i> Résumé de la séance
						</div>
						<div class="panel-body">
							<ul id="sortable">
							  <li repetition="1" class="list-group-item ui-state-default list-group-item-success"></span>Item 1</li>
							  <li class="list-group-item ui-state-default list-group-item-info"></span>Item 2</li>
							  <li class="list-group-item ui-state-default list-group-item-warning"></span>Item 3</li>
							  <li class="list-group-item ui-state-default list-group-item-danger"></span>Item 4</li>
							  <li class="list-group-item ui-state-default"></span>Item 5</li>
							  <li class="list-group-item ui-state-default"></span>Item 6</li>
							  <li class="list-group-item ui-state-default"></span>Item 7</li>
							</ul>
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
