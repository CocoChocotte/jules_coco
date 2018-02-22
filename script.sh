#!/bin/bash
if [ ! -d "/backuppostgre" ];then
echo "Création de backuppostgre !";
sudo mkdir /backuppostgre
fi

while
echo "######Voici mon menu######" 
echo "1: Sauvegarder" 
echo "2: Restaurer"
echo "3: Supprimer +7j"
DATE=`date +%Y%m%d`
read choix 
do 
case $choix in 
        1) PGPASSWORD=appli pg_dump -h 127.0.0.1 -U appli_web > /backuppostgre/$DATE.backup$
echo "sauve";;
		2) find /backuppostgre ls  
						echo "tappez votre choix dans la liste"
                        read choice
                        psql appli_web < $choice ;; 
        3) find . /backuppostgre $log -type f -mtime +7 -exec /bin/rm -f {} ;;

        *) echo "tu t'es trompe";; 
esac 
done


