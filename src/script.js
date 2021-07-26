function ajouterLigne() 
{
    var tbody = document.getElementById("tbody");

    var ligne = tbody.insertRow(-1);//on a ajoute une ligne

    var colonne1 = ligne.insertCell(0);//on a une ajoute une cellule
    colonne1.innerHTML += document.getElementById("question").value ='<td class=\'quest\'><p class="q">Question 1 :</p><input type="text" name="question_name" required></td>';//on y met le contenu d'Ingrédient

    var colonne2 = ligne.insertCell(1);
    colonne2.innerHTML += document.getElementById("rep1").value ='<td><select name="Unités" class="Unités" ><option value="">--Choisir l\'unité de mesure--</option><option value="g">g</option><option value="kg">kg</option><option value="ml">ml</option><option value="cl">cl</option><option value="dl">dl</option><option value="litre">litre</option></select></td>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    var colonne3 = ligne.insertCell(2);
    colonne3.innerHTML += document.getElementById("rep2").value ='<td><input type="text" class="Quantité"></textarea></td>';

    var colonne4 = ligne.insertCell(3);
    colonne4.innerHTML += document.getElementById("br+p").value ='<td ><img class="img3" src="images/Poubelle.jpg" onclick="deleteRow(this)" alt="supprimer ligne"></td>';
}