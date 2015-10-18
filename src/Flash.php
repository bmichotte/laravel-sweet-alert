<?php

namespace Infinety\SweetAlert;


class Flash
{
    /**
     * Create the flash message.
     *
     * @param string $title
     * @param string $message
     * @param string $type
     * @param array  $options
     * @param string $callback
     */
    public function create($title, $message, $type, $options = [], $callback = null)
    {
        $default = [
            'title'             => $title,
            'message'           => $message,
            'type'              => $type,
            'timer'             => 2500,
            'showConfirmButton' => false
        ];

        session()->flash('flash_message', ['options' => array_merge($default, $options), 'callback' => $callback]);
    }

    /**
     * @param string $title
     * @param string $message
     * @param array  $options
     * @param string $callback
     */
    public function info($title, $message, $options = [], $callback = null)
    {
        return $this->create($title, $message, 'info', $options, $callback);
    }

    /**
     * @param string $title
     * @param string $message
     * @param array  $options
     * @param string $callback
     */
    public function success($title, $message, $options = [], $callback = null)
    {
        return $this->create($title, $message, 'success', $options, $callback);
    }

    /**
     * @param string $title
     * @param string $message
     * @param array  $options
     * @param string $callback
     */
    public function error($title, $message, $options = [], $callback = null)
    {
        return $this->create($title, $message, 'error', $options, $callback);
    }

    /**
     * @param string $title
     * @param string $message
     * @param string $type
     * @param array  $options
     * @param string $callback
     */
    public function overlay($title, $message, $type = 'success', $options = [], $callback = null)
    {
        $options = array_merge(['confirmButtonText' => 'Ok'], $options);

        return $this->create($title, $message, $type, $options, $callback);
    }
}
