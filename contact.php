<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-kq1hWV2Rog/uLZ5S3qDGSQ0D9UBCCv1ZRS8fXp4i68xQ/2EPDiPOeTpTEjz2B+Dx" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Votre Logo</a>
            <!-- Ajoutez le menu de navigation ici -->
        </nav>
    </header>
    <main role="main" class="container">
        <!-- Le contenu principal de votre page -->
        <article>
            <section>
                <h1>Contactez-nous</h1>
                <form method="post" action="traitement_formulaire.php">
                    <div class="form-group">
                        <label for="nom">Nom :</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>

                    <div class="form-group">
                        <label for="prenom">Prénom :</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Soumettre</button>
                </form>
            </section>
            <!-- Ajoutez d'autres sections selon le besoin -->
        </article>
        <div class="row">
            <div class="col-sm-6">
                <!-- Contenu de la colonne 1 -->
            </div>
            <div class="col-sm-6">
                <!-- Contenu de la colonne 2 -->
            </div>
        </div>
    </main>
    <footer class="bg-dark text-light text-center p-3">
        <p>Pied de page</p>
    </footer>
</body>

</html>
