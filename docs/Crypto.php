<?php
/**
 * Class providing cipher algorithms
 */
class Crypto\Cipher {
    const MODE_ECB = 1;
    const MODE_CBC = 2;
    const MODE_CFB = 3;
    const MODE_OFB = 4;
    const MODE_CTR = 5;
    const MODE_GCM = 6;
    const MODE_CCM = 7;
    const MODE_XTS = 65537;
    
    /**
     * Returns cipher algorithms
     * @param bool $aliases
     * @param string $prefix
     * @return string
     */
    public static function getAlgorithms($aliases = false, $prefix = null) {}
    
    /**
     * Finds out whether algorithm exists
     * @param string $algorithm
     * @return bool
     */
    public static function hasAlgorithm($algorithm) {}
    
    /**
     * Finds out whether the cipher mode is defined in the used OpenSSL library
     * @param int $mode
     * @return bool
     */
    public static function hasMode($mode) {}
    
    /**
     * Cipher magic method for calling static methods
     * @param string $name
     * @param array $arguments
     */
    public static function __callStatic($name, $arguments) {}
    
    /**
     * Cipher constructor
     * @param string $algorithm
     * @param int $mode
     * @param string $key_size
     */
    public function __construct($algorithm, $mode = NULL, $key_size = NULL) {}
    
    /**
     * Returns cipher algorithm string
     * @return string
     */
    public function getAlgorithmName() {}
    
    /**
     * Initializes cipher encryption
     * @param string $key
     * @param string $iv
     * @return bool
     */
    public function encryptInit($key, $iv = null) {}
    
    /**
     * Updates cipher encryption
     * @param string $data
     * @return string
     */
    public function encryptUpdate($data) {}
    
    /**
     * Finalizes cipher encryption
     * @return string
     */
    public function encryptFinish() {}
    
    /**
     * Encrypts text to ciphertext
     * @param string $data
     * @param string $key
     * @param string $iv
     * @return string
     */
    public function encrypt($data, $key, $iv = null) {}
    
    /**
     * Initializes cipher decryption
     * @param string $key
     * @param string $iv
     * @return null
     */
    public function decryptInit($key, $iv = null) {}
    
    /**
     * Updates cipher decryption
     * @param string $data
     * @return string
     */
    public function decryptUpdate($data) {}
    
    /**
     * Finalizes cipher decryption
     * @return string
     */
    public function decryptFinish() {}
    
    /**
     * Decrypts ciphertext to decrypted text
     * @param string $data
     * @param string $key
     * @param string $iv
     * @return string
     */
    public function decrypt($data, $key, $iv = null) {}
    
    /**
     * Returns cipher block size
     * @return int
     */
    public function getBlockSize() {}
    
    /**
     * Returns cipher key length
     * @return int
     */
    public function getKeyLength() {}
    
    /**
     * Returns cipher IV length
     * @return int
     */
    public function getIVLength() {}
    
    /**
     * Returns cipher mode
     * @return int
     */
    public function getMode() {}
    
    /**
     * Returns authentication tag
     * @return string
     */
    public function getTag() {}
    
    /**
     * Sets authentication tag
     * @param string $tag
     * @return bool
     */
    public function setTag($tag) {}
    
    /**
     * Set authentication tag length
     * @param int $tag_length
     * @return bool
     */
    public function setTagLength($tag_length) {}
    
    /**
     * Sets additional application data for authenticated encryption
     * @param string $aad
     * @return bool
     */
    public function setAAD($aad) {}
    
}

/**
 * Exception class for cipher errors
 */
class Crypto\CipherException extends Exception {
    
    /**
     * Cipher '%s' algorithm not found
     */
    const ALGORITHM_NOT_FOUND = 1;
    
    /**
     * Cipher static method '%s' not found
     */
    const STATIC_METHOD_NOT_FOUND = 2;
    
    /**
     * Cipher static method %s can accept max two arguments
     */
    const STATIC_METHOD_TOO_MANY_ARGS = 3;
    
    /**
     * Cipher mode not found
     */
    const MODE_NOT_FOUND = 4;
    
    /**
     * Cipher mode %s is not available in installed OpenSSL library
     */
    const MODE_NOT_AVAILABLE = 5;
    
    /**
     * The authentication is not supported for %s cipher mode
     */
    const AUTHENTICATION_NOT_SUPPORTED = 6;
    
    /**
     * Invalid length of key for cipher '%s' algorithm (required length: %d)
     */
    const KEY_LENGTH_INVALID = 7;
    
    /**
     * Invalid length of initial vector for cipher '%s' algorithm (required length: %d)
     */
    const IV_LENGTH_INVALID = 8;
    
