<?php

namespace Sf2qotd\WebsiteBundle\Extension;

class QuoteTwig extends \Twig_Extension
{
    /**
     * Returns the filters
     * 
     * @see Twig_Extension::getFilters()
     */
    public function getFilters()
    {
        return array(
            'embellish' => new \Twig_Filter_Method($this, 'embellish', array('is_safe' => array('html'))),
        );
    }

    /**
     * Embellish the quote with a random font color for the author
     * 
     * @param string $quoteString
     * 
     * @return string
     */
    public function embellish($quoteString)
    {
        $matches = array();
        preg_match_all('/(<[A-Za-z0-9 -_]+>)[ :]?/', $quoteString, $matches);

        if (!isset($matches[1]))
            return $quoteString;

        $names = array_unique($matches[1]);

        foreach ($names as $name)
        {
            $rColor      = rand(0, 255);
            $gColor      = rand(0, 255);
            $bColor      = rand(0, 255);
            $newName     = $name;
            $newName     = str_replace('<', '&lt;', $newName);
            $newName     = str_replace('>', '&gt;', $newName);
            $replacement = "<font color=\"rgb($rColor,$gColor,$bColor)\">$newName</font>";
            $quoteString = preg_replace("/$name/", $replacement, $quoteString);
        }
        return $quoteString;
    }

    /**
     * Returns the extension name
     * 
     * @see Twig_ExtensionInterface::getName()
     */
    public function getName()
    {
        return 'quote_extension';
    }
}