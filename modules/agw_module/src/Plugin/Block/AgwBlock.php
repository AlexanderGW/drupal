<?php

namespace Drupal\agw_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "agwblock",
 *   admin_label = @Translation("AGW block"),
 * )
 */
class AgwBlock extends BlockBase {
	public function build() {
		return [
			'#theme' => 'agw_module_agwblock',
			'#attached' => array(
				'library' => array(
					'agw_module/agw_module',
				),
			),
		];
	}
}