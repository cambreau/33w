<?php
function icone_sociaux($couleur)
{
    // pour enle ver le # de la position 0 on extrait à partir de la position 1   
    $couleur = substr($couleur, 1);
?>

    <a class="sociaux" href="https://github.com/eddytuto/33w-ete-25">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=<?= $couleur ?>" width="32" height="32">
    </a>
    <a class="sociaux" href="https://facebook.com">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?= $couleur ?>" width="32" height="32">
    </a>

<?php } ?>

<?php 

/**
 * générateur de vague pour séparer deux sections
 */

function vague($couleur_haut, $couleur_bas) { ?>
    <style>
        .style-vague {
            position: relative;
            top: 9px;
            background-color: <?= $couleur_haut ?>;
        }
    </style>

    <svg class="style-vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
            fill="<?= $couleur_bas ?>"
            fill-opacity="1"
            d="M0,32L80,58.7C160,85,320,139,480,133.3C640,128,800,64,960,53.3C1120,43,1280,85,1360,106.7L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <?php } ?>