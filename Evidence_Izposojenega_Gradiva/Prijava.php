<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:08
 */
include "Nav.php";
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/racun_prijava.css">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body>
<form action="overjanje.php" method="post">
    <input type="hidden" name="action" value="login">
    <div class="container">
        <h1>Prijava</h1>
        <p>Prosimo, izpolnite obrazec za prijavo.</p>

        <hr>
        <label for="upo"><b>Uporabniško Ime</b></label>
        <input type="text" placeholder="Vpišite Uporavniško Ime" name="upo-ime" required>

        <label for="geslo"><b>Geslo</b></label>
        <input type="password" placeholder="Vpišite Geslo" name="geslo" required>



        <button type="submit" name="submit" class="prijavabtn">prijava</button>
    </div>

    <div class="container signin">
        <p>Še nimate računa? <a href="odpiranje_novega_rac.php">Ustvari račun</a>.</p>
    </div>
</form>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
    }
</script>
</body>
</html>