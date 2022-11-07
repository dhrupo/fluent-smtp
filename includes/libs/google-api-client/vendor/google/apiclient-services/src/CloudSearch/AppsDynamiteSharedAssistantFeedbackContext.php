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

namespace FluentMail\Google\Service\CloudSearch;

class AppsDynamiteSharedAssistantFeedbackContext extends \Google\Collection
{
  protected $collection_key = 'feedbackChips';
  protected $feedbackChipsType = AppsDynamiteSharedAssistantFeedbackContextFeedbackChip::class;
  protected $feedbackChipsDataType = 'array';
  /**
   * @var string
   */
  public $thumbsFeedback;

  /**
   * @param AppsDynamiteSharedAssistantFeedbackContextFeedbackChip[]
   */
  public function setFeedbackChips($feedbackChips)
  {
    $this->feedbackChips = $feedbackChips;
  }
  /**
   * @return AppsDynamiteSharedAssistantFeedbackContextFeedbackChip[]
   */
  public function getFeedbackChips()
  {
    return $this->feedbackChips;
  }
  /**
   * @param string
   */
  public function setThumbsFeedback($thumbsFeedback)
  {
    $this->thumbsFeedback = $thumbsFeedback;
  }
  /**
   * @return string
   */
  public function getThumbsFeedback()
  {
    return $this->thumbsFeedback;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsDynamiteSharedAssistantFeedbackContext::class, 'Google_Service_CloudSearch_AppsDynamiteSharedAssistantFeedbackContext');