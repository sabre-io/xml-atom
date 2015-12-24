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

    /**
     * Authors for the feed.
     *
     * @var Person[]
     */
    public $author = [];

    /**
     * List of categories for the feed
     *
     * @var Category[]
     */
    public $category = [];

    /**
     * Anyone who contributed to the feed.
     *
     * @var Person[] 
     */
    public $contributer = [];

    /**
     * The software that generated the feed.
     *
     * @var string
     */
    public $generator;

    /**
     * Url to an icon belonging to the feed.
     *
     * @var string
     */
    public $icon;

    /**
     * A unique identifier for the feed.
     *
     * This should never change, and should be a URI.
     *
     * @var string
     */
    public $id;

    /**
     * Links associated with the feed
     *
     * @var Link
     */
    public $link = [];

    /**
     * Uri to a logo for the feed.
     *
     * @var string
     */
    public $logo;

    /**
     * Copyright and such, as a string.
     *
     * @var string
     */
    public $rights;

    /**
     * Secondary title for the feed.
     *
     * @var string
     */
    public $subtitle;

    /**
     * The main title for the feed.
     *
     * @var string
     */
    public $title;

    /**
     * The last time the feed was updated.
     *
     * @var string
     */
    public $updated;

    /**
     * The list of feed entries.
     *
     * @var Entry[]
     */
    public $entry = [];

}
