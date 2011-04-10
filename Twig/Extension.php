<?php

/**
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Twig;

use FOS\CommentBundle\Model\VotableCommentInterface;

class Extension extends \Twig_Extension
{
    public function getTests()
    {
        return array(
            'fos_votable'        => new \Twig_Test_Method($this, 'isVotable'),
        );
    }

    public function isVotable($value)
    {
        if (!is_object($value)) {
            return false;
        }

        return ($value instanceof VotableCommentInterface);
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'fos_comment';
    }
}