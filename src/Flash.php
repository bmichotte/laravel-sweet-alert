<?php

namespace Infinety\SweetAlert;


class Flash {

    /**
     * Create the flash message.
     *
     * @param        $title
     * @param        $message
     * @param        $type
     * @param string $key
     * @param array  $options
     */
    public function create($title, $message, $type, $key = 'flash_message', $options = [])
    {
        session()->flash($key, array_merge([
            'title'     => $title,
            'message'   => $message,
            'type'      => $type
        ], $options);
    }

    /**
     * @param $title
     * @param $message
     * @param array  $options
     */
    public function info($title, $message, $options = [])
    {
        return $this->create($title, $message, 'info', 'flash_message', $options);
    }

    /**
     * @param $title
     * @param $message
     * @param array  $options
     */
    public function success($title, $message, $options = [])
    {
        return $this->create($title, $message, 'success', 'flash_message', $options);
    }

    /**
     * @param $title
     * @param $message
     * @param array  $options
     */
    public function error($title, $message, $options = [])
    {
        return $this->create($title, $message, 'error', 'flash_message', $options);
    }

    /**
     * @param        $title
     * @param        $message
     * @param string $type
     * @param array  $options
     */
    public function overlay($title, $message, $type = 'success', $options = [])
    {
        return $this->create($title, $message, $type, 'sweet_alert_message_overlay', $options);
    }
} 