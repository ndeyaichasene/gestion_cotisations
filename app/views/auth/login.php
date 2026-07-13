<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Connexion — Carnet de Cohorte P8</title>
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<div class="auth-page">
  <div class="auth-card">

    <div class="auth-hero">
      <div class="logo"><span class="mark">CC</span> Carnet de Cohorte</div>
      <div>
        <h1>L'excellence dans la tenue de comptes.</h1>
        <p>Suivez les cotisations hebdomadaires et les campagnes ponctuelles de votre cohorte, en toute transparence, du premier au dernier mois de formation.</p>
      </div>
      <div class="signature">Carnet digital — cohorte active</div>
    </div>

    <div class="auth-form">
      <h2>Connexion à votre espace</h2>
      <p class="hint">Renseignez vos identifiants pour accéder au tableau de bord.</p>
    <?php require_once dirname(__DIR__) . '/components/error.php'; ?>
      <form  method="POST" action="/login">
        <div class="field">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="ex : awa@cohorteP8.com" autocomplete="username">
        </div>
        <div class="field">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" placeholder="*******" autocomplete="current-password">
        </div>

        <div class="field-row">
          <label><input type="checkbox" name="remember"> Se souvenir de moi</label>
          <a href="#" class="btn-ghost">Mot de passe oublié ?</a>
        </div>

        <button type="submit" class="btn btn-primary">connecter→ </button>
          
      </form>

      <p class="auth-foot">Besoin d'un compte ? <a href="#" class="btn-ghost">Contactez votre administrateur</a></p>

      <div class="auth-help">
        Portail partagé par les Gérants, les Coachs et les Apprenants de la cohorte active.
      </div>
    </div>

  </div>
</div>

</body>
</html>
