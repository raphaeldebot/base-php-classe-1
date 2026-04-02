# Exercice MVC | mvc-19

## Marche à suivre préformation TI1
### Phase 1

1) On part de votre ordinateur 
- Creation d'un dossier sur votre ordinateur :`git init`
- Creation d'un `repository` sur `GitHub` puis on le lien en local : `git remote add origin KEY@SSH`
#### Ou 
2) On part de `GitHub`
- On crée un `fork` du `repository` "**upstream**" sur `GitHub`
- On clone le `fork` du `repository` depuis `GitHub` (utilisation de `SSH` de préférence) sur votre ordinateur mais **pas dans projet git existant ni un endroit suivi par une synchronisation (OneDrive, Dropbox, ICloud etc..., )**

#### Ensuite
- Ajout de l'upstream (pour le `pull pequest` final) : `git remote add upstream KEY@SSH`
- Creation du `.gitignore` vide (**! Important**)
- Dossier vide ? `.gitkeep`
- Informer sur le projet ? `README.md`

### Phase 2

Creation des dossiers impoetants du site pour le MVC(Model View Controller)
- `public` Dossier accessible à tous (**frontend**)
- `model` Dossier Il gère l'accès aux données (**backend**)
- `view` Dossier contenant les vues (templates) (**backend**)
- `controller` Dossier qui gère le lien entre la  `view` et les `model` (Entre **Backend** et **Middle-end** )
- `datas` - nos fichiers de préparation du travail

#### .gitkeep

Mettez-y des `.gitkeep` dans chaque dossier et faîtes des commit.

#### Création du config.php

**AVANT** la création de `Stagiaire\Yuliia\mvc-19\config.php`, ouvrez `.gitignore` et mettez-y :

```bash 
# Stagiaire\Yuliia\mvc-19\.gitignore

# Stagiaire\Yuliia\mvc-19\.gitignore

# On protège nos variables st constantes dangerouses 
# du fichier config.php
config.php
```

Créez le fichier `config.php` à la racine du projet. Il est protégé grâce au `.gitconfig`.

### Phase 3

#### Création du controller frontal 

Le front controller, nomme `public/index.php`, est le seul fichier `php`qui sera accessible à un utilisateru externe.

#### Création du config.php
Il va devoir Recréer config.php pour accéder aux contantes de sécurité.
        cp config.ini.php config.php

