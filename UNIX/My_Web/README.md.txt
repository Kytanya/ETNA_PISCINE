ETAPE 1 : INSTALLATION D UN SERVEUR WEB

1.1 Mise à jour système :

Passer en root (#)
$su
Password

apt-get update 
apt-get upgrade


1.2 Installation des paquets :

apt-get install apache2
apt-get install php5
apt-get install mysql-server 

Mettre un mot de passe a l’utilisateur root
Mysqlroot password

Vérifier l’installation de mysql	
mysql -p		      			
password
>Exit
apt-get install php5-mysql

Redémarrer service apache2
/etc/init.d/apache2 restart

Récupérer l’adresse IP 
ifconfig

Vérification de l’installation d’apache2
A l’aide d’un navigateur, se rendre a l’adresse recuperee
une page apache2 Debian Default Page apparaitra


ETAPE 2 : WORDPRESS

2.1 Installation de Wordpress :

Téléchargement de wordpress
wget https://wordpress.org/latest.tar.gz

Décompression de l’archive
tar xzvf latest.tar.gz

Déplacement de wordpress dans le répertoire web
mv wordpress/* /var/www/html


2.2 Création base de données de Wordpress :

$>mysql -u root -p 
mysql>create database Wordpress ;
mysql>create user admin ;
mysql>set password for admin= PASSWORD(rootroot);
mysql>GRANT ALL PRIVILEGES ON Wordpress.* TO admin@localhost IDENTIFIED by "rootroot"; 
mysql>exit


2.3 Configuration de Wordpress :

Récupérer l’adresse IP
ifconfig

Vérification de l’installation de wordpress
A l’aide d’un navigateur, se rendre a l’adresse récupérée une page d’installation de wordpress apparaitra

Suivre les instructions d’installation
Login admin
Password rootroot


2.4 Spécification du nom de fichier pour les logs :

Configuration du virtual host
ex :  /etc/apache2/sites-available/000-default.conf 

ErrorLog ${APACHE_LOG_DIR}/error-wordpress.log
CustomLog ${APACHE_LOG_DIR}/custom-wordpress.log common


ETAPE 3 : SAUVEGARDE DE LOG

3.1 Nouvelle VM :

Installer une nouvelle VM Debian avec Virtual Box
Installer openssh-server sur les deux VM 
Apt-get install openssh-server
Vérifier la connexion entre les deux VM
A partir d’une des deux VM pinger l’autre

3.2 Création du script :

Les fichiers devront être datés du jour de leur archivage
Dans la VM principal créer un script avec un éditeur de texte
En parallèle dans la seconde vm créer le dossier de dépôt de log 
depot_log

3.3 Sauvegarde des logs :

A partir de VM principal
Exécuter le script ./My_Log.sh
Mettre le mot de passe pour chaque envoi 
Emplacements des logs 
Dans la seconde VM
Cd /home/login/depot_log