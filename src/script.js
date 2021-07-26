function ajouterLigne() 
{
    let tbody = document.getElementById("tbody");

    let ligne = tbody.insertRow(-1);//on a ajoute une ligne

    let ligne1 = ligne.insertRow(0);//on a une ajoute une cellule
    ligne1.innerHTML += document.getElementById("question").value ='<td class=\'quest\'><p class="q">Question 1 :</p><input type="text" name="question_name" required></td>';//on y met le contenu d'Ingrédient

    let ligne2 = ligne.insertRow(1);  
    ligne2.innerHTML += document.getElementById("rep1").value ='<td><select name="Unités" class="Unités" ><option value="">--Choisir l\'unité de mesure--</option><option value="g">g</option><option value="kg">kg</option><option value="ml">ml</option><option value="cl">cl</option><option value="dl">dl</option><option value="litre">litre</option></select></td>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    let ligne3 = ligne.insertRow(2);
    ligne3.innerHTML += document.getElementById("rep2").value ='<td><input type="text" class="Quantité"></textarea></td>';

    let ligne4 = ligne.insertRow(3);
    ligne4.innerHTML += document.getElementById("br+p").value ='<td ><img class="img3" src="images/Poubelle.jpg" onclick="deleteRow(this)" alt="supprimer ligne"></td>';
}