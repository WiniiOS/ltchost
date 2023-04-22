<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facture LTC HOST</title>
</head>
<body>
    <h1>Facture LTC HOST</h1>
    <hr>
    <p>Client: {{ $client_name }}</p>
    <p>Adresse: {{ $client_address }}</p>
    <p>E-mail: {{ $client_email }}</p>
    <p>Téléphone: {{ $client_phone }}</p>
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
                <td>{{ $hosting_price }} €</td>
                <td>{{ $hosting_duration }} mois</td>
                <td>{{ $hosting_total }} €</td>
            </tr>
            <tr>
                <td>Nom de domaine</td>
                <td>{{ $domain_price }} €</td>
                <td>{{ $domain_duration }} ans</td>
                <td>{{ $domain_total }} €</td>
            </tr>
        </tbody>
        
    </table>
    <hr>
    <p>Total à payer: {{ $total }} €</p>
    <hr>
    <p>Merci de votre confiance en LTC HOST.</p>
    <p>Coordonnées: 123 Rue de la Paix, Paris | contact@ltchost.com | 01 23 45 67 89</p>
</body>
</html>
