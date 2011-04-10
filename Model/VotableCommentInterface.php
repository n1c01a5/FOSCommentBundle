<?php

/**
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Model;

/**
 * A signed comment is bound to a FOS\UserBundle User model.
 */
interface VotableCommentInterface extends CommentInterface
{
    /**
     * Sets the score of the comment
     *
     * @param integer $score
     */
    function setScore($score);

    /**
     * Returns the current score of the comment
     *
     * @return integer
     */
    function getScore();
}
