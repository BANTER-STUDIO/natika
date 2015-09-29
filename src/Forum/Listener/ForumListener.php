<?php
/**
 * Part of natika project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Forum\Listener;

use Windwalker\Core\Authentication\User;
use Windwalker\Event\Event;

/**
 * The ForumListener class.
 *
 * @since  {DEPLOY_VERSION}
 */
class ForumListener
{
	/**
	 * onViewBeforeRender
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onViewBeforeRender(Event $event)
	{
		$event['data']->user = User::get();
	}
}
