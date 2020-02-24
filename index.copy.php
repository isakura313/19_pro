<?php


$request = $_SERVER['REQUEST_URI'];

switch($request){
	case'/':
		require __DIR__.'/19_pro/index.php';
		break;
		
	case'/admin':
		require __DIR__.'/19_pro/admin/admin.php';
		break;
	case'/admin/parag':
		require __DIR__.'/19_pro/admin/admin.parag.php';
		break;

	case'/admin/cards':
		require __DIR__.'/19_pro/admin/admin.cards.php';
		break;

	case'/admin/anchors':
		require __DIR__.'/19_pro/admin/admin.anchors.php';
		break;

	case'/reg':
		require __DIR__.'/19_pro/admin/auth/admin.reg.php';
		break;

	case'/auth':
		require __DIR__.'/19_pro/admin/auth/admin.auth.php';
		break;

	case'/auth_procces':
		require __DIR__.'/19_pro/admin/auth/form_reg.php';
		break;

	case'/reg_procces':
		require __DIR__.'/19_pro/admin/auth/reg_auth.php';
		break;


	default:
		http_response_code(404);
        require __DIR__ . '/19_pro/404.php';
        break;
}