<?php

namespace Drupal\agw_module\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AgwService {
	public $request = null;

	public function __construct(Request $request) {
		$this->request = $request;
	}

	public function api() {
		$response = [
			'ip' => $this->request->getClientIp(),
			'path' => $this->request->getPathInfo(),
			'host' => $this->request->getHttpHost(),
			'val' => $this->request->get('val')
		];
		return new JsonResponse($response);
	}
}