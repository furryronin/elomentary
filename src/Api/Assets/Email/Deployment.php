<?php

/**
 * @file
 * Contains \Eloqua\Api\Assets\Email\Deployment.
 */

namespace Eloqua\Api\Assets\Email;

use Eloqua\Api\AbstractApi;
use Eloqua\Api\CreatableInterface;
use Eloqua\Api\ReadableInterface;
use Eloqua\Api\SearchableInterface;
use Eloqua\Exception\InvalidArgumentException;

/**
 * Eloqua e-mail group.
 */
class Deployment extends AbstractApi implements CreatableInterface, ReadableInterface, SearchableInterface {

  /**
   * {@inheritdoc}
   */
  public function search($search, array $options = array()) {
    return $this->get('assets/email/deployments', array_merge(array(
      'search' => $search,
    ), $options));
  }

  /**
   * {@inheritdoc}
   */
  public function show($id, $depth = 'complete', $extensions = null) {
    return $this->get('assets/email/deployment/' . rawurlencode($id), array(
      'depth' => $depth,
      'extensions' => $extensions,
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function create($data) {
    // Validate the request before sending it.
    $required = array('name', 'email', 'contacts', 'type');

    foreach ($required as $key) {
      if (!array_key_exists($key, $data) || empty($data[$key])) {
        throw new InvalidArgumentException("You must specify a non-empty value for $key.");
      }
    }

    return $this->post('assets/email/deployment', $data);
  }


}
