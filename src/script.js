function ajouterValeur(){

    const val = document.querySelectorAll('.number');
    const value = val.length
    if (value > 1){
    val[value - 1].value = value
    }
   /*for( i = 0; i < value ; i++ ){

        let attribut = val[0].getAttribute('value')
        let attribut2 = Number(attribut) + Number(i)
        let set = val.value = attribut2
        console.log(val)
   } */   
}

function ajouterLigne() 
{
    let tbody = document.getElementById("tbody");

    let ligne1 = tbody.insertRow(-1);
    ligne1.innerHTML = document.getElementById("question").value ='<hr><td class=\'quest\'><p class="q">Question <label>n°</label> : <input type="text" value="" class="number" inherit readonly/></p><input type="text" name="question_name[]" class="qu" required></td>';

    let ligne2 = tbody.insertRow(-1);  
    ligne2.innerHTML = document.getElementById("rep1").value ='<td  class="r"><p>Reponse :<p></td><td class=\'r1\'><label for="r1">1</label><input type="text" name="reponse1[]" id="r1" required ></td><td class=\'r2\'><label for="r2">2</label><input type="text" name="reponse2[]" id="r2" required></td>';
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    let ligne3 = tbody.insertRow(-1);
    ligne3.innerHTML = document.getElementById("rep2").value ='<td class=\'r3\'><label for="r3">3</label><input type="text" name="reponse3[]" id="r3" required></td><td class=\'r4\'><label for="r4">4</label><input type="text" name="reponse4[]" id="r4" required></td>';

    let ligne4 = tbody.insertRow(-1);
    ligne4.innerHTML = document.getElementById("br+p").value ='<td class=\'answer\'><label for="reponse_bonne">Bonne réponse :</label><input type="number" name="reponse_bonne[]" class="correct" value="1" min="1" max="4" required></td><td class=\'points\'><label for="points">Nombre de points :</label><input type="number" name="points[]" required min="1" max="100" value="1"></td>';
}



const ajout = document.getElementById("ajoute");

ajout.addEventListener("click", function(){
    ajouterLigne();
    ajouterValeur();
})