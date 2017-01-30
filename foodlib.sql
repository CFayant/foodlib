SELECT DISTINCT dons.id, dons.titre, dons.image, dons.date_consommation, typeDates.libelle_date, donneurs.denomination_sociale, donneurs.adresse_donneur, donneurs.cp_donneur, 
donneurs.acces, donneurs.horaires, wusers.username, bornes.adresse_borne, bornes.cp_borne FROM dons, typeDates, donneurs, wusers, bornes
WHERE dons.type_id = typeDates.id AND dons.donneur_id = donneurs.id AND donneurs.wuser_id = wusers.id AND dons.borne_id = bornes.id
