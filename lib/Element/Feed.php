<?php

declare(strict_types=1);

namespace Sabre\Xml\Atom\Element;

/**
 * The feed is the top-level element for all atom feeds.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-4.1.1
 *
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Feed
{
    /**
     * The main title for the feed.
     *
     * @var string
     */
    public $title;

    /**
     * Secondary title for the feed.
     *
     * @var string
     */
    public $subtitle;

    /**
     * Links associated with the feed.
     *
     * @var Link
     */
    public $link = [];

    /**
     * The last time the feed was updated.
     *
     * @var string
     */
    public $updated;

    /**
     * The date the feed was last published.
     *
     * @var string
     */
    public $published;

    /**
     * A unique identifier for the feed.
     *
     * This should never change, and should be a URI.
     *
     * @var string
     */
    public $id;

    /**
     * Copyright and such, as a string.
     *
     * @var string
     */
    public $rights;

    /**
     * The software that generated the feed.
     *
     * @var string
     */
    public $generator;

    /**
     * Authors for the feed.
     *
     * @var Person[]
     */
    public $author = [];

    /**
     * List of categories for the feed.
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
     * Url to an icon belonging to the feed.
     *
     * @var string
     */
    public $icon;

    /**
     * Uri to a logo for the feed.
     *
     * @var string
     */
    public $logo;

    /**
     * The list of feed entries.
     *
     * @var Entry[]
     */
    public $entry = [];
}
