# Groupe 5






// bdd


CREER LA BDD AVEC LE NOM smartbike ET LE PORT 3306

CREATE TABLE velos (
  id_velo INT AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  prix DECIMAL(10,2) NOT NULL,
  date_ajout DATE ,
  PRIMARY KEY (id_velo)
) ENGINE=INNODB;

CREATE TABLE commandes (
  id_commande INT AUTO_INCREMENT,
  id_velo INT NOT NULL,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT,
  date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_commande),
  FOREIGN KEY (id_velo) REFERENCES velos(id_velo)
) ENGINE=INNODB;

CREATE TABLE contacts (
  id_contact INT AUTO_INCREMENT,
  nom VARCHAR(50) NOT NULL,
  prenom VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT NOT NULL,
  date_contact TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_contact)
) ENGINE=INNODB;












