<?php

/**
 * @file
 * Contains TwitterOAuthTest
 */

namespace Drupal\Tests\twitteroauth\Unit;

use Drupal\Tests\UnitTestCase;
use Abraham\TwitterOAuth\TwitterOAuth;

/**
 * Test the twitteroauth composer integration.
 *
 * @requires module twitteroauth
 * @group twitteroauth
 */
class TwitterOAuthTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
  }

  /**
   * {@inheritdoc}
   */
  public function testNamespace() {
    $oauth = new TwitterOAuth("a", "b");
    $this->assertInstanceOf('\Abraham\TwitterOAuth\TwitterOAuth', $oauth);
  }
}
