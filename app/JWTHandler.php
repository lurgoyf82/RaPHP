<?php

    namespace App;

    class JWTHandler
    {
        private static $secretKey = 'yourSecretKey'; // Change this to a strong secret key
        private static $algorithm = 'HS256'; // HMAC SHA-256

        public static function encode(array $payload): string
        {
            $header = json_encode(['typ' => 'JWT', 'alg' => self::$algorithm]);
            $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

            $payload['exp'] = time() + 3600; // 1 hour expiration
            $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode(json_encode($payload)));

            $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, self::$secretKey, true);
            $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

            return $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
        }

        public static function decode(string $jwt)
        {
            list($headerEncoded, $payloadEncoded, $signatureEncoded) = explode('.', $jwt);

            $payload = json_decode(base64_decode(str_replace(['-', '_'], ['+', '/'], $payloadEncoded)), true);

            // Verify the signature
            $expectedSignature = hash_hmac('sha256', "$headerEncoded.$payloadEncoded", self::$secretKey, true);
            $expectedSignatureEncoded = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($expectedSignature));

            if ($expectedSignatureEncoded !== $signatureEncoded) {
                return null; // Signature verification failed
            }

            return $payload;
        }
    }
