<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facture LTC HOST</title>
</head>
<body>
    <h1>Facture LTC HOST</h1>
    <hr>
    <p>Client: {{ "‘franck’" }}</p>
    <p>Adresse: {{ "‘mvan’" }}</p>
    <p>E-mail: {{ 'mvan@gmail.com' }}</p>
    <p>Téléphone: {{ "6554545434"  }}</p>
    <hr>
    <table>

        <thead>
            <tr>
                <th>Service</th>
                <th>Prix</th>
                <th>Durée</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Hébergement web</td>
                <td>{{ 20 }} €</td>
                <td>{{ 4 }} mois</td>
                <td>{{ 20 }} €</td>
            </tr>
            <tr>
                <td>Nom de domaine</td>
                <td>{{ 20 }} €</td>
                <td>{{ 4 }} ans</td>
                <td>40.000 €</td>
            </tr>
        </tbody>
        
    </table>
    <hr>
    <p>Total à payer: {{ "40.000" }} €</p>
    <hr>
    <p>Merci de votre confiance en LTC HOST.</p>
    <p>Coordonnées: 123 Rue de la Paix, Paris | contact@ltchost.com | 01 23 45 67 89</p>
</body>
</html>

