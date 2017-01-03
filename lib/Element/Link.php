<?php declare (strict_types=1);

namespace Sabre\Xml\Atom\Element;

/**
 * The atom:link element links a feed or an entry to another resource.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-4.2.7
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Link {

    /**
     * Target of the link
     *
     * @var string
     */
    public $href;

    /**
     * Language of the target resource.
     *
     * @var string
     */
    public $hreflang;

    /**
     * Relationship type (rel attribute).
     *
     * @var string
     */
    public $rel;

    /**
     * Media type.
     *
     * @var string
     */
    public $type;

    /**
     * Title of the link.
     *
     * @var string
     */
    public $title;

    /**
     * Filesize of the target resource, in bytes.
     *
     * @var int
     */
    public $length;

}
