<?php
/**
 * Pure-PHP implementation of AES.
 *
 * Uses mcrypt, if available/possible, and an internal implementation, otherwise.
 *
 * PHP versions 5
 *
 * If {@link NostoCryptAES::setKeyLength() setKeyLength()} isn't called, it'll be calculated from
 * {@link NostoCryptAES::setKey() setKey()}.  ie. if the key is 128-bits, the key length will be 128-bits.  If it's 136-bits
 * it'll be null-padded to 192-bits and 192 bits will be the key length until {@link NostoCryptAES::setKey() setKey()}
 * is called, again, at which point, it'll be recalculated.
 *
 * Since NostoCryptAES extends NostoCryptRijndael, some functions are available to be called that, in the context of AES, don't
 * make a whole lot of sense.  {@link NostoCryptAES::setBlockLength() setBlockLength()}, for instance.  Calling that function,
 * however possible, won't do anything (AES has a fixed block length whereas Rijndael has a variable one).
 *
 * Here's a short example of how to use this library:
 * <code>
 * <?php
 *
 *    $aes = new NostoCryptAES();
 *
 *    $aes->setKey('abcdefghijklmnop');
 *
 *    $size = 10 * 1024;
 *    $plaintext = '';
 *    for ($i = 0; $i < $size; $i++) {
 *        $plaintext.= 'a';
 *    }
 *
 *    echo $aes->decrypt($aes->encrypt($plaintext));
 * ?>
 * </code>
 *
 * LICENSE: Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @category   Crypt
 * @package    NostoCryptAES
 * @author     Jim Wigginton <terrafrost@php.net>
 * @copyright  MMVIII Jim Wigginton
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @link       http://phpseclib.sourceforge.net
 */

/**
 * Encrypt / decrypt using the Counter mode.
 *
 * Set to -1 since that's what Crypt/Random.php uses to index the CTR mode.
 *
 * @link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Counter_.28CTR.29
 */
if (!defined('CRYPT_AES_MODE_CTR')) define('CRYPT_AES_MODE_CTR', CRYPT_MODE_CTR);
/**
 * Encrypt / decrypt using the Electronic Code Book mode.
 *
 * @link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Electronic_codebook_.28ECB.29
 */
if (!defined('CRYPT_AES_MODE_ECB')) define('CRYPT_AES_MODE_ECB', CRYPT_MODE_ECB);
/**
 * Encrypt / decrypt using the Code Book Chaining mode.
 *
 * @link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Cipher-block_chaining_.28CBC.29
 */
if (!defined('CRYPT_AES_MODE_CBC')) define('CRYPT_AES_MODE_CBC', CRYPT_MODE_CBC);
/**
 * Encrypt / decrypt using the Cipher Feedback mode.
 *
 * @link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Cipher_feedback_.28CFB.29
 */
if (!defined('CRYPT_AES_MODE_CFB')) define('CRYPT_AES_MODE_CFB', CRYPT_MODE_CFB);
/**
 * Encrypt / decrypt using the Cipher Feedback mode.
 *
 * @link http://en.wikipedia.org/wiki/Block_cipher_modes_of_operation#Output_feedback_.28OFB.29
 */
if (!defined('CRYPT_AES_MODE_OFB')) define('CRYPT_AES_MODE_OFB', CRYPT_MODE_OFB);

/**
 * Toggles the internal implementation
 */
if (!defined('CRYPT_AES_MODE_INTERNAL')) define('CRYPT_AES_MODE_INTERNAL', CRYPT_MODE_INTERNAL);
/**
 * Toggles the mcrypt implementation
 */
if (!defined('CRYPT_AES_MODE_MCRYPT')) define('CRYPT_AES_MODE_MCRYPT', CRYPT_MODE_MCRYPT);

/**
 * Pure-PHP implementation of AES.
 *
 * @author  Jim Wigginton <terrafrost@php.net>
 * @version 0.1.0
 * @package CryptAES
 */
class NostoCryptAES extends NostoCryptRijndael
{
	/**
	 * The namespace used by the cipher for its constants.
	 *
	 * @see NostoCryptBase::const_namespace
	 * @var String
	 */
	protected $constNamespace = 'AES';

	/**
	 * Default Constructor.
	 *
	 * Determines whether or not the mcrypt extension should be used.
	 *
	 * $mode could be:
	 *
	 * - CRYPT_AES_MODE_ECB
	 *
	 * - CRYPT_AES_MODE_CBC
	 *
	 * - CRYPT_AES_MODE_CTR
	 *
	 * - CRYPT_AES_MODE_CFB
	 *
	 * - CRYPT_AES_MODE_OFB
	 *
	 * If not explicitly set, CRYPT_AES_MODE_CBC will be used.
	 *
	 * @see NostoCryptRijndael::__construct()
	 * @see NostoCryptBase::__construct()
	 * @param optional Integer $mode
	 */
	public function __construct($mode = CRYPT_AES_MODE_CBC)
	{
		parent::__construct($mode);
	}

	/**
	 * Dummy function
	 *
	 * Since CryptAES extends CryptRijndael, this function is, technically, available, but it does not do anything.
	 *
	 * @see NostoCryptRijndael::setBlockLength()
	 * @param Integer $length
	 */
	public function setBlockLength($length)
	{
	}
}
