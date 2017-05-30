<?php

namespace Drupal\agw_module\Controller;

use Drupal\agw_module\Service;
use Symfony\Component\HttpFoundation\Request;

class AgwController {
	public function api(Request $request) {
		$service = new Service\AgwService($request);
		return $service->api();
	}
}