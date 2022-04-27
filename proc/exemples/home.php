<?php 
    session_start();
    include_once('partials/header.inc'); 
    echo $_SESSION['login']; 
?>
    <h1>Page d'accueil</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi optio voluptatem eos doloribus dolor explicabo. Earum nihil eligendi minima vero beatae esse dolorum quae eius, quaerat odio quis praesentium culpa!</p>
    <ul>
        <li>Lorem, ipsum.</li>
        <li>Aperiam, error!</li>
        <li>Suscipit, modi.</li>
        <li>Accusamus, perspiciatis.</li>
    </ul>
<?php require_once('partials/footer.inc'); ?>