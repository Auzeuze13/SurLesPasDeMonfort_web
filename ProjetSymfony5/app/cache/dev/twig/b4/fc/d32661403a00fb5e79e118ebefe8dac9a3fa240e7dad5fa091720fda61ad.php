<?php

/* OCPlatformBundle:Advert:test_2.html.twig */
class __TwigTemplate_b4fcd32661403a00fb5e79e118ebefe8dac9a3fa240e7dad5fa091720fda61ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "- Sur les pas de montfort</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "       
        
    </head>
<body class=\"layoutContentRight rightbar  izimedia\">
\t\t<div id=\"page\">
\t
\t\t\t
\t\t\t
\t\t\t\t<!-- <div id=\"accessibility\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#contents\" class=\"LinkIn\">Aller au texte</a></li>
\t\t\t\t\t\t<li><a href=\"#firstLevel\" class=\"LinkIn\">Aller au menu</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>-->


\t\t\t\t<header id=\"header\">
\t\t\t\t\t<div id=\"headerInner\" class=\"inner container\">

\t\t\t\t\t\t<a id=\"logo\" class=\"LinkIn\" href=\"/\">
\t\t\t\t\t\t\t<img alt=\"Le parcours Découverte\" src=\"/images/charte/logo_LeParcoursDecouverte.jpg\">
\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"box box-text logo_montfort\">

\t\t<div class=\"box-titre\">
\t\t\tLogo MontfortLogo
\t\t</div>

\t\t\t
\t<div class=\"box-container\">
\t\t<p>
\t<img alt=\"logo_Montfort\" src=\"/images/charte/logo_montfort__048477200_1211_25072013.jpg\"></p>

\t</div>
\t
\t<div class=\"box-footer\"></div>
</div><div class=\"box box-text drapeau\">

\t\t<div class=\"box-titre\">
\t\t\tDrapeau Anglais
\t\t</div>

\t\t\t
\t<div class=\"box-container\">
\t\t<p>
\t<a class=\"LinkIn\" href=\"/english/\" hreflang=\"fr\"><img alt=\" drapeau_anglais \" src=\"/media/drapeau_anglais__042815200_1547_01082013.jpg\"></a></p>

\t</div>
\t
\t<div class=\"box-footer\"></div>
</div><div class=\"box box-text drapeau\">

\t\t<div class=\"box-titre\">
\t\t\tDrapeau Français
\t\t</div>

\t\t\t
\t<div class=\"box-container\">
\t\t<p>
\t<a class=\"LinkIn\" href=\"/francais/\" hreflang=\"fr\"><img alt=\" drapeau_francais \" src=\"/media/drapeau_francais__013445700_1547_01082013.jpg\"></a></p>

\t</div>
\t
\t<div class=\"box-footer\"></div>
</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t</div>
\t\t\t\t</header>\t

\t\t\t\t<div class=\"nested container\">
\t\t\t\t\t
  <div class=\"contentSmart\">
    <h2 class=\"smart-menu\">
     <a class=\"LinkIn\" href=\"#\">Menu de navigation</a>
    </h2>
  </div>
  
  <nav class=\"inner\">
\t  <ul style=\"display: block;\" class=\"firstLevel\">

\t\t\t<li class=\"active test\">
\t\t\t\t<a class=\"LinkIn\" title=\"Accueil\" href=\"/francais/accueil/\"><span>Accueil</span></a>

\t\t\t</li>

\t\t\t<li class=\"defaultmenu carte\">
\t\t\t\t<a class=\"LinkIn\" title=\"Carte\" href=\"/francais/carte/\"><span>Carte</span></a>

\t\t\t</li>

\t\t\t<li class=\"defaultmenu lieux\">
\t\t\t\t<a class=\"LinkIn\" title=\"Lieux\" href=\"/francais/lieux/\"><span>Lieux</span></a>

\t\t\t\t\t<ul class=\"secondLevel\">

