<?php

namespace Sabre\Xml\Atom\Element;

/**
 * The feed is the top-level element for all atom feeds.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-4.1.1 
 * @copyright Copyright (C) fruux GmbH.
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Feed {

    public $author = [];
    public $category = [];
    public $contributer = [];
    public $generator;
    public $icon;
    public $id;
    public $link = [];
    public $logo;
    public $rights;
    public $subtitle;
    public $title;
    public $updated;
    public $extensionElement = [];
    public $entry = [];

}
