<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace FluentMail\Google\Service\CloudLifeSciences;

class Mount extends \Google\Model
{
  /**
   * @var string
   */
  public $disk;
  /**
   * @var string
   */
  public $path;
  /**
   * @var bool
   */
  public $readOnly;

  /**
   * @param string
   */
  public function setDisk($disk)
  {
    $this->disk = $disk;
  }
  /**
   * @return string
   */
  public function getDisk()
  {
    return $this->disk;
  }
  /**
   * @param string
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * @param bool
   */
  public function setReadOnly($readOnly)
  {
    $this->readOnly = $readOnly;
  }
  /**
   * @return bool
   */
  public function getReadOnly()
  {
    return $this->readOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Mount::class, 'Google_Service_CloudLifeSciences_Mount');