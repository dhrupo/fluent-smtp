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

namespace FluentMail\Google\Service\AndroidManagement;

class KeyguardDismissAuthAttemptEvent extends \Google\Model
{
  /**
   * @var bool
   */
  public $strongAuthMethodUsed;
  /**
   * @var bool
   */
  public $success;

  /**
   * @param bool
   */
  public function setStrongAuthMethodUsed($strongAuthMethodUsed)
  {
    $this->strongAuthMethodUsed = $strongAuthMethodUsed;
  }
  /**
   * @return bool
   */
  public function getStrongAuthMethodUsed()
  {
    return $this->strongAuthMethodUsed;
  }
  /**
   * @param bool
   */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /**
   * @return bool
   */
  public function getSuccess()
  {
    return $this->success;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeyguardDismissAuthAttemptEvent::class, 'Google_Service_AndroidManagement_KeyguardDismissAuthAttemptEvent');