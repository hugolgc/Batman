<?php

namespace models;

use models\base\SQL;

class GalleryModel extends SQL
{
  public function __construct()
  {
    parent::__construct('images', 'id');
  }
}
