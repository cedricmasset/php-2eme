/**
 * Permet d'insérer quelques courriel dans la table liste_email. Utilisez la
 * fonctionnalité "importer", puis "sélectionner un fichier".
 *
 * auteur : Christophe Lambercy <cly@cpnv.ch>
 * date   : 2015-03-10
 */

USE ch04;

INSERT INTO liste_email (email, date_inscription) values ('cly@cpnv.ch', NOW());
INSERT INTO liste_email (email, date_inscription) values ('info@cpnv.ch', NOW());
INSERT INTO liste_email (email, date_inscription) values ('bill.gates@microsoft.com', NOW());
INSERT INTO liste_email (email, date_inscription) values ('steve.jobs@auciel.com', NOW());
INSERT INTO liste_email (email, date_inscription) values ('big.brother@google.com', NOW());