    /**
     * AAD setter has to be called before encryption or decryption
     */
    const AAD_SETTER_FORBIDDEN = 9;
    
    /**
     * AAD setter failed
     */
    const AAD_SETTER_FAILED = 10;
    
    /**
     * AAD length can't exceed max integer length
     */
    const AAD_LENGTH_HIGH = 11;
    
    /**
     * Tag getter has to be called after encryption
     */
    const TAG_GETTER_FORBIDDEN = 12;
    
    /**
     * Tag setter has to be called before decryption
     */
    const TAG_SETTER_FORBIDDEN = 13;
    
    /**
     * Tag getter failed
     */
    const TAG_GETTER_FAILED = 14;
    
    /**
     * Tag setter failed
     */
    const TAG_SETTER_FAILED = 15;
    
    /**
     * Tag length setter has to be called before encryption
     */
    const TAG_LENGTH_SETTER_FORBIDDEN = 16;
    
    /**
     * Tag length can't be lower than 32 bits (4 characters)
     */
    const TAG_LENGTH_LOW = 17;
    
    /**
     * Tag length can't exceed 128 bits (16 characters)
     */
    const TAG_LENGTH_HIGH = 18;
    
    /**
     * Tag verifycation failed
     */
    const TAG_VERIFY_FAILED = 19;
    
    /**
     * Initialization of cipher algorithm failed
     */
    const INIT_ALG_FAILED = 20;
    
    /**
     * Initialization of cipher context failed
     */
    const INIT_CTX_FAILED = 21;
    
    /**
     * Cipher object is already used for decryption
     */
    const INIT_ENCRYPT_FORBIDDEN = 22;
    
    /**
     * Cipher object is already used for encryption
     */
    const INIT_DECRYPT_FORBIDDEN = 23;
    
    /**
     * Updating of cipher failed
     */
    const UPDATE_FAILED = 24;
    
    /**
     * Cipher object is not initialized for encryption
     */
    const UPDATE_ENCRYPT_FORBIDDEN = 25;
    
    /**
     * Cipher object is not initialized for decryption
     */
    const UPDATE_DECRYPT_FORBIDDEN = 26;
    
    /**
     * Finalizing of cipher failed
     */
    const FINISH_FAILED = 27;
    
    /**
     * Cipher object is not initialized for encryption
     */
    const FINISH_ENCRYPT_FORBIDDEN = 28;
    
    /**
     * Cipher object is not initialized for decryption
     */
    const FINISH_DECRYPT_FORBIDDEN = 29;
    
    /**
     * Input data length can't exceed max integer length
     */
    const INPUT_DATA_LENGTH_HIGH = 30;
    
}

/**
 * Class providing hash algorithms
 */
class Crypto\Hash {
    /**
     * Returns hash algorithms
     * @param bool $aliases
     * @param string $prefix
     * @return string
     */
    public static function getAlgorithms($aliases = false, $prefix = null) {}
    
    /**
     * Finds out whether algorithm exists
     * @param string $algorithm
     * @return bool
     */
    public static function hasAlgorithm($algorithm) {}
    
    /**
     * Hash magic method for calling static methods
     * @param string $name
     * @param array $arguments
     */
    public static function __callStatic($name, $arguments) {}
    
    /**
     * Hash constructor
     * @param string $algorithm
     */
    public function __construct($algorithm) {}
    
    /**
     * Returns hash algorithm string
     * @return string
     */
    public function getAlgorithmName() {}
    
    /**
     * Updates hash
     * @param string $data
     * @return null
     */
    public function update($data) {}
    
    /**
     * Return hash digest in raw foramt
     * @return string
     */
    public function digest() {}
    
    /**
     * Return hash digest in hex format
     * @return string
     */
    public function hexdigest() {}
    
    /**
     * Returns hash block size
     * @return int
     */
    public function getBlockSize() {}
    
    /**
     * Returns hash size
     * @return int
     */
    public function getSize() {}
    
}

/**
 * Exception class for hash errors
 */
class Crypto\HashException extends Exception {
    
    /**
     * Hash algorithm '%s' not found
     */
    const ALGORITHM_NOT_FOUND = 1;
    
    /**
     * Hash static method '%s' not found
     */
    const STATIC_METHOD_NOT_FOUND = 2;
    
    /**
     * Hash static method %s can accept max one argument
     */
    const STATIC_METHOD_TOO_MANY_ARGS = 3;
    
    /**
     * Initialization of hash failed
     */
    const INIT_FAILED = 4;
    
    /**
     * Updating of hash context failed
     */
    const UPDATE_FAILED = 5;
    
    /**
     * Creating of hash digest failed
     */
    const DIGEST_FAILED = 6;
    
