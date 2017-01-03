<?php declare (strict_types=1);

namespace Sabre\Xml\Atom\Element;

/**
 * The category associated with the feed or element.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-4.2.2 
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Category {

    /**
     * A term associated with the category. Similar to a tag.
     *
     * @var string
     */
    public $term;

    /**
     * Categorization scheme, as an IRI.
     *
     * @var string
     */
    public $scheme;

    /**
     * A human-readable label for the category.
     *
     * @var string
     */
    public $label;

}
