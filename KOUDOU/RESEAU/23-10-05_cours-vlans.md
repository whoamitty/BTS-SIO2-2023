###### #reseau #koudou #vlan  23-10-05

#                     CHAP1:   LES VLANS

Les vlans permettent de créer des réseaux logiques isolés dans 

un réseau physique limitant les diffusions de broadcast et   
optimisant la gestion de la bande passante.  
Ils sont définis dans le RFC 2674.  
C'est un outil essentiel pour améliorer la performance du réseau local.

<br>

>[!IMPORTANT]
>***Question de contrôle potentiel***  
>Comment les vlans peuvent nous aidés à améliorer la  
>performance de notre réseau local ?

***Sans plus tarder, nous allons parler des avantages et de la  
configuration des vlans.  
Mais avant d'aller plus loin , nous allons expliquer comment les  
broadcast parviennent à polluer notre réseau.  
En effet, il existe deux types de broadcast :*** 

1) ***Les broadcast de niveau 3***  
   Exemple adresse IP=a.b.c.255/24  
  
2) ***Les broadcast de niveau 2 = cas des adresses Macs.***
<br>

>[!IMPORTANT]
>***Question de contrôle potentiel***  
>Que va faire un switch lorsqu'il reçoit un broadcast de niveau
>2?  
>  
> 
>Réponse: Il va le diffuser sur tout les ports  
>quel que soit les adresses IP.  
>C'est tout à fait normal parce qu'un switch ne regarde pas la  
>couche 3 du modèle OSI.


## Les avantages des VLANS 

<br>

### Les VLANS présentent de nombreux <br>avantages dans la gestion d'un réseau local :

<br>

#### 1) Réduction des diffusions de broadcast
Les VLANS permettent de limiter les diffusions de broadcast en  
isolant les groupes d'utilisateurs dans des réseaux  
logiques distinctes.  
Chaque groupe d'utilisateur ne peut communiquer qu'avec des utilisateurs de même VLAN.  
Ce qui réduit considérablement les diffusions de broadcast sur l'ensemble du réseau. 

<br>

#### 2) Optimisation de la bande passante 
En limitant les diffusions de broadcast, les VLANS permettent,  
d'optimiser la bande passante du réseau.  
Cela permet d'améliorer les performances et de réduire les  
temps de latence, en particulier dans les réseaux à fortes  
charges.

<br>

#### 3) Gestion des utilisateurs par fonction ou par département
Les VLANS permettent de regrouper les utilisateurs pr fonction ou par département .  
Ce qui facilite la gestion du réseau. Les administrateurs  
peuvent définir des politiques de sécurité,  
de qualité de service ou de bande passante pour chaque VLAN  
en fonction des besoins des utlisateurs.

<br>

#### 4) Amélioration de la securité 
Les VLANS permettent également d'améliorer la sécurité en  
limitant l'accès aux ressources du réseau.  
Chaque VLAN est considéré comme un réseau distinct, ce qui  
permet de définir des politiques de sécurité spécifiques   
pour chaque groupe d'utilisateurs.

<br>

#### EN RÉSUMÉ:

Les VLANS sont un moyen efficace de limiter les diffusions de  
broadcast, d'optimiser la bande passante, de faciliter  
la gestion des utilisateurs et d'améliorer la securité du réseau.  
En comprenant les avantages des VLANS, vous pouvez  
optimiser la performance de votre réseau local.

<br>

# CHAP2: La numérotation VLAN

Il existe 3 types de VLANS:
- Les VLANS standard(numérotés de 1 à 1001)
- Les VLANS réservés(numérotés de 1002 à 1005)
- Les VLANS étendus(numérotés de 1006 à 4094)
<br>

- ***Les VLANS standards :***  
  Les VLANS standards sont disponibles sur tous les commutateurs.  
  Ces VLANS  sont utilisés pour la segmentation de base et la gestion du trafic de données sur un réseau local.  
  Les VLANS standards peuvent être créés, supprimés et modifiés par les administrateurs réseau.
<br>

- ***Les VLANS réservés :***  
  Les VLANS réservés ont des fonctions spéciales et sont  
  disponibles sur tous les commutateurs.  
  Les VLANS 1002 sont utilisés pour le trafic de liaison entre les commutateurs.  
  Les VLANS 1003 sont utilisés pour le trafic de liaison de la voix.  
  Les VLANS 1004 sont utilisés pour le trafic de liaison des protocoles de gestion.  
  Les VLANS 1005 sont utilisés pour la trafic de liaison de la sécurité.
  <br>
    
- ***Les VLANS étendus :***  
  Les VLANS étendus sont disponibles uniquement sur des  
  commutateurs qui prennet en charge le protocole VLAN  
  étendu(VLAN TRUNKING PROTOCOL - $VTP_V3$)
    
  Les VLANS étendus sont utilisés pour la segmentation  
  avancée et la gestion du trafic des données sur un réseau  
  local.  
  Les VLANS étendus peuvent être créés, supprimés et  
  modifiés par les administrateurs réseaux.

<br>
<br>

# CHAP3: Les VLANS en pratique

<br>
Par défaut, tous les ports sont dans le VLAN1.
<br>

Pour mettre le port et donc un poste client dans un VLAN différent,  
il va falloir:

- Créer le VLAN dans la VLAN DATABASE.
- Afficher un port dans ce VLAN.

<br>
<br>
<strong>Créer le VLAN dans la VLAN DATABASE = <br>
switch(config)# VLAN numéro_du_VLAN <br>
switch(config_VLAN)# name Nom_du_VLAN <br>
<br><br>
Affecter un port dans un VLAN  <br>
switch(config)# interface interface <br>
que l'on peut paramétrer. <br>
switch(config_if)# switchport mode access <br>
switch(config_if)# switchport access vlan numéro de vlan
</strong>



