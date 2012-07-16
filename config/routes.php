<?php
/* SVN FILE: $Id: routes.php 296 2007-07-21 14:08:12Z gwoo $ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright (c)	2006, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package			cake
 * @subpackage		cake.app.config
 * @since			CakePHP v 0.2.9
 * @version			$Revision: 296 $
 * @modifiedby		$LastChangedBy: gwoo $
 * @lastmodified	$Date: 2007-07-21 09:08:12 -0500 (Sat, 21 Jul 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.thtml)...
 */
	Router::connect('/', array('controller' => 'pastes', 'action' => 'add'));
	Router::connect('/add/:nick/*', array('controller' => 'pastes', 'action' => 'add', 'nick'=> null));
	Router::connect('/edit/*', array('controller' => 'pastes', 'action' => 'edit'));
	Router::connect('/view/*', array('controller' => 'pastes', 'action' => 'view'));
	Router::connect('/saved/*', array('controller' => 'pastes', 'action' => 'saved', 'page'=>'1'));
	Router::connect('/list/*', array('controller' => 'pastes', 'action' => 'index', 'page'=>'1'));
	Router::connect('/nick/:nick/*', array('controller' => 'pastes', 'action' => 'nick', 'nick'=> null, 'page'=>'1'));
	Router::connect('/search/*', array('controller' => 'pastes', 'action' => 'search', 'page'=>'1'));
	Router::connect('/versions/*', array('controller' => 'versions', 'action' => 'saved'));
	Router::connect('/tags/popular', array('controller' => 'tags', 'action' => 'popular'));
	Router::connect('/tags/*', array('controller' => 'tags', 'action' => 'show'));

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::connect('/:controller/:action/:nick/*', array('controller' => 'pastes', 'action' => 'index', 'nick'=> null));
	
/**
 * Then we connect url '/test' to our test controller. This is helpfull in
 * developement.
 */
	Router::connect('/tests', array('controller' => 'tests', 'action' => 'index'));
?>