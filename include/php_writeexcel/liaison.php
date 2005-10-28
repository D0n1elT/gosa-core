<?php
// La s�quence de base avec LDAP est 
// connexion, liaison, recherche, interpr�tation du r�sultat
// d�connexion
 $admin="cn=admin GOsa main administrator,dc=vincent,dc=be";
 $password="";
echo '<h3>requ�te de test de LDAP</h3>';
echo 'Connexion ...';
$ds=ldap_connect("localhost");  // doit �tre un serveur LDAP valide !
echo 'Le r�sultat de connexion est ' . $ds . '<br />';

if ($ds) { 
    echo 'Liaison ...'; 
    $r=ldap_bind($ds);     // connexion anonyme, typique
//      $r=ldap_bind($ds);                                 // pour un acc�s en lecture seule.
     echo 'Le r�sultat de connexion est ' . $r . '<br />';
// 
     echo 'Recherchons (sn=S*) ...';
//     // Recherche par nom
//      $sr=ldap_search($ds,"o=My Company, c=US", "sn=S*");
     $sr=   @ldap_search ($ds, "", "objectClass=*", array("namingContexts"));
     echo 'Le r�sultat de la recherche est ' . $sr . '<br />';
// 
//     echo 'Le nombre d\'entr�es retourn�es est ' . ldap_count_entries($ds,$sr) 
//          . '<br />';
// 
//     echo 'Lecture des entr�es ...<br />';
//     $info = ldap_get_entries($ds, $sr);
//     echo 'Donn�es pour ' . $info["count"] . ' entr�es:<br />';
// 
//     for ($i=0; $i<$info["count"]; $i++) {
//         echo 'dn est : ' . $info[$i]["dn"] . '<br />';
//         echo 'premiere entree cn : ' . $info[$i]["cn"][0] . '<br />';
//         echo 'premier email : ' . $info[$i]["mail"][0] . '<br />';
    
    
    echo 'Fermeture de la connexion';
    ldap_close($ds);

} else {
    echo '<h4>Impossible de se connecter au serveur LDAP.</h4>';
}
?> 