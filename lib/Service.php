<?php

namespace Sabre\Xml\Atom;

/**
 * The Atom Service object gives you quick access to the writer and reader.
 *
 * See \Sabre\Xml\Service for all the utility methods.
 *
 * @copyright Copyright (C) fruux GmbH.
 * @author Evert Pot (http://evertpot.com/)
 * @license http://sabre.io/license/
 */
class Service extends \Sabre\Xml\Service {

    const ATOM_NS = 'http://www.w3.org/2005/Atom';

    /**
     * Constructor
     */
    function __construct() {

        $atom = '{http://www.w3.org/2005/Atom}';
        $this->mapValueObject($atom . 'feed', Element\Feed::class);

    }

}
