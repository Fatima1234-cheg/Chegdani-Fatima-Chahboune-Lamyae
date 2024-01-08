function verif() {
    if (document.getElementById("NP").value == "") { alert("Veuillez taper votre Nom et Prénom!"); return false;}
    if (document.getElementById("Num").value == "") { alert("Veuillez taper votre Numéro de téléphone");
    return false; }
    var v = 1;
    var taille = document.getElementById("Num").value.length;
    for (i = 0; i < taille;i++) { if(document.getElementById("Num").value.charAt(i) < "0" ||
    document.getElementById("Num").value.charAt(i) > "9" || taille != 12) v = -1;}
    if (v == -1) {alert("Le numero de votre CIN est incorrect!"); return false; }
    if (document.getElementById("eml").value == "") { alert("Veuillez entrer votre adresse email!");
    return false;}
    if (document.getElementById("eml").value.indexOf('@') == -1) { alert("Adresse e-mailincorrecte!"); return false; }
if(document.getElementById("MP").value==""){ alert("Veuillez taper votre password")}
}