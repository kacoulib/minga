<?php
/**
*
* Plugin Name: Lightbox
* Plugin URI: URI du plugin (si vous le mettez a disposition sur un site)
* Description: Source pour tutoriel
* Version: 1.0
* Author: SANCHEZ Benjamin
* Author URI: http://www.blogduwebdesign.com/
* License: WTFPL (http://www.wtfpl.net/about/)
*/

// Le blog précédent constitue toutes les informations nécessaires
// à propos de votre plugin. Il est important de le remplire
// sans quoi l'administration Wordpress ne pourra pas les reprendre.


// Nous vérifions ici l'existence de certaines constantes. l'idéal est de copier/coller
// cette partie sur tout les plugins
if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

////////////////////////// Le plugin débute réelement ici ///////////////////////////

// Notre plugin est fait pour se lancer sur le site mais pas sur l'administration,
// nous ne l'executons donc que si nous ne sommes pas sur l'administration.
// Comme vous pouvez le voir, le ! se lit comme un NOT.
if (!is_admin()) { // IF NOT is_admin, donc si nous ne sommes pas sur l'admin.

  // wp_enqueue_(script/style) permet d'ajouter des fichiers JS et CSS de manière propre
  // à wordpress. (http://codex.wordpress.org/Function_Reference/wp_enqueue_script)
  //
  // Nous avons besoin de jQuery, et bien sur de notre fichier JS ainsi que de notre
  // fichier CSS.
	wp_enqueue_script('jquery');
	wp_enqueue_script('lightbox', WP_PLUGIN_URL.'/lightbox_exemple/lightbox.js', array('jquery'), '1.0');
	wp_enqueue_style('lightbox', WP_PLUGIN_URL.'/lightbox_exemple/lightbox.css', false, '1.0');

  // Enfin, nous demmandons à la fonction nommé "insert_js_in_head" de se lancer 
  // dans le head de notre page.
	add_action('wp_head', 'insert_js_in_head');
}


// Notre fonction "insert_js_in_head". Tout ce qu'elle fait est une balise script qui initialise
// notre lightbox.
function insert_js_in_head() {
?>
<script type="text/javascript">
	jQuery(document).ready(function($){
    lightbox("img");
	});
</script>
<?php
}

?>
