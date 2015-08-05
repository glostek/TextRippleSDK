<?php

	/**
	 *	TextRipple API SDK Class
	 *
	 * 	Copyright 2015 Keith Gloster
	 * 
	 *  Licensed under the Apache License, Version 2.0 (the "License");
	 *  you may not use this file except in compliance with the License.
	 *  You may obtain a copy of the License at
	 *
	 *  http://www.apache.org/licenses/LICENSE-2.0
	 *
	 *  Unless required by applicable law or agreed to in writing, software
	 *  distributed under the License is distributed on an "AS IS" BASIS,
	 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	 *  See the License for the specific language governing permissions and
	 *  limitations under the License.
	 */

	class TextRipple {

		///////////////////////////////////////////////////////////////////////////////////////////
		//
		// Variables
		//
		///////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *	@var $cid "client id"
		 */
		private $cid = "";

		/**
		 *	@var $sec "security"
		 */
		private $sec = "";

		/**
		 *	@var $key "keyword"
		 */
		private $key = "";

		/**
		 *	@var $res "response"
		 */
		public $res = "";



		///////////////////////////////////////////////////////////////////////////////////////////
		//
		// Constructor
		//
		///////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *	Constructor
		 *
		 *	@param String $cid (optional) sets/resets class variable
		 *	@param String $sec (optional) sets/resets class variable
		 *	@param String $key (optional) sets/resets class variable
		 */
		function __construct($cid="", $sec="", $key="") {

			if ($cid != "") {
				$this->cid = $cid;
			}

			if ($sec != "") {
				$this->sec = $sec;
			}

			if ($key != "") {
				$this->key = $key;
			}
		}


		///////////////////////////////////////////////////////////////////////////////////////////
		//
		// Public methods
		//
		///////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *	Reset keyword instance variable
		 *
		 *	@param String $key (required) sets/resets class variable
		 */
		public function setkey($key="") {

			$this->key = $key;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Optin to a text club
		 *
		 *	@param String $phn (required) U.S. phone number 10 digits
		 *	@param String $key (optional)
		 */
		public function optin($phn="", $key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "optin",
				"phn" => $phn,
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Send Text Message
		 *
		 *	@param String $phn (required) U.S. phone number 10 digits
		 *	@param String $txt (required) Text Message. Max length is 120/160 characters
		 *	@param String $key (optional)
		 *	@param String $sbj (optional) 
		 *
		 *  - If sbj is true, the txt max is 120 and a subject line is appended (default)
		 *	- If sbj is false, the txt max is 160 and no subject line is appended
		 */
		public function send($phn="", $txt="", $key="", $sbj=true) {

			if ($key == "") {
				$key = $this->key;
			}

			$sbj = ($sbj === true || $sbj == 'true') ? "true" : "false";

			$data = array(
				"act" => "send",
				"phn" => $phn,
				"key" => $key,
				"txt" => $txt,
				"sbj" => $sbj
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Retrieve information stored for phone number
		 *
		 *	@param String $phn (required) U.S. phone number 10 digits
		 *	@param String $key (optional) 
		 */
		public function phoneinfo($phn="", $key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "phoneinfo",
				"phn" => $phn,
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Update information stored for phone number
		 *
		 *	@param String $phn (required) U.S. phone number 10 digits
		 *	@param String $arr (required) sets/resets information
		 *	@param String $key (optional)
		 */
		public function ipush($phn="", $arr=array(), $key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "ipush",
				"key" => $key,
				"phn" => $phn
			);

			foreach ($arr as $k => $v) {
				$data[$k] = $v;
			}

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Preview number to determine wireless carrier
		 *
		 *	@param String $phn (required) U.S. phone number 10 digits
		 *	@param String $key (optional)
		 */
		public function preview($phn="", $key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "preview",
				"phn" => $phn,
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Check if keyword is available
		 *
		 *	@param String $key (required)
		 */
		public function keywordavailability($key="") {

			$data = array(
				"act" => "keywordavailability",
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Reserve keyword
		 *
		 *	@param String $key (required)
		 *	@param String $sbj (required) Subject line that prefixes all text messages
		 */
		public function reservekey($key="", $sbj="") {

			$data = array(
				"act" => "reservekey",
				"key" => $key,
				"sbj" => $sbj
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Retrieve information about a sent text message using the ticket receipt
		 *
		 *	@param String $cid (required) client id
		 */
		public function ticketinfo($ticket="") {

			$data = array(
				"act" => "ticketinfo",
				"tck" => $ticket
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Get summary information about a text club
		 *
		 *	@param String $key (optional)
		 */
		public function clubinfo($key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "clubinfo",
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}


		// ----------------------------------------------------------------------------------------


		/**
		 *	Get optin and demographic information for each live member belonging to the keyword
		 *
		 *	@param String $key (optional)
		 */
		public function members($key="") {

			if ($key == "") {
				$key = $this->key;
			}

			$data = array(
				"act" => "members",
				"key" => $key
			);

			self::call($data);

			return $this->res;
		}



		///////////////////////////////////////////////////////////////////////////////////////////
		//
		// Private methods
		//
		///////////////////////////////////////////////////////////////////////////////////////////

		/**
		 *	Curl wrapper function that makes the physical call to the server
		 *
		 *	@param Array $data (required)
		 */
		private function call($data=array()) {

			$this->err = "";
			$url = "https://{$this->cid}:{$this->sec}@gateway.textripple.com/api-v3/";
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_TIMEOUT, 30);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

			$this->res = curl_exec($curl);
		
			if (curl_errno($curl)) {
				$this->res = "There was an error connecting to the server. " . $this->res;
			}

			curl_close($curl);
		}
	}

?>