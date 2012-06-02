<?php
/*---------------------------------------------------------------+
| eXtreme-Fusion - Content Management System - version 5         |
+----------------------------------------------------------------+
| Copyright (c) 2005-2012 eXtreme-Fusion Crew                	 |
| http://extreme-fusion.org/                               		 |
+----------------------------------------------------------------+
| This product is licensed under the BSD License.				 |
| http://extreme-fusion.org/ef5/license/						 |
+---------------------------------------------------------------*/
try
{
	require_once '../../config.php';
	require DIR_SITE.'bootstrap.php';
	require_once DIR_SYSTEM.'admincore.php';
	require DIR_CLASS.'modules.php';
	
	$_locale->load('modules');

    if ( ! $_user->hasPermission('admin.modules'))
    {
        throw new userException(__('Access denied'));
    }

	$_tpl = new Iframe;
	
	$_mod = new Modules($_pdo, $_sett, $_user, New Tag($_system, $_pdo), $_locale);

	// Wyświetlenie komunikatów
	if ($_request->get(array('status', 'act'))->show())
	{
		// Wyświetli komunikat
		$_tpl->getMessage($_request->get('status')->show(), $_request->get('act')->show(), 
			array(
				'install' => array(
					__('Modules have been installed.'), __('Error! Modules have not been installed.')
				),
				'uninstall' => array(
					__('Modules have been uninstalled.'), __('Error! Modules have not been uninstalled.')
				),
			)
		);
    }

	$mod_info = array();
	$new_table = array();
	$new_row = array();
	$drop_table = array();
	$admin_page = array();
	$menu_link = array();

	// Usuwanie lub instalacja
	if ($_request->post('save')->show())
	{
		$installed = $_mod->getInstalled();

		if ($_request->post('mod')->show())
		{
			// Pobierz listę wszystkich modułów z katalogu modules
			$file_list = $_mod->getItems();
			
			foreach($file_list as $val)
			{
				
				if (in_array($val[0], $_request->post('mod')->show()) && !in_array($val[0], $installed))
				{
					$_mod->install($val[0]);
				}

				if ( !in_array($val[0], $_request->post('mod')->show()) && in_array($val[0], $installed))
				{
					$_mod->uninstall($val[0]);
				}
			}

			if ($_request->post('update')->show())
			{
				foreach($_request->post('update')->show() as $val)
				{
					$_mod->update($val);
				}
			}
			
			$_log->insertSuccess('install', __('Modules have been installed.'));
			$_request->redirect(FILE_PATH, array('act' => 'install', 'status' => 'ok'));
			$_system->clearCache('system', array('__autoloadModulesList'));
		}
		else
		{
			foreach($installed as $val)
			{
				$_mod->uninstall($val);
			}
			
			$_log->insertSuccess('uninstall', __('Modules have been uninstalled.'));
			$_request->redirect(FILE_PATH, array('act' => 'uninstall', 'status' => 'ok'));
			$_system->clearCache('system', array('__autoloadModulesList'));
		}
	}

	// Aktualizacja listy zainstalowanych modułów
	$installed = $_mod->getInstalled();

	if (count($mod_list = $_mod->getItems()))
	{
		$mod = array();
		$i = 0;
		foreach($mod_list as $val)
		{
			if (include DIR_MODULES.$val[0].DS.'config.php')
			{
				$mod[] = array(
					'row_color'		=> $i % 2 == 0 ? 'tbl1' : 'tbl2',
					'id'			=> $i,
					'value'     	=> $val[0],
					'installed'  	=> in_array($val[0], $installed) ? TRUE : FALSE,
					'label'      	=> $val[1],
					'is_to_update' 	=> $_mod->isToUpdate($mod_info['dir']) ? TRUE : FALSE,
					'desc'       	=> $mod_info['description'],
					'version'   	=> $_mod->getItemVersion($mod_info['dir'], $mod_info['version']),
					'webURL'     	=> $mod_info['support'],
					'author'     	=> $mod_info['developer']
				);
				$i++;
			}
		}

		$_tpl->assign('mod', $mod);
	}

	$_tpl->template('modules');

}
catch(optException $exception)
{
    optErrorHandler($exception);
}
catch(systemException $exception)
{
    systemErrorHandler($exception);
}
catch(userException $exception)
{
    userErrorHandler($exception);
}