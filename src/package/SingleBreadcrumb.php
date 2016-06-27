<?php

namespace mjanssen\BreadcrumbsBundle\package;

class SingleBreadcrumb {

    public $name, $url, $crumb;

    public function __construct($setName, $setUrl)
    {
        $config = config('breadcrumbs');

        $uppercaseFirst = (isset($config['uppercaseFirst'])) ? $config['uppercaseFirst'] : true;

        $this->name = ($uppercaseFirst === true) ? ucfirst($setName) : lcfirst($setName);
        $this->url = $setUrl;

        $this->crumb = '<a href="'.$this->url.'">'. $this->name.'</a>';
    }
}