    /**
     * Input data length can't exceed max integer length
     */
    const INPUT_DATA_LENGTH_HIGH = 7;
    
}

/**
 * Abstract class for MAC subclasses
 */
abstract class Crypto\MAC extends Crypto\Hash {
    /**
     * Create a MAC (used by MAC subclasses - HMAC and CMAC)
     * @param string $algorithm
     * @param string $key
     */
    public function __construct($algorithm, $key) {}
    
}

/**
 * Exception class for MAC errors
 */
class Crypto\MACException extends Crypto\HashException {
    
    /**
     * MAC algorithm '%s' not found
     */
    const ALGORITHM_NOT_FOUND = 1;
    
    /**
     * The key length for MAC is invalid
     */
    const KEY_LENGTH_INVALID = 2;
    
}

/**
 * Class providing HMAC functionality
 */
class Crypto\HMAC extends Crypto\MAC {
}

/**
 * Class providing CMAC functionality
 */
class Crypto\CMAC extends Crypto\MAC {
}

/**
 * Class for base64 encoding and docoding
 */
class Crypto\Base64 {
    /**
     * Encodes string $data to base64 encoding
     * @param string $data
     * @return string
     */
    public function encode($data) {}
    
    /**
     * Decodes base64 string $data to raw encoding
     * @param string $data
     * @return string
     */
    public function decode($data) {}
    
    /**
     * Base64 constructor
     */
    public function __construct() {}
    
    /**
     * Encodes block of characters from $data and saves the reminder of the last block
     * to the encoding context
     * @param string $data
     */
    public function encode($data) {}
    
    /**
     * Encodes characters that left in the encoding context
     */
    public function encodeFinish() {}
    
    /**
     * Decodes block of characters from $data and saves the reminder of the last block
     * to the encoding context
     * @param string $data
     */
    public function decode($data) {}
    
    /**
     * Decodes characters that left in the encoding context
     */
    public function decodeFinish() {}
    
}

/**
 * Exception class for base64 errors
 */
class Crypto\Base64Exception extends Exception {
    
    /**
     * The object is already used for decoding
     */
    const ENCODE_UPDATE_FORBIDDEN = 1;
    
    /**
     * The object has not been intialized for encoding
     */
    const ENCODE_FINISH_FORBIDDEN = 2;
    
    /**
     * The object is already used for encoding
     */
    const DECODE_UPDATE_FORBIDDEN = 3;
    
    /**
     * The object has not been intialized for decoding
     */
    const DECODE_FINISH_FORBIDDEN = 4;
    
    /**
     * Base64 decoded string does not contain valid characters
     */
    const DECODE_UPDATE_FAILED = 5;
    
    /**
     * Input data length can't exceed max integer length
     */
    const INPUT_DATA_LENGTH_HIGH = 6;
    
}

/**
 * Class for generating random numbers
 */
class Crypto\Rand {
    /**
     * Generates pseudo random bytes
     * @param int $num
     * @param bool $must_be_strong
     * @param bool $returned_strong_result
     * @return string
     */
    public static function generate($num, $must_be_strong = true, &$returned_strong_result = true) {}
    
    /**
     * Mixes bytes in $buf into PRNG state
     * @param string $buf
     * @param float $entropy
     * @return null
     */
    public static function seed($buf, $entropy = (float) strlen($buf)) {}
    
    /**
     * Cleans up PRNG state
     * @return null
     */
    public static function cleanup() {}
    
    /**
     * Reads a number of bytes from file $filename and adds them to the PRNG. If
     * max_bytes is non-negative, up to to max_bytes are read; if $max_bytes is
     * negative, the complete file is read
     * @param string $filename
     * @param int $max_bytes
     * @return int
     */
    public static function loadFile($filename, $max_bytes = -1) {}
    
    /**
     * Writes a number of random bytes (currently 1024) to file $filename which can be
     * used to initializethe PRNG by calling Crypto\Rand::loadFile() in a later session
     * @param string $filename
     * @return int
     */
    public static function writeFile($filename) {}
    
}

/**
 * Exception class for rand errors
 */
class Crypto\RandException extends Exception {
    
    /**
     * The PRNG state is not yet unpredictable
     */
    const GENERATE_PREDICTABLE = 1;
    
    /**
     * The bytes written were generated without appropriate seed
     */
    const FILE_WRITE_PREDICTABLE = 2;
    
    /**
     * The requested number of bytes is too high
     */
    const REQUESTED_BYTES_NUMBER_TOO_HIGH = 3;
    
    /**
     * The supplied seed length is too high
     */
    const SEED_LENGTH_TOO_HIGH = 4;
    
}

