<?php

namespace Sabre\Xml\Atom;

class ParseAtomTest extends \PHPUnit_Framework_TestCase {

    function testSimple() {

        $xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">

 <title>Example Feed</title>
 <link href="http://example.org/"/>
 <updated>2003-12-13T18:30:02Z</updated>
 <id>urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6</id>
 <author>
   <name>John Doe</name>
 </author>


 <entry>
   <title>Atom-Powered Robots Run Amok</title>
   <link href="http://example.org/2003/12/13/atom03"/>
   <id>urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344efa6a</id>
   <updated>2003-12-13T18:30:02Z</updated>
   <summary>Some text.</summary>
 </entry>

</feed>
XML;

        $feed = new Element\Feed();
        $feed->title = 'Example Feed';

        $link = new Element\Link();
        $link->href = 'http://example.org/';
        $feed->link[] = $link;

        $feed->updated = '2003-12-13T18:30:02Z';

        $author = new Element\Person();
        $author->name = 'John Doe';
        $feed->author[] = $author;

        $feed->id = 'urn:uuid:60a76c80-d399-11d9-b93C-0003939e0af6';
     
        $entry = new Element\Entry();
        $entry->title = 'Atom-Powered Robots Run Amok';

        $link = new Element\Link();
        $link->href = 'http://example.org/2003/12/13/atom03';
        $entry->link[] = $link;

        $entry->id = 'urn:uuid:1225c695-cfb8-4ebb-aaaa-80da344efa6a';
        $entry->updated = '2003-12-13T18:30:02Z';
        $entry->summary = 'Some text.';

        $feed->entry[] = $entry;

        $this->assertRoundTrip($xml, $feed);

    }

    function testExtensive() {

        $xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
 <title>dive into mark</title>
 <subtitle>
   A &lt;em&gt;lot&lt;/em&gt; of effort
   went into making this effortless
 </subtitle>
 <link rel="alternate" type="text/html"
  hreflang="en" href="http://example.org/"/>
 <link rel="self" type="application/atom+xml"
  href="http://example.org/feed.atom"/>
 <updated>2005-07-31T12:29:29Z</updated>
 <id>tag:example.org,2003:3</id>
 <rights>Copyright (c) 2003, Mark Pilgrim</rights>
 <generator>
   Example Toolkit
 </generator>
 <entry>
   <title>Atom draft-07 snapshot</title>
   <link rel="alternate" type="text/html"
    href="http://example.org/2005/04/02/atom"/>
   <link rel="enclosure" type="audio/mpeg" length="1337"
    href="http://example.org/audio/ph34r_my_podcast.mp3"/>
   <id>tag:example.org,2003:3.2397</id>
   <updated>2005-07-31T12:29:29Z</updated>
   <published>2003-12-13T08:29:29-04:00</published>
   <author>
     <name>Mark Pilgrim</name>
     <uri>http://example.org/</uri>
     <email>f8dy@example.com</email>
   </author>
   <contributor>
     <name>Sam Ruby</name>
   </contributor>
   <contributor>
     <name>Joe Gregorio</name>
   </contributor>
   <content>[Update: The Atom draft is finished.]</content>
 </entry>
</feed>
XML;

        $this->assertRoundTrip($xml);

    }

    /**
     * Assets whether we can parse an xml feed and serialize it again and end
     * up with a similar structure.
     *
     * If compareObject is specified, we'll also do a deep comparison of the
     * parsed atom php object.
     */
    function assertRoundTrip($xml, $compareObject = null) {

        $service = new Service();

        // Changing the default namespace prefix to an empty one, as the tests
        // will be using that and it makes it easier to do comparisons.
        $service->namespaceMap[Service::ATOM_NS] = '';

        $object = $service->parse($xml);

        if (!is_null($compareObject)) {
            $this->assertEquals($compareObject, $object);
        }

        $newXml = $service->writeValueObject($object);
        $this->assertXmlStringEqualsXmlString($newXml, $xml);

    }


}
