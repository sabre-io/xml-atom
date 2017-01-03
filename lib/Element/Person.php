<?php declare (strict_types=1);

namespace Sabre\Xml\Atom\Element;

/**
 * A Person construct is an element that describes a person, corporation, or
 * similar entity.
 *
 * This is used by the atom:author and atom:contributer elements.
 *
 * @see https://tools.ietf.org/html/rfc4287#section-3.2
 * @copyright Copyright (C) fruux GmbH (https://fruux.com/)
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Person {

    /**
     * Person's full name.
     *
     * @var string
     */
    public $name;

    /**
     * URI for the person, such as a personal website.
     *
     * @var string
     */
    public $uri;

    /**
     * An email address identifying the person.
     *
     * @var string
     */
    public $email;

}
