### Requête SQL pour la version complète du tableau des voyages + pilotes, pour un pays donné et une année donnée

>SELECT rally_users.nom,rally_users.prenom,rally_users.moto,rally_users.email,rally_voyages.id_voyage,rally_concess.concess,rally_concess.pays,rally_voyages.cp_depart,rally_voyages.depart,rally_voyages.date,rally_voyages.km FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31" ORDER BY rally_voyages.id_voyage ASC;

### Requête SQL pour la somme du  kilométrage d'un pays

>SELECT SUM(rally_voyages.km) FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31" ORDER BY rally_voyages.id_voyage ASC;

### Requête SQL pour le nombre de participants d'un pays

>SELECT COUNT(DISTINCT rally_users.id) as NUM FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31" ORDER BY rally_voyages.id_voyage ASC;

### Requête SQL pour le nombre de motos d'un pays

>SELECT rally_users.moto, COUNT(DISTINCT rally_users.id) as NUM FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31" GROUP BY rally_users.moto ORDER BY rally_voyages.id_voyage ASC;

### Requête SQL pour le nombre d'étapes par moto + kilométrage

>SELECT rally_users.moto, COUNT(rally_voyages.id_voyage) AS num, SUM(rally_voyages.km) as km, ROUND(SUM(rally_voyages.km)/COUNT(rally_voyages.id_voyage)) as moyenne
FROM rally_users
JOIN rally_voyages
ON rally_users.id=rally_voyages.id_pilote
JOIN rally_concess
ON rally_concess.id=rally_voyages.id_concess
WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31"
GROUP BY moto
ORDER BY km DESC;

### Requête SQL pour le nombre d'étapes par concess + kilométrage

>select concess, COUNT(concess) as num, SUM(km) as km, ROUND(SUM(km)/COUNT(concess)) as moyenne from rally_concess join rally_voyages on rally_voyages.id_concess=rally_concess.id WHERE date >= '" . $datedebut . "' AND date <= '" . $datefin . "' AND rally_concess.pays = '" . $country . "' GROUP BY concess ORDER BY num DESC

### Requête SQL pour le nombre d'étapes par pilote + kilométrage

>SELECT rally_users.nom,rally_users.prenom,rally_users.cp,rally_users.ville,rally_users.moto,count(rally_voyages.id_voyage) AS etapes, SUM(rally_voyages.km) AS km FROM rally_users JOIN rally_voyages ON rally_users.id=rally_voyages.id_pilote JOIN rally_concess ON rally_concess.id=rally_voyages.id_concess WHERE rally_concess.pays="FR" AND rally_voyages.date >= "2022-01-01" AND rally_voyages.date <= "2022-12-31" GROUP BY rally_users.id ORDER BY km DESC;