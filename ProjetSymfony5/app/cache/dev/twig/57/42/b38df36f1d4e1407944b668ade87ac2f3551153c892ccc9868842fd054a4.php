<?php

/* OCPlatformBundle:Advert:test.html.twig */
class __TwigTemplate_5742b38df36f1d4e1407944b668ade87ac2f3551153c892ccc9868842fd054a4 extends Twig_Template
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
        // line 12
        echo "       
        
    </head>
    <body>
    
        <header id=\"header\">
            <div id=\"headerInner\" class=\"inner container\">
                <a id=\"logo\" href=\"/\" class=\"LinkIn\">
                    <img src=\"/images/charte/logo_LeParcoursDecouverte.jpg\" alt=\"Le parcours Découverte\">
                    <span></span>
                </a>
                <div class=\"box box-text logo_montfort\">
                    <div class=\"box-titre\">
                      
                    </div>
                    <div class=\"box-container\">
                        <p>
                            <img alt=\"logo_Montfort\" src=\"/images/charte/logo_montfort__048477200_1211_25072013.jpg\">
                        </p>
                    </div>
                    <div class=\"box-footer\"></div>
                </div>
                <span class=\"clear\"></span>
             </div>
        </header>
        
       <div class=\"nested container\">
           <div class=\"contentSmart\">
               <h2 class=\"smart-menu\">
                   <a href=\"#\" class=\"LinkIn\">Menu de navigation</a>
               </h2>
           </div>
           <nav class=\"inner\">
               <ul class=\"firstLevel\" style=\"display: block;\">
                   <li class=\"active test\">
                       <a href=\"/francais/accueil/\" title=\"Accueil\" class=\"LinkIn\">
                           <span>Accueil</span>
                       </a>
                   </li>
                   <li class=\"defaultmenu carte\">
                       <a href=\"/francais/carte/\" title=\"Carte\" class=\"LinkIn\">
                           <span>Carte</span>
                       </a>
                   </li>
                   <li class=\"defaultmenu lieux\">
                       <a href=\"/francais/lieux/\" title=\"Lieux\" class=\"LinkIn\">
                           <span>Lieux</span>
                       </a>
                       <ul class=\"secondLevel\">
                           <li class=\"defaultmenu saintlaurentsursevre_terre_vivante\">
                               <a href=\"/francais/lieux/saint-laurent-sur-sevre-terre-vivante/\" class=\"LinkIn\">
                                   <span>Saint-Laurent-Sur-Sevre terre vivante</span>
                                </a>
                           </li>
                           <li class=\"defaultmenu la_sevre_nantaise_riviere_amenagee\">
                               <a href=\"/francais/lieux/les-moulins-de-saint-laurent-sur-sevre/\" class=\"LinkIn\">
                                   <span>Les moulins de Saint Laurent sur sevre</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu le_calvaire_symbole_montfortain\">
                               <a href=\"/francais/lieux/le-calvaire-symbole-montfortain/\" class=\"LinkIn\">
                                   <span>Le calvaire symbole monfortain</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu une_ville_au cur_du_bocage_vendeen\">
                               <a href=\"/francais/lieux/une-ville-au-cur-du-bocage-vendeen/\" class=\"LinkIn\">
                                   <span>Une ville au coeur du bocage vendéen</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu basilique_saint_louismarie_grignion_de_montfort\">
                               <a href=\"/francais/lieux/basilique-saint-louis-marie-grignion-de-montfort/\" class=\"LinkIn\">
                                   <span>Basilique saint Louis-Marie Grignion de Montfort</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu la_chapelle_de_la_sagesse\">
                               <a href=\"/francais/lieux/la-chapelle-de-la-sagesse/\" class=\"LinkIn\">
                                   <span>La Chapelle de la sagesse</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu maison_mere_des_filles_de_la_sagesse\">
                               <a href=\"/francais/lieux/maison-mere-des-filles-de-la-sagesse/\" class=\"LinkIn\">
                                   <span>Maison mere des filles de la sagesse</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu maison_mere_des_missionnaires_monfortains\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/missionaires-monfortains-le-saint-esprit/\">
                                   <span>Missionnaires Montfortains, le Saint Esprit </span>
                               </a>
                           </li>
                           <li class=\"defaultmenu maison_longue\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/maison-longue/\">
                                   <span>Maison Longue</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu point_eiffel\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/pont-eiffel/\">
                                   <span>Pont Eiffel</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu ouvrages_hydrauliques\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/ouvrages-hydrauliques/\">
                                   <span>Ouvrages Hydrauliques</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu maison_de_la_citadelle\">
                               <a class=\"LinkIn\" href=\"/francais/leix/maison-de-la-citadelle/\">
                                   <span>Maison de la citadelle</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu chapelle_des_penitents\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/chapelle-des-penitients/\">
                                   <span>Chapelle des penitents</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu maison_des_tisserands\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/maison-des-tisserands/\">
                                   <span>Maison des Tisserands</span>
                               </a>
                           </li>
                           <li class=\"defaultmenu chapelle_sainteanne\">
                               <a class=\"LinkIn\" href=\"/francais/lieux/chapelle_sainteanne/\">
                                   <span>Chapelle Sainteanne</span>
                               </a>
                           </li>
                           
                       </ul>
                       
                    </nav>
       </div>
       <div id=\"wrapper\">
           <div class=\"inner container\" id=\"wrapperInner\">
               <section id=\"contents\">
                   <div class=\"inner\" id=\"contentInner\">
                       <article id=\"article\">
                           <div id=\"text\">
                              ";
        // line 148
        echo "                           </div>
                           <div id=\"view_more\">
                           </div>
                           <div class=\"author\"/>
                       </article>
                   </div>
                  <span class=\"claer\"/>
                  </section>
               <aside id=\"rightbar\">
                    <div class=\"inner\">
                        <div class=\"box box-text img_colright\">
                            <div class=\"box-titre\">
                            </div>
                            <div class=\"box-container\">
                                <p>
                                    <img style=\"width: 430px; height: 611px;\" alt=\"img_colright\" src=\"/images/charte/img_colright__074842300_1437_25072013.jpg\"/>
                                </p>
                            </div>
                            <div class=\"box-footer\">
                            </div>
                        </div>
                    </div>
               <span class=\"clear\"/>
           </aside>
               <span class=\"clear\"/>
        </div>
        <footer id=\"footer\">
            <div class=\"container inner\" id=\"footerInner\">
                <div class=\"nested\">
                </div>
                <div class=\"box box-test partenaires_footer\">
                    <div class=\"box-titre\">
                        Projet Financer par
                    </div>
                    <div class=\"box-container\">
                    </div>
                    <div class=\"box-footer\"/>
                </div>
                    
                </div>
                <span class=\"clear\">
            </div>
        </footer>
        <div id=\"overDiv\" style=\"visibility: hidden; position: absolute; z-index: 1000; \"/>
        <div id=\"overlay\" style=\"display:  none;\"/>
        <div id=\"lightbox\" style=\"display: none;\">
            <div id=\"outerImageContainer\" style=\"width: 250px; height: 250px;\">
                <div id=\"imageContainer\">
                    <img id=\"lightboxImage\"/>
                <div id=\"hoverNav\">
                    <a title=\"<-\" id=\"prevLink\" href=\"javascript://\"/>
                    <a title=\"->\" id=\"nextLink\" href=\"javascript://\"/>
                </div>
                <div id=\"loading\">
                    <a id=\"loadingLink\" href=\"javascript://\">
                    </a>
                </div>
             </div>
        </div>
                    
              
                   
                            
                             
                       
                       
    </body>
    
</html>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/structure.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ocplatform/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"/>
        ";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 10,  259 => 9,  256 => 8,  253 => 7,  247 => 5,  174 => 148,  37 => 12,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
