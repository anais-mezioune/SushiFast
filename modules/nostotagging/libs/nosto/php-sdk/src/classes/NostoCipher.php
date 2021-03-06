<?php
/**
 * Copyright (c) 2015, Nosto Solutions Ltd
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 * this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 * this list of conditions and the following disclaimer in the documentation
 * and/or other materials provided with the distribution.
 *
 * 3. Neither the name of the copyright holder nor the names of its contributors
 * may be used to endorse or promote products derived from this software without
 * specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Nosto Solutions Ltd <contact@nosto.com>
 * @copyright 2015 Nosto Solutions Ltd
 * @license http://opensource.org/licenses/BSD-3-Clause BSD 3-Clause
 */

/**
 * Helper class for encrypting/decrypting strings.
 */
class NostoCipher
{
	/**
	 * @var NostoCryptBase the crypt library instance.
	 */
	private $_crypt;

	/**
	 * Constructor.
	 */
	public function __construct()
	{
		$this->_crypt = new NostoCryptAES(CRYPT_AES_MODE_CBC);
	}

	/**
	 * Sets the secret to use for encryption/decryption.
	 *
	 * @param string $secret the secret.
	 */
	public function setSecret($secret)
	{
		$this->_crypt->setKey($secret);
	}

	/**
	 * Sets the initialization vector to use for encryption/decryption.
	 *
	 * @param string $iv the initialization vector.
	 */
	public function setIV($iv)
	{
		$this->_crypt->setIV($iv);
	}

	/**
	 * Encrypts the string an returns iv.encrypted.
	 *
	 * @param string $plaintext the string to encrypt.
	 * @return string the encrypted string.
	 */
	public function encrypt($plaintext)
	{
		return $this->_crypt->encrypt($plaintext);
	}

	/**
	 * Decrypts the string and returns the plain text.
	 *
	 * @param string $ciphertext the encrypted cipher.
	 * @return string the decrypted plain text string.
	 */
	public function decrypt($ciphertext)
	{
		return $this->_crypt->decrypt($ciphertext);
	}
}