\t\t\t\t\t\t\t<li class=\"defaultmenu saintlaurentsursevre_terre_vivante\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/saint-laurent-sur-sevre-terre-vivante/\"><span>Saint-Laurent-sur-Sevre terre vivante</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu la_sevre_nantaise_riviere_amenagee\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/les-moulins-de-saint-laurent-sur-sevre/\"><span>Les moulins de Saint-Laurent-sur-Sèvre</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu le_calvaire_symbole_monfortain\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/le-calvaire-symbole-monfortain/\"><span>Le calvaire symbole monfortain</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu une_ville_au_cur_du_bocage_vendeen\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/une-ville-au-cur-du-bocage-vendeen/\"><span>Une ville au cœur du bocage vendéen</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu basilique_saint_louismarie_grignion_de_montfort\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/basilique-saint-louis-marie-grignion-de-montfort/\"><span>Basilique saint Louis-Marie Grignion de Montfort</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu la_chapelle_de_la_sagesse\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/la-chapelle-de-la-sagesse/\"><span>La chapelle de la Sagesse</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu maison_mere_des_filles_de_la_sagesse\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/maison-mere-des-filles-de-la-sagesse/\"><span>Maison Mère des Filles de la Sagesse</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu maison_mere_des_missionnaires_monfortains\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/missionnaires-monfortains-le-saint-esprit/\"><span>Missionnaires Monfortains, le Saint Esprit</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu maison_longue\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/maison-longue/\"><span>Maison Longue</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu pont_eiffel\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/pont-eiffel/\"><span>Pont Eiffel</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu ouvrages_hydrauliques\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/ouvrages-hydrauliques/\"><span>Ouvrages hydrauliques</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu maison_de_la_citadelle\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/maison-de-la-citadelle/\"><span>Maison de la Citadelle</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu chapelle_des_penitents\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/chapelle-des-penitents/\"><span>Chapelle des Pénitents</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu maison_des_tisserands\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/maison-des-tisserands/\"><span>Maison des Tisserands</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li class=\"defaultmenu chapelle_sainteanne\">
\t\t\t\t\t\t\t\t<a class=\"LinkIn\" href=\"/francais/lieux/chapelle-sainte-anne/\"><span>Chapelle Sainte-Anne</span></a>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t</li>

\t\t\t<li class=\"defaultmenu contact\">
\t\t\t\t<a class=\"LinkIn\" title=\"Contact\" href=\"/francais/contact/\"><span>Contact</span></a>

\t\t\t</li>

\t  </ul>
\t</nav>


\t\t\t\t</div>

\t\t\t\t

\t\t\t
\t\t
\t\t\t
\t\t\t<div id=\"wrapper\">
\t\t\t\t<div id=\"wrapperInner\" class=\"inner container\">
\t\t\t\t\t
\t\t\t\t\t<section id=\"contents\">\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t\t<div id=\"contentsInner\" class=\"inner\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<article id=\"article\">

  \t

    <div id=\"text\">
      <h1>
