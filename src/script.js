function ajouterLigne() 
{
    var tbody = document.getElementById("tbody");

    var ligne = tbody.insertRow(-1);//on a ajoute une ligne

    var colonne1 = ligne.insertCell(0);//on a une ajoute une cellule
    colonne1.innerHTML += document.getElementById("ingredient").value ='<td><input type="text" placeholder="votre ingrédient" class="ingredient"></td>';//on y met le contenu d'Ingrédient

    var colonne2 = ligne.insertCell(1);
    colonne2.innerHTML += document.getElementById("Unites_de_mesure").value ='<td><select name="Unités" class="Unités" ><option value="">--Choisir l\'unité de mesure--</option><option value="g">g</option><option value="kg">kg</option><option value="ml">ml</option><option value="cl">cl</option><option value="dl">dl</option><option value="litre">litre</option></select></td>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    var colonne3 = ligne.insertCell(2);
    colonne3.innerHTML += document.getElementById("Quantite").value ='<td><input type="text" class="Quantité"></textarea></td>';

    var colonne4 = ligne.insertCell(3);
    colonne4.innerHTML += document.getElementById("supprimerLigne").value ='<td ><img class="img3" src="images/Poubelle.jpg" onclick="deleteRow(this)" alt="supprimer ligne"></td>';
}