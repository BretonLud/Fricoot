function ajouterLigne() 
{
    let tbody = document.getElementById("tbody");

    let ligne1 = tbody.insertRow(-1);
    ligne1.innerHTML = document.getElementById("question").value ='<td class=\'quest\'><p class="q">Question 1 :</p><input type="text" name="question_name[]" required></td>';

    let ligne2 = tbody.insertRow(-1);  
    ligne2.innerHTML = document.getElementById("rep1").value ='<td  class="r"><p>Reponse :<p></td><td class=\'r1\'><label for="reponse_1">1</label><input type="text" name="reponse_1[]" required ></td><td class=\'r2\'><label for="reponse_2">2</label><input type="text" name="reponse_2[]" required></td>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    let ligne3 = tbody.insertRow(-1);
    ligne3.innerHTML = document.getElementById("rep2").value ='<td class=\'r3\'><label for="reponse_3">3</label><input type="text" name="reponse_3[]" required></td><td class=\'r4\'><label for="reponse_4">4</label><input type="text" name="reponse_4[]" required></td>';

    let ligne4 = tbody.insertRow(-1);
    ligne4.innerHTML = document.getElementById("br+p").value ='<td class=\'answer\'><label for="reponse_bonne">Bonne réponse :</label><input type="number" name="reponse_bonne[]" class="correct" value="1" min="1" max="4" required></td><td class=\'points\'><label for="points">Nombre de points :</label><input type="number" name="points[]" required min="1" max="100" values="5"></td>';
}