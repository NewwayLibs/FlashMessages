<?php namespace App\Libraries\FlashMessages;

use Illuminate\Support\MessageBag;
use Illuminate\Session\SessionManager;

class FlashMessages extends MessageBag
{
    protected $session_key = 'flash_messages';

    protected $session;

    public function __construct(SessionManager $session, $messages = array())
    {
	    $this->session = $session;

        if ($session->has($this->session_key))
        {
            $messages = array_merge_recursive(
                $session->get($this->session_key),
                $messages
            );
        }

        parent::__construct($messages);
    }

    public function flash()
    {
        $this->session->flash($this->session_key, $this->messages);

        return $this;
    }

	public function count($key = NULL)
    {
		if (array_key_exists($key, $this->messages))
        {
            return count($this->messages[$key]);
        }

		return count($this->messages);
	}

    public function add($key, $message) {
        return parent::add($key, $message)->flash();
    }

    public function getMessageBag()
    {
        return $this;
    }
}