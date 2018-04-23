<?php
/**
 * English language strings for Dashboards
 *
 * @package modx
 * @subpackage lexicon
 * @language en
 */
$_lang['dashboard'] = 'Resumen';
$_lang['dashboard_add'] = 'Añadir Tablero';
$_lang['dashboard_create'] = 'Crear Tablero';
$_lang['dashboard_desc_name'] = 'Nombre del Tablero.';
$_lang['dashboard_desc_description'] = 'Breve descripción del Tablero.';
$_lang['dashboard_desc_hide_trees'] = 'Marcando esta casilla se ocultarán los árboles de la izquierda cuando el tablero se despliegue en la página de bienvenida.';
$_lang['dashboard_hide_trees'] = 'Ocultar árboles del la izquierda';
$_lang['dashboard_duplicate'] = 'Duplicar Tablero';
$_lang['dashboard_remove'] = 'Eliminar Tablero';
$_lang['dashboard_remove_confirm'] = '¿Estás seguro de querer eliminar este Tablero?';
$_lang['dashboard_remove_multiple'] = 'Eliminar Tableros';
$_lang['dashboard_remove_multiple_confirm'] = '¿Estás seguro que quieres eliminar los Tableros seleccionados?';
$_lang['dashboard_update'] = 'Actualizar Tablero';
$_lang['dashboard_err_ae_name'] = '¡Ya existe un tablero con el nombre "[[+name]]"! Por favor, prueba otro nombre.';
$_lang['dashboard_err_duplicate'] = 'Ha ocurrido un error mientras se trataba de duplicar el tablero.';
$_lang['dashboard_err_nf'] = 'Tablero no encontrado.';
$_lang['dashboard_err_ns'] = 'Tablero no especificado.';
$_lang['dashboard_err_ns_name'] = 'Por favor, especifica un nombre para el widget.';
$_lang['dashboard_err_remove'] = 'Ha ocurrido un error mientras se trataba de eliminar el Tablero.';
$_lang['dashboard_err_remove_default'] = '¡No puedes eliminar el tablero predeterminado!';
$_lang['dashboard_err_save'] = 'Ha ocurrido un error mientras se trataba de guardar el Tablero.';
$_lang['dashboard_usergroup_add'] = 'Asignar Tablero a un Grupo de Usuarios';
$_lang['dashboard_usergroup_remove'] = 'Eliminar Tablero del Grupo de Usuarios';
$_lang['dashboard_usergroup_remove_confirm'] = '¿Estás seguro de que quieres restaurar este Grupo de Usuarios para que utilicen el Tablero por defecto?';
$_lang['dashboard_usergroups.intro_msg'] = 'Aquí una lista completa de todos los Grupos de Usuarios utilizando este Tablero.';
$_lang['dashboard_widget_err_placed'] = '¡Este widget ya está asignado a este Tablero!';
$_lang['dashboard_widgets.intro_msg'] = 'Aquí puedes agregar, gestionar, y eliminar widgets de este Tablero. También puedes arrastrar y soltar las filas en la cuadrícula para reordenarlos.';
$_lang['dashboards'] = 'Tableros';
$_lang['dashboards.intro_msg'] = 'Aquí puedes gestionar todos los Tableros para este gestor de MODX.';
$_lang['rank'] = 'Posición';
$_lang['user_group_filter'] = 'Por Grupo de Usuarios';
$_lang['widget'] = 'Widget';
$_lang['widget_content'] = 'Contenido del Widget';
$_lang['widget_create'] = 'Crear Nuevo Widget';
$_lang['widget_err_ae_name'] = '¡Ya existe un widget con el nombre "[[+name]]"! Por favor, prueba otro nombre.';
$_lang['widget_err_nf'] = '¡Widget no encontrado!';
$_lang['widget_err_ns'] = '¡Widget no especificado!';
$_lang['widget_err_ns_name'] = 'Por favor, especifica un nombre para el widget.';
$_lang['widget_err_remove'] = 'Ha ocurrido un error mientras se trataba de eliminar el widget.';
$_lang['widget_err_save'] = 'Ha ocurrido un error mientras se trataba de guardar el widget.';
$_lang['widget_file'] = 'Archivo';
$_lang['widget_dashboards.intro_msg'] = 'Debajo se encuentra una lista completa con todos los Tableros en los que se utiliza este Widget.';
$_lang['widget_dashboard_remove'] = 'Eliminar widget del tablero';
$_lang['widget_description_desc'] = 'Una descripción, o clave de entrada del archivo de idioma, del widget y de lo que hace.';
$_lang['widget_html'] = 'HTML';
$_lang['widget_lexicon_desc'] = 'El tópico del archivo de idioma a cargar con este Widget. Útil para permitir la traducción del nombre y la descripción, así como de los textos del widget.';
$_lang['widget_name_desc'] = 'El nombre, o clave de entrada del archivo de idioma, del Widget.';
$_lang['widget_new'] = 'Nuevo Widget';
$_lang['widget_remove'] = 'Eliminar Widget';
$_lang['widgeontains the installer for MODX. Just imagine what might happen if an evil person finds this folder and runs the installer! They probably won\'t get too far, because they\'ll need to enter some user information for the database, but it\'s still best to remove this folder from your server. It is located at: [[+path]]';
$_lang['configcheck_lang_difference'] = 'Incorrect number of entries in language file';
$_lang['configcheck_lang_difference_msg'] = 'The currently selected language has a different number of entries than the default language. While not necessarily a problem, this may mean the language file needs to be updated.';
$_lang['configcheck_notok'] = 'One or more configuration details didn\'t check out OK: ';
$_lang['configcheck_ok'] = 'Check passed OK - no warnings to report.';
$_lang['configcheck_phpversion'] = 'PHP version is outdated';
$_lang['configcheck_phpversion_msg'] = 'Your PHP version [[+phpversion]] is no longer maintained by the PHP developers, which means no security updates are available. It is also likely that MODX or an extra package now or in the near future will no longer support this version. Please update your environment at least to PHP [[+phprequired]] as soon as possible to secure your site.';
$_lang['configcheck_register_globals'] = 'register_globals is set to ON in your php.ini configuration file';
$_lang['configcheck_register_globals_msg'] = 'This configuration makes your site much more susceptible to Cross Site Scripting (XSS) attacks. You should speak to your host about what you can do to disable this setting.';
$_lang['configcheck_title'] = 'Configuration check';
$_lang['configcheck_unauthorizedpage_unavailable'] = 'Your site\'s Unauthorized page is not published or does not exist.';
$_lang['configcheck_unauthorizedpage_unavailable_msg'] = 'This means that your Unauthorized page is not accessible to normal web surfers or does not exist. This can lead to a recursive looping condition and many errors in your site logs. Make sure there are no webuser groups assigned to the page.';
$_lang['configcheck_unauthorizedpage_unpublished'] = 'The Unauthorized page defined in the site configuration settings is not published.';
$_lang['configcheck_unauthorizedpage_unpublished_msg'] = 'This means that your Unauthorized page is inaccessible to the general public. Publish the page or make sure it is assigned to an existing document in your site tree in the System &gt; System Settings menu.';
$_lang['configcheck_warning'] = 'Configuration warning:';
$_lang['configcheck_what'] = 'What does this mean?';
ectados.';