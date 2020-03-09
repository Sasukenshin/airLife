
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom</strong> : {{ $userInformation['lastname'] }}</li>
      <li><strong>Email</strong> : {{ $userInformation['email'] }}</li>
      <li><strong>Message</strong> : {{ $userInformation['texte'] }}</li>
    </ul>
  </body>
</html>