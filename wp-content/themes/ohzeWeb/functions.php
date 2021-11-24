<?php
//1. Definimos uma versao (a usar mais abaixo)
if ( !defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '0.0.1' );
}

/*2.
Executamos uma função que, aquando da utilização do tema, estabelece que o mesmo permite 
a utilização de tags de título e de thumbnails, registando, no final, um Menu Principal 
(a usar mais tarde)
*/
function ohzeWeb_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
    'main-menu' => esc_html__('Main Menu', 'ohzeWeb')
    ));
/* Se quiser criar um menu adicional no footer.
    register_nav_menus(array(
    'footer-menu' => esc_html__('Footer Menu', 'ohzeWeb')
    ));
*/
}

/*2.1
Para executar as funcões: 'after_setup_theme' e 'ohzeWeb_setup'
"add_action": Adds a callback function to an action hook.
"after_setup_theme":funcao wordpress  - Action Hook: Fires after the theme is loaded.
'ohzeWeb_setup': Funcao definida acima
*/
add_action( 'after_setup_theme', 'ohzeWeb_setup' ); 



/*3.
Establecemos a utilização de um ficheiro de CSS e outro de JS 
(temos apenas um de cada, neste tema)
A versão é utilizada aqui. Sempre que atualizamos algo em produção devemos alterar a versão, 
para que, sendo utilizada aqui, impeça utilizadores de estarem a ver uma versão mais antiga 
devido a cache do browse
*/
function ohzeWeb_scripts(){
    wp_enqueue_style( 'ohzeWeb-style', get_template_directory_uri(). '/css/style.css', array(), _S_VERSION );
    //wp_enqueue_style: Function: Enqueue a CSS stylesheet.
    wp_enqueue_script( 'ohzeWeb-script', get_template_directory_uri(). '/js/script.js', array(), _S_VERSION, true );
    //wp_enqueue_scripts: Action Hook: Fires when scripts and styles are enqueued.
}

/*3.1
Para executar as funcões: 'wp_enqueue_scripts' e 'ohzeWeb_scripts'
"add_action": Adds a callback function to an action hook.
"wp_enqueue_scripts":funcao wordpress  - Action Hook: Fires when scripts and styles are enqueued.
'ohzeWeb_scripts': Funcao definida acima
*/
add_action( 'wp_enqueue_scripts', 'ohzeWeb_scripts' );


/*4.
Retiramos várias ferramentas do nosso código que, para o nosso website, são 
desnecessárias.
*/
remove_action('wp_head', 'wp_generator'); //“Website gerado por Wordpress” no código
remove_action('wp_head', 'feed_links_extra', 3); //
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0); //Meta-tags de links para posts seguintes e anteriores
remove_action('wp_head', 'start_post_rel_link', 10, 0); //Meta-tags de links para posts seguintes e anteriores
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); //Meta-tags de links para posts seguintes e anteriores
remove_action('wp_head', 'print_emoji_detection_script', 7); //Estilos para emojis
remove_action('wp_head', 'wp_oembed_add_discovery_links');//○ Ficheiros de JS e CSS desnecessários
remove_action('wp_head', 'wp_oembed_add_host_js');//○ Ficheiros de JS e CSS desnecessários
remove_action('wp_print_styles', 'print_emoji_styles'); //Estilos para emojis
remove_action('rest_api_init', 'wp_oembed_register_route');
add_filter('show_admin_bar', '__return_false'); // Retirámos a barra de administração quando se está a visualizar o site (até para administradores)


/*5.
Removemos o menu de comentários, não vai haver comentários no nosso site, não vale a pena 
estar a confundir quem edita o conteúdo.
*/
function ohzeWeb_remove_menus(){
    remove_menu_page( 'edit-comments.php' );
    /* 
    outros menus que podem ser removidos no final de forma a que nem o super admin tenha acesso a eles no BO:
    remove_menu_page( 'tools.php' );
    remove_menu_page( 'users.php' );
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'edit.php?post_type=acf-field-group' ); //Para esconder o menu Advanced Custom Field
    */
   }

/*5.1
Para executar as funcões: 'admin_menu' e 'ohzeWeb_remove_menus'
"add_action": Adds a callback function to an action hook.
"admin_menu":funcao wordpress  - Action Hook: Fires before the administration menu loads in the admin.
'ohzeWeb_remove_menus': Funcao definida acima
*/
add_action( 'admin_menu', 'ohzeWeb_remove_menus' );


/*6
Para executar as funcões abaixo: 'init' e 'ohzeWeb_change_post_object'
"add_action": Adds a callback function to an action hook.
"init":funcao wordpress - Action Hook: Fires after WordPress has finished loading but before any headers are sent.
'ohzeWeb_change_post_object': Funcao definida acima
*/
add_action('init', 'ohzeWeb_change_post_object');

/*6.1
● Alteramos o nosso tipo principal de post ● Vai deixar de se chamar “post” e passar a ser “work”
● A maioria das linhas são as menções ao termo “post” corrigidas para o novo nome “work”
● Uma linha altera o ícone presente no menu da administração. 
● Uma linha altera o “slug”, ou seja o URL utilizado em posts deste tipo
● Uma linha remove as tags, neste site apenas utilizaremos categorias
*/
function ohzeWeb_change_post_object(){
    $get_post_type = get_post_type_object('post'); //seleccionamos o objecto do tipo post
    $labels = $get_post_type->labels; // seleccionamos o label do tipo post
    $labels->name = 'Car'; //definimos o label como Carro
    $labels->singular_name = 'Car'; //definimos o item como Carro
    $labels->add_new = 'add Car'; // Add new post passa a ser Adiccionar Carro
    $labels->add_new_item = 'add Car'; // Add new item passa a ser Adiccionar Carro
    $labels->edit_item = 'edit Car';
    $labels->new_item = 'new Car';
    $labels->view_item = 'view Car';
    $labels->search_items = 'Search Car';
    $labels->not_found = 'no Car found';
    $labels->not_found_in_trash = 'no Cars found in trash';
    $labels->all_items = 'all Cars';
    $labels->menu_name = 'Cars';
    $labels->name_admin_bar = 'Cars';
    $get_post_type->menu_icon = 'dashicons-portfolio';
    $get_post_type->rewrite = array('slug' => 'car'); //url passa a ser work/
    unregister_taxonomy_for_object_type( 'post_tag', 'post' ); //para "eliminar"" uma taxonomia (categorias e tags). Nao quero que os meus posts tenham tags.
   }
   

/*7
Para executar as funcões abaixo: 'use_block_editor_for_post_type' e 'ohzeWeb_change_post_object'
"add_filter": Adds a callback function to an action hook.
"use_block_editor_for_post_type":funcao wordpress -Return whether a post type is compatible with the block editor.
'ohzeWeb_disable_gutenberg': Funcao definida abaixo
*/

add_filter('use_block_editor_for_post_type', 'ohzeWeb_disable_gutenberg', 10, 2); 

/*7.1
Removemos o editor “Gutenberg” visto não querermos que os gestores de conteúdo possam 
alterar assim tanto o nosso layout. O editor de texto “clássico” continuará no seu lugar com o 
mesmo conteúdo, mas sem a formatação dos blocos de Wordpress.
*/
function ohzeWeb_disable_gutenberg($current_status, $post_type){
    return false;
}

/*8
Vamos incluir o “functions-acf.php”, para este seja chamado pelo primeiro
*/
require get_template_directory() . '/functions-acf.php';