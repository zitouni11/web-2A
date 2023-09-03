function verif() {
    var nom = document.forms["Formu"]["nom"].value;
    var dateDebut = document.forms["Formu"]["date_debut"].value;
    var dateFin = document.forms["Formu"]["date_fin"].value;
    var description = document.forms["Formu"]["description"].value;
    var idCategorie = document.forms["Formu"]["id_categorie"].value;
    var idUser = document.forms["Formu"]["id_user"].value;
    var errorNom = document.getElementById('errorNom');
    var errorDateDebut = document.getElementById('errorDateDebut');
    var errorDateFin = document.getElementById('errorDateFin');
    var errorDescription = document.getElementById('errorDescription');
    var errorIdCategorie = document.getElementById('errorIdCategorie');
    var errorIdUser = document.getElementById('errorIdUser');
    var er1 = 1;
    var er2 = 1;
    var er3 = 1;
    var er4 = 1;
    var er5 = 1;
    var er6 = 1;

    if (nom == "") {
        errorNom.innerHTML = "Veuillez entrer un nom!";
    } else {
        errorNom.innerHTML = "";
        er1 = 0;
    }

    if (dateDebut == "") {
        errorDateDebut.innerHTML = "Veuillez entrer une date de début!";
    } else {
        errorDateDebut.innerHTML = "";
        er2 = 0;
    }

    if (dateFin == "") {
        errorDateFin.innerHTML = "Veuillez entrer une date de fin!";
    } else {
        errorDateFin.innerHTML = "";
        er3 = 0;
    }

    if (description == "") {
        errorDescription.innerHTML = "Veuillez entrer une description!";
    } else {
        errorDescription.innerHTML = "";
        er4 = 0;
    }

    if (idCategorie == "") {
        errorIdCategorie.innerHTML = "Veuillez sélectionner une catégorie!";
    } else {
        errorIdCategorie.innerHTML = "";
        er5 = 0;
    }

    if (idUser == "") {
        errorIdUser.innerHTML = "Veuillez sélectionner un utilisateur!";
    } else {
        errorIdUser.innerHTML = "";
        er6 = 0;
    }

    if (er1 == 1 || er2 == 1 || er3 == 1 || er4 == 1 || er5 == 1 || er6 == 1) {
        return 1;
    } else {
        return 0;
    }
}

function validateForm(e) {
    if (verif() == 1) {
        e.preventDefault();
    }
}


