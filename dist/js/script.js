$(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });

document.getElementById('addExercice').onclick = function() {
  var list = document.getElementById('sortable');
  var divList = document.getElementById('exercice');
  var newLI = document.createElement('li');
  newLI.className += "list-group-item ui-state-default";
  newLI.innerHTML = document.getElementById("exercice").value;
  idPartieCorps = divList[divList.selectedIndex].getAttribute("idpartiecorps");
  newLI.setAttribute("idPartieCorps",idPartieCorps);
  switch(idPartieCorps){
  	case "1" :  newLI.className += " list-group-item-success";  break;
  	case "2" :  newLI.className += " list-group-item-info";  break;
  	case "3" :  newLI.className += " list-group-item-warning";  break;
  	case "4" :  newLI.className += " list-group-item-danger";  break;
  }
  list.appendChild(newLI);
  setTimeout(function() {
    newLI.className = newLI.className + " show";
  }, 10);
  document.getElementById("formExercice").reset();

}

