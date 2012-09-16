<?php

// Language definitions used in admin_groups.php
$lang_admin_groups = array(

'Must enter title message'		=>	'Vous devez indiquer un nom au groupe.',
'Title already exists message'		=>	'Il existe déjà un groupe nommé <strong>%s</strong>.',
'Default group redirect'		=>	'Groupe par défaut défini. Redirection&#160;…',
'Cannot remove default message'		=>	'Le groupe par défaut ne peut être supprimé. Pour pouvoir supprimer ce groupe, vous devez d\'abord configurer un autre groupe.',
'Group removed redirect'		=>	'Groupe supprimé. Redirection&#160;…',
'Group added redirect'			=>	'Groupe ajouté. Redirection&#160;…',
'Group edited redirect'			=>	'Groupe modifié. Redirection&#160;…',

'Add groups head'			=>	'Ajouter/configurer des groupes',
'Add group subhead'			=>	'Ajouter un nouveau groupe',
'New group label'			=>	'Baser le nouveau groupe sur',
'New group help'			=>	'Sélectionner un groupe d\'utilisateurs duquel le nouveau groupe va hériter les permissions. La page suivante vous permettra de régler plus précisément les paramètres.',
'Default group subhead'			=>	'Définir le groupe par défaut',
'Default group label'			=>	'Groupe par défaut',
'Default group help'			=>	'Ceci est le groupe par défaut, c\'est-à-dire le groupe dans lequel sont placés les utilisateurs lorsqu\'ils s\'inscrivent. Pour des raisons de sécurité, les utilisateurs ne peuvent être placés ni dans le groupe des modérateurs, ni dans le groupe des administrateurs par défaut.',
'Existing groups head'			=>	'Groupes existants',
'Edit groups subhead'			=>	'Modifier/supprimer des groupes',
'Edit groups info'			=>	'Les groupes prédéfinis des invités, administrateurs, modérateurs et membres ne peuvent être supprimés. Cependant, ils peuvent être modifiés. Veuillez prendre note que, dans certains groupes, certaines options ne sont pas disponibles (ex. : la permission de <em>modifier les messages</em> pour les invités). Les administrateurs ont toujours toutes les permissions.',
'Edit link'				=>	'Modifier',
'Delete link'				=>	'Supprimer',
'Group delete head'			=>	'Suppression de groupe',
'Confirm delete subhead'		=>	'Confirmez la suppression du groupe',
'Confirm delete info'			=>	'Souhaitez-vous vraiment supprimer le groupe <strong>%s</strong> ?',
'Confirm delete warn'			=>	'ATTENTION&#160;! Après avoir supprimé un groupe il n\'est plus possible de le rétablir.',
'Delete group head'			=>	'Supprimer le groupe',
'Move users subhead'			=>	'Déplacer les utilisateurs actuellement dans le groupe',
'Move users info'			=>	'Le groupe <strong>%s</strong> comporte actuellement <strong>%s</strong> membres. Veuillez choisir un groupe auquel ses membres seront assignés après la suppression.',
'Move users label'			=>	'Déplacer les utilisateurs vers',
'Delete group'				=>	'Supprimer le groupe',

'Group settings head'			=>	'Paramètres du groupe',
'Group settings subhead'		=>	'Configurer les options et les permissions du groupe',
'Group settings info'			=>	'Les options et permissions ci-dessous sont les permissions par défaut de ce groupe d\'utilisateurs. Ces options sont appliquées si aucune permission spécifique au forum n\'est effective.',
'Group title label'			=>	'Nom du groupe',
'User title label'			=>	'Titre d\'utilisateur',
'User title help'			=>	'Ce titre remplacera tout rang que les utilisateurs auront obtenus dans ce groupe. Laissez vide pour utiliser titre ou rang par défaut.',
'Promote users label'			=>	'Promouvoir les utilisateurs.',
'Promote users help'			=>	'Vous pouvez promouvoir des utilisateurs dans un nouveau groupe automatiquement après un certain nombre de messages. Sélectionnez "%s" pour désactiver. Pour des raisons de sécurité, vous n\'êtes pas autorisé à sélectionner un groupe "administrateur". Les changements de groupe pour les utilisateurs touchés par ce paramètre ne peut prendre effet qu\'après leur prochain message.',
'Disable promotion'				=>	'Désactiver la promotion automatique',
'Mod privileges label'			=>	'Appliquer des privilèges de modérateur aux utilisateurs',
'Mod privileges help'			=>	'Pour qu\'un utilisateur de ce groupe puisse obtenir des privilèges de modérateur, il doit être assigné à modérer un ou plusieurs forums. Ceci se fait via la page d\'administration d\'utilisateur du profil de l\'utilisateur.',
'Edit profile label'			=>	'Autoriser les modérateurs à éditer les profils des utilisateurs',
'Edit profile help'			=>	'Si les privilèges de modérateurs sont activés, autoriser les utilisateurs de ce groupe à éditer les profils des utilisateurs.',
'Rename users label'			=>	'Autoriser les modérateurs à renommer les utilisateurs',
'Rename users help'			=>	'Si les privilèges de modérateurs sont activés, autoriser les utilisateurs de ce groupe à renommer les utilisateurs.',
'Change passwords label'		=>	'Autoriser les modérateurs à modifier les mots de passe',
'Change passwords help'			=>	'Si les privilèges de modérateurs sont activés, autoriser les utilisateurs de ce groupe à modifier le mot de passe des utilisateurs.',
'Ban users label'			=>	'Autoriser les modérateurs à bannir les utilisateurs',
'Ban users help'			=>	'Si les privilèges de modérateurs sont activés, autoriser les utilisateurs de ce groupe à bannir les utilisateurs.',
'Read board label'			=>	'Lire le forum',
'Read board help'			=>	'Autoriser les utilisateurs de ce groupe à afficher le forum. Ce paramètre s\'applique à tous les aspects du forum et ne peut donc pas être remplacé par les paramètres spécifiques au forum. Si votre choix porte sur le «&#160;Non&#160;», les utilisateurs dans ce groupe ne pourront que se connecter/déconnecter et s\'inscrire.',
'View user info label'			=>	'Afficher les informations sur l\'utilisateur',
'View user info help'			=>	'Autoriser les utilisateurs à afficher la liste des utilisateurs et les profils.',
'Post replies label'			=>	'Répondre aux messages',
'Post replies help'			=>	'Autoriser les utilisateurs de ce groupe à répondre dans les discussions.',
'Post topics label'			=>	'Créer des discussions',
'Post topics help'			=>	'Autoriser les utilisateurs de ce groupe à créer des discussions.',
'Edit posts label'			=>	'Modifier les messages',
'Edit posts help'			=>	'Autoriser les utilisateurs de ce groupe à modifier leurs propres messages.',
'Delete posts label'			=>	'Supprimer les messages',
'Delete posts help'			=>	'Autoriser les utilisateurs de ce groupe à supprimer leurs propres messages.',
'Delete topics label'			=>	'Supprimer les discussions',
'Delete topics help'			=>	'Autoriser les utilisateurs de ce groupe à supprimer leurs propres discussions (ainsi que les éventuelles réponses).',
'Post links label'				=>	'Poster des liens',
'Post links help'				=>	'Autoriser les utilisateurs de ce groupe à inclure des liens dans leurs messages. Ce paramètre s\'applique également aux signatures et au champ site Web du profil utilisateurs',
'Set own title label'			=>	'Définir leur propre titre d\'utilisateur',
'Set own title help'			=>	'Autoriser les utilisateurs de ce groupe à définir leur propre titre d\'utilisateur.',
'User search label'			=>	'Utiliser la recherche',
'User search help'			=>	'Autoriser les utilisateurs de ce groupe à utiliser la fonction de recherche.',
'User list search label'		=>	'Rechercher dans la liste des utilisateurs',
'User list search help'			=>	'Autoriser les utilisateurs de ce groupe à rechercher à partir d\'un texte libre des utilisateurs dans la liste d\'utilisateurs.',
'Send e-mails label'			=>	'Envoyer des e-mails',
'Send e-mails help'			=>	'Autoriser les utilisateurs de ce groupe à envoyer des e-mails à d\'autres utilisateurs.',
'Post flood label'			=>	'Intervalle entre messages consécutifs',
'Post flood help'			=>	'Délai en secondes à respecter par les utilisateurs de ce groupe entre deux messages envoyés. Définir à 0 pour désactiver.',
'Search flood label'			=>	'Intervalle entre recherches consécutives',
'Search flood help'			=>	'Délai en secondes à respecter par les utilisateurs de ce groupe entre deux recherches. Définir à 0 pour désactiver.',
'E-mail flood label'			=>	'Intervalle entre e-mails consécutifs',
'E-mail flood help'			=>	'Délai en secondes à respecter par les utilisateurs de ce groupe entre deux e-mails envoyés. Définir à 0 pour désactiver.',
'Report flood label'      =>  'Intervalle entre signalements consécutifs',
'Report flood help'        =>  'Délai en secondes à respecter par les utilisateurs de ce groupe entre deux signalements envoyés. Définir à 0 pour désactiver.',
'Moderator info'			=>	'Veuillez prendre note que pour qu\'un utilisateur de ce groupe puisse obtenir des privilèges de modérateur, il doit être assigné à modérer un ou plusieurs forums. Ceci se fait via la page d\'administration d\'utilisateur du profil de l\'utilisateur.',

);