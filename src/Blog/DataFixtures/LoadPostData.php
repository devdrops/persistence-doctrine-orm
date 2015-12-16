<?php

namespace Blog\DataFixtures;

use Blog\Entity\Post;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Post fixtures.
 *
 * @author Davi Marcondes Moreira (@devdrops) <davi.marcondes.moreira@gmail.com>
 */
class LoadPostData implements FixtureInterface
{    
    /**
     * Number of posts to add.
     *
     * @var integer
     */
    const NUMBER_OF_POSTS = 10;
    
    /**
     * @param \Blog\DataFixtures\ObjectManager $objectManager
     */
    public function load(ObjectManager $objectManager)
    {
        for ($count = 1; $count <= self::NUMBER_OF_POSTS; $count++) {
            $post = new Post();
            
            $post
                ->setTitle(sprintf('Blog post number %d', $count))
                ->setBody('Evil Dead ipsum dolor sit amet et manor dawn voluptate eu ut.')
                ->setPublicationDate(
                    new \DateTime(sprintf('-%d days', self::NUMBER_OF_POSTS - $count))
                );
            
            $objectManager->persist($post);
        }
        
        $objectManager->flush();
    }
}