\tDécouvrez notre parcours touristique en images</h1>
<p>
\t<script type=\"text/javascript\">
\t\t\t\t<!--
\t\t\t\t\t
\t\t\t\t\$(function() {
\t\t\t\t\tif (\$('#emBehavior_4').galleria) {
\t\t\t\t\t\t\$('#emBehavior_4').galleria({showInfo: false, showImagenav: false, showCounter: false, pauseOnInteraction: false, autoplay: 5000, transition: \"fade\", easing: \"galleria\", transitionSpeed: 200, imageCrop: false, imagePan: false, imagePanSmoothness: 12, imagePosition: \"center\", imageMargin: 0, show: 0, thumbnails: false, thumbQuality: \"auto\", carouselFollow: false, queue: false, carouselSpeed: 100, carouselSteps: \"auto\", thumbMargin: 0, lightbox: 1, overlayBackground: \"#0b0b0b\", overlayOpacity: 0.8, carousel: 1});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t\t//-->
\t\t\t\t</script><div style=\"width: 568px; height: 322px;\" id=\"emBehavior_4\">

\t\t<a style=\"display: none;\" class=\"LinkFile\" href=\"/media/1__045850800_1017_01082013.jpg\">
\t\t\t\t<img title=\"\" alt=\"\" src=\"/media/1__045850800_1017_01082013.jpg\" longDesc=\"\">
\t\t</a>

\t\t<a style=\"display: none;\" class=\"LinkFile\" href=\"/media/3__097767000_1017_01082013.jpg\">
\t\t\t\t<img title=\"\" alt=\"\" src=\"/media/3__097767000_1017_01082013.jpg\" longDesc=\"\">
\t\t</a>

\t\t<a style=\"display: none;\" class=\"LinkFile\" href=\"/media/2__083447500_1017_01082013.jpg\">
\t\t\t\t<img title=\"\" alt=\"\" src=\"/media/2__083447500_1017_01082013.jpg\" longDesc=\"\">
\t\t</a>

\t\t<a style=\"display: none;\" class=\"LinkFile\" href=\"/media/lavoir__089174900_1017_01082013.jpg\">
\t\t\t\t<img title=\"\" alt=\"\" src=\"/media/lavoir__089174900_1017_01082013.jpg\" longDesc=\"\">
\t\t</a>

<div style=\"width: 584px; height: 322px;\" class=\"galleria-container notouch\"><div class=\"galleria-stage\"><div style=\"left: 0px; top: 0px; width: 100%; height: 100%; position: relative;\" class=\"galleria-images\"><div style=\"left: 0px; top: 0px; width: 564px; height: 252px; overflow: hidden; position: absolute; z-index: 0; opacity: 0;\" class=\"galleria-image\"><div style=\"left: 232px; top: 0px; width: 100px; height: 252px; right: 0px; bottom: 0px; display: none; position: absolute; z-index: 2;\" class=\"galleria-layer\"></div><img style=\"left: 232px; top: 0px; width: 445px; height: 252px; display: block; position: absolute; cursor: pointer; min-height: 0px; max-height: none; min-width: 0px; max-width: none; opacity: 1;\" src=\"/media/lavoir__089174900_1017_01082013.jpg\" width=\"445\" height=\"252\"></div><div style=\"left: 0px; top: 0px; width: 564px; height: 252px; overflow: hidden; position: absolute; z-index: 1; opacity: 1;\" class=\"galleria-image\"><div style=\"left: 232px; top: 0px; width: 100px; height: 252px; right: 0px; bottom: 0px; display: none; position: absolute; z-index: 2;\" class=\"galleria-layer\"></div><img style=\"left: 232px; top: 0px; width: 445px; height: 252px; display: block; position: absolute; cursor: pointer; min-height: 0px; max-height: none; min-width: 0px; max-width: none; opacity: 1;\" src=\"/media/1__045850800_1017_01082013.jpg\" width=\"445\" height=\"252\"></div></div><div style=\"display: none; opacity: 0.4;\" class=\"galleria-loader\"></div><div style=\"left: -10000px; position: absolute; opacity: 0;\" class=\"galleria-counter\"><span class=\"galleria-current\">1</span> / <span class=\"galleria-total\">4</span></div><div style=\"left: -10000px; position: absolute;\" class=\"galleria-image-nav\"><div style=\"right: -50px;\" class=\"galleria-image-nav-right\"></div><div style=\"left: -50px;\" class=\"galleria-image-nav-left\"></div></div></div><div class=\"galleria-thumbnails-container\"><div class=\"galleria-thumb-nav-left disabled\"></div><div style=\"overflow: hidden; position: relative;\" class=\"galleria-thumbnails-list\"><div style=\"width: 0px; height: 0px; overflow: hidden; position: relative;\" class=\"galleria-thumbnails\"></div></div><div class=\"galleria-thumb-nav-right disabled\"></div></div><div style=\"left: -10000px; display: none; position: absolute;\" class=\"galleria-info\"><div class=\"galleria-info-text\"><div style=\"display: none;\" class=\"galleria-info-title\"></div><div style=\"display: none;\" class=\"galleria-info-description\"></div></div><div class=\"galleria-info-link\"></div><div class=\"galleria-info-close\"></div></div><div style=\"opacity: 0;\" class=\"galleria-tooltip\"></div></div></div>
<p></p>
<h1>
\tSur les pas de Montfort</h1>
<p>
\t<a class=\"LinkIn\" href=\"/francais/carte/\" hreflang=\"fr\"><img style=\"float: left;\" class=\"carte_accueil\" alt=\" carte_parcours \" src=\"/media/carte_parcours__066350100_0914_01082013.png\"></a>Porté par l'association Saint-Laurent Patrimoine, le parcours découverte de Saint-Laurent-sur-Sèvre \"sur les pas de Montfort\" vous propose un itinéraire balisé entre lieux historiques et patrimoines remarquables. Au cours de ce parcours, vous pourrez aussi rejoindre les sentiers de randonnées.</p>
<p>
\t<strong>Belle découverte !</strong></p>
<p>
\t<a class=\"LinkIn\" href=\"/francais/carte/\" hreflang=\"fr\"><img style=\"float: right;\" alt=\" btn_decouvrir \" src=\"/media/btn_decouvrir__092960100_1014_01082013.jpg\"></a></p>
<p>
\t&nbsp;</p>
<p>
\t&nbsp;</p>

    </div>

    <div id=\"view_more\">

    
  
    </div>


\t<div class=\"author\"></div>

\t
\t


\t


\t

\t

</article>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"clear\"></span>\t
\t\t\t\t\t\t
\t\t\t\t\t</section>
\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t
\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t<aside id=\"rightbar\">
\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t<div class=\"box box-text img_colright\">

\t\t<div class=\"box-titre\">
\t\t\tTest photo
\t\t</div>

\t\t\t
\t<div class=\"box-container\">
\t\t<p>
\t<img style=\"width: 430px; height: 611px;\" alt=\"img_colright\" src=\"/media/img_colright__074842300_1437_25072013.jpg\"></p>

\t</div>
\t
\t<div class=\"box-footer\"></div>
</div>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</aside>
\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t
\t\t\t<footer id=\"footer\">
\t\t\t\t<div id=\"footerInner\" class=\"container inner\">


\t\t\t\t\t\t<div class=\"nested\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"box box-text partenaires_footer\">

\t\t<div class=\"box-titre\">
\t\t\tProjet financé par :
\t\t</div>

\t\t\t
\t<div class=\"box-container\">
\t\t<p>
\t<img style=\"float: left;\" alt=\"logo_blasonStlaurent\" src=\"/media/logo_blasonstlaurent__064176400_1528_25072013.jpg\">&nbsp;<img style=\"float: left;\" alt=\"logo_cantonMortagne\" src=\"/media/logo_cantonmortagne__096448900_1529_25072013.jpg\">&nbsp;<img style=\"float: left;\" alt=\"logo_vendee\" src=\"/media/logo_vendee__064366700_1529_25072013.jpg\">&nbsp;<img style=\"float: left;\" alt=\"logo_montfortains\" src=\"/media/logo_montfortains__084319700_1811_01082013.jpg\"></p>

\t</div>
\t
\t<div class=\"box-footer\"></div>
</div>
\t\t\t\t\t\t<span class=\"clear\"></span>
\t
\t\t\t\t</div>

\t\t\t</footer>
\t\t\t
\t\t\t
\t\t</div>
\t\t\t
\t\t
\t\t<div style=\"visibility: hidden; position: absolute; z-index: 1000;\" id=\"overDiv\"></div>
\t\t
\t
<div style=\"left: 1353px; top: 5px; position: absolute; z-index: 2;\" id=\"authIcon\"><a title=\"Authentification (Alt+A)\" href=\"javascript:void(0);\" hreflang=\"fr\"><img alt=\"Authentification\" src=\"/common_images/izimedia/auth.png\" a=\"\" <=\"\"></a></div><div style=\"display: none;\" id=\"overlay\"></div><div style=\"display: none;\" id=\"lightbox\"><div style=\"width: 250px; height: 250px;\" id=\"outerImageContainer\"><div id=\"imageContainer\"><img id=\"lightboxImage\"><div id=\"hoverNav\"><a id=\"prevLink\" title=\"<-\" href=\"javascript://\"></a><a id=\"nextLink\" title=\"->\" href=\"javascript://\"></a></div><div id=\"loading\"><a id=\"loadingLink\" href=\"javascript://\"><img src=\"/common_images/skin001/gallery/loading.gif\"></a></div></div></div><div style=\"width: 250px;\" id=\"imageDataContainer\" class=\"clearfix\"><div id=\"imageData\"><div id=\"imageDetails\"><span id=\"caption\"></span><span id=\"numberDisplay\"></span></div><div id=\"bottomNav\"><a id=\"bottomNavClose\" title=\"Fermer\" href=\"javascript://\"><img src=\"/common_images/skin001/gallery/closelabel.gif\"></a></div></div></div></div></body></html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Sur les pas de Montfort";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "           
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/styles.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/print.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/gallery.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/galleria.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        ";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:test_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 12,  418 => 11,  414 => 10,  410 => 9,  407 => 8,  404 => 7,  398 => 5,  37 => 14,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
