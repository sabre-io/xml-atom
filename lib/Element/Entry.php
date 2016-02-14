<?php

namespace Sabre\Xml\Atom\Element;

/**
 * The entry is an individual item in a feed, such as a single blog article.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-4.1.2
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Entry {

    /**
     * The title for the entry
     *
     * @var string
     */
    public $title;

    /**
     * Links associated with the feed
     *
     * @var Link
     */
    public $link = [];

    /**
     * A unique identifier for the feed.
     *
     * This should never change, and should be a URI.
     *
     * @var string
     */
    public $id;

    /**
     * The last time the entry was updated.
     *
     * @var string
     */
    public $updated;

    /**
     * Contains a summarized version of the entry.
     *
     * @var string
     */
    public $summary;

    /**
     * Authors for the entry.
     *
     * @var Person[]
     */
    public $author = [];

    /**
     * List of categories for the entry.
     *
     * @var Category[]
     */
    public $category = [];

    /**
     * Content of the entry.
     *
     * @var string
     */
    public $content;

    /**
     * Anyone who contributed to the entry.
     *
     * @var Person[]
     */
    public $contributer = [];

    /**
     * When the entry was first published.
     *
     * @var string
     */
    public $published;

    /**
     * Copyright and such, as a string.
     *
     * @var string
     */
    public $rights;

    /**
     * If the entry was copied from another feed, the feed information shoudl
     * be contained in the source.
     *
     * @var Source
     */
    public $source;



}
