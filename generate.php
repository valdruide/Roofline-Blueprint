<!DOCTYPE html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <link rel="stylesheet" href="./assets/CSS/main.css" />
    <link rel="stylesheet" href="./assets/CSS/form.css" />
    <link rel="stylesheet" href="./assets/CSS/finalPdf.css" />
    <script>
        function generatePDF(){
            window.jsPDF = window.jspdf.jsPDF;
            let doc = new jsPDF('p', 'pt', 'a4')
            doc.html(document.getElementById('input_data'), {
                autoPaging: 'true',
                margin: [10, 0, 10, 0],
                callback : function(doc){
                    doc.save('Cahier des charges.pdf')
                },
            });
        }
    </script>
</head>
<body>
    <div id="input_data">
        <h1>Cahier des charges</h1>
        <h2>Présentation du site</h2>
        <p><span>Nom du site: </span><?php echo $_POST["nomSite"]; ?></p>
        <p><span>Theme du site: </span><?php echo $_POST["themeSite"]; ?></p>
        <p><span>Description: </span><?php echo $_POST["description"]; ?></p>
        <?php
            if(!empty($_POST['marque'])){
                foreach($_POST['marque'] as $value){
                    echo "<p><span>J'ai déposé mon nom à l'INPI ? </span>".$value.'</p>';
                }
            }
        ?>
        <?php
            if(!empty($_POST['nomDomaine'])){
                foreach($_POST['nomDomaine'] as $value){
                    echo "<p><span>Nom de domaine: </span>".$value.'</p>';
                }
            }
        ?>
        <p><span>Domaine: </span><?php echo $_POST["adrSite"]; ?></p>
        <?php
            if(!empty($_POST['mailPro'])){
                foreach($_POST['mailPro'] as $value){
                    echo "<p><span>J'ai déjà un email pro ? </span>".$value.'</p>';
                }
            }
        ?>
        <?php
            if(!empty($_POST['extension'])){
                foreach($_POST['extension'] as $value){
                    echo "<p><span>Extension complémentaire: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Extension(s) complémentaire(s): Aucune</span></p>";
            }
        ?>
        <p><span>Autre(s) extension(s): </span><?php echo $_POST["autreExt"]; ?></p>
        <h2>Objectifs du site</h2>
        <?php
            if(!empty($_POST['porte'])){
                foreach($_POST['porte'] as $value){
                    echo "<p><span>Portée du site: </span>".$value.'</p>';
                }
            }
        ?>
        <?php
            if(!empty($_POST['type'])){
                foreach($_POST['type'] as $value){
                    echo "<p><span>Type de site: </span>".$value.'</p>';
                }
            }
        ?>
    <p><span>Autre type de site: </span><?php echo $_POST["autreType"]; ?></p>
    <p><span>Objectif(s): </span><?php echo $_POST["objectif"]; ?></p>
    <p><span>Public cible: </span><?php echo $_POST["public"]; ?></p>
    <?php
            if(!empty($_POST['cms'])){
                foreach($_POST['cms'] as $value){
                    echo "<p><span>CMS souhaité: </span>".$value.'</p>';
                }
            }
    ?>
    <p><span>Autre CMS (Si aucun choisi): </span><?php echo $_POST["autreCms"]; ?></p>
    <h2>Fonctionnalités attendues</h2>
    <?php
            if(!empty($_POST['fonction'])){
                foreach($_POST['fonction'] as $value){
                    echo "<p><span>Fonctionnalité: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Fonctionnalité: Aucune</span></p>";
            }
    ?>
    <p><span>Autres fonctionnalités: </span><?php echo $_POST["autreFonction"]; ?></p>
    <h2>Organisation et navigation</h2>
    <p><span>Plan du site: </span><?php echo $_POST["planSite"]; ?></p>
    <h2>Intégration des contenus</h2>
    <p><span>Qui rédige :</span></p>
    <p><span>Story Telling: </span><?php echo $_POST["redacStory"]; ?></p>
    <p><span>Description catégories: </span><?php echo $_POST["redacDescCat"]; ?></p>
    <p><span>Description produit: </span><?php echo $_POST["redacDescProduct"]; ?></p>
    <p><span>Article de blog: </span><?php echo $_POST["redacBlog"]; ?></p>
    <p><span>Catégorie de blog: </span><?php echo $_POST["redacCatBlog"]; ?></p>
    <p><span>Pour chaque type de contenu: </span><?php echo $_POST["redacOpti"]; ?></p>
    <?php
            if(!empty($_POST['redacType'])){
                foreach($_POST['redacType'] as $value){
                    echo "<p><span>Nous rédigeons: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Nous rédigeons: //</span></p>";
            }
    ?>
    <?php
            if(!empty($_POST['imageType'])){
                foreach($_POST['imageType'] as $value){
                    echo "<p><span>Contenus images: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Contenus images: //</span></p>";
            }
    ?>
    <?php
            if(!empty($_POST['videoType'])){
                foreach($_POST['videoType'] as $value){
                    echo "<p><span>Contenus vidéo: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Contenus vidéo: //</span></p>";
            }
    ?>
    <?php
            if(!empty($_POST['integration'])){
                foreach($_POST['integration'] as $value){
                    echo "<p><span>Qui intègre les contenus?: </span>".$value.'</p>';
                }
            }
    ?>
    <?php
            if(!empty($_POST['origineContenu'])){
                foreach($_POST['origineContenu'] as $value){
                    echo "<p><span>Qui fournit les contenus?: </span>".$value.'</p>';
                }
            }
    ?>
    <h2>Charte graphique</h2>
    <?php
            if(!empty($_POST['charteExist'])){
                foreach($_POST['charteExist'] as $value){
                    echo "<p><span>Charte graphique existante: </span>".$value.'</p>';
                }
            }
    ?>
    <?php
            if(!empty($_POST['charte'])){
                foreach($_POST['charte'] as $value){
                    echo "<p><span>Design du site: </span>".$value.'</p>';
                }
            }
    ?>
    <?php
            if(!empty($_POST['logo'])){
                foreach($_POST['logo'] as $value){
                    echo "<p><span>Logo du site: </span>".$value.'</p>';
                }
            }
    ?>
    <?php
            if(!empty($_POST['style'])){
                foreach($_POST['style'] as $value){
                    echo "<p><span>Style du site: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Style du site: //</span></p>";
            }
    ?>
    <p><span>Exemples de sites inspirants: </span><?php echo $_POST["exempleSite"]; ?></p>
    <h2>Traductions et Langues</h2>
    <p><span>Langue d'origine du site: </span><?php echo $_POST["langue"]; ?></p>
    <?php
            if(!empty($_POST['traduction'])){
                foreach($_POST['traduction'] as $value){
                    echo "<p><span>Traduction: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Traductions: Aucune</span></p>";
            }
    ?>
    <p><span>Autre(s) traductions: </span><?php echo $_POST["autreLangue"]; ?></p>
    <h2>Référencement</h2>
    <?php
            if(!empty($_POST['serviceSEO'])){
                foreach($_POST['serviceSEO'] as $value){
                    echo "<p><span>Référencement technique: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Référencement technique: Aucun</span></p>";
            }
    ?>
    <?php
            if(!empty($_POST['refTxt'])){
                foreach($_POST['refTxt'] as $value){
                    echo "<p><span>Référencement textuel: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Référencement textuel: Aucun</span></p>";
            }
    ?>
    <?php
            if(!empty($_POST['etude'])){
                foreach($_POST['etude'] as $value){
                    echo "<p><span>Etude de marché: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Etude de marché: Aucune</span></p>";
            }
    ?>
    <h2>Webmarketing</h2>
    <?php
            if(!empty($_POST['marketing'])){
                foreach($_POST['marketing'] as $value){
                    echo "<p><span>Service souhaité: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Service souhaité: Aucun</span></p>";
            }
    ?>
    <h2>Maintenance</h2>
    <?php
            if(!empty($_POST['sauvegarde'])){
                foreach($_POST['sauvegarde'] as $value){
                    echo "<p><span>Sauvegardes du site: </span>".$value.'</p>';
                }
            }
    ?>
    <?php
            if(!empty($_POST['maj'])){
                foreach($_POST['maj'] as $value){
                    echo "<p><span>Mises à jour du site: </span>".$value.'</p>';
                }
            }
    ?>
    <h2>Formations</h2>
    <?php
            if(!empty($_POST['formation'])){
                foreach($_POST['formation'] as $value){
                    echo "<p><span>Formation souhaitée: </span>".$value.'</p>';
                }
            } else {
                echo "<p><span>Formations souhaitées: Aucune</span></p>";
            }
    ?>
    <p><span>Autre(s) formation(s) souhaitée(s): </span><?php echo $_POST["autreForma"]; ?></p>
    <h2>Nom de domaine et hébergement</h2>
    <?php
            if(!empty($_POST['domaine'])){
                foreach($_POST['domaine'] as $value){
                    echo "<p><span>L'enregistrement du nom de domaine et l'hébergement sont pris en charge: </span>".$value.'</p>';
                }
            }
    ?>
    <h2>Remarque éventuelle</h2>
    <p><span>Remarques: </span><?php echo $_POST["remarq"]; ?></p>
    <h2>Contacts du projet</h2>
    <p><span>Contact(s): </span><?php echo $_POST["contact"]; ?></p>
    <p><span>Date de mise en ligne: </span><?php echo $_POST["dateProd"]; ?></p>
    <p class='generatedBy'>Généré par <span>https://roofline.fr</span></p>
</div>
    <a href="javascript:generatePDF()">Dowload PDF</a>
</body>
</html>