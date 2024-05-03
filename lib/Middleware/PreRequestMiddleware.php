<?php

declare(strict_types=1);

namespace KauflandSellerApi\Middleware;

use Psr\Http\Message\RequestInterface;

final class PreRequestMiddleware
{
    public function __construct(
        private string $clientKey,
        private string $secretKey
    ) {
    }

    public function __invoke(callable $handler)
    {
        return function (RequestInterface $request, $options) use ($handler) {
            $method = $request->getMethod();
            $uri = (string) $request->getUri();
            $body = (string) $request->getBody();
            $timestamp = time();

            $signature = $this->requestSignature(
                $method,
                $uri,
                $body,
                $timestamp,
                $this->secretKey
            );

            $request = $request->withHeader('Shop-Timestamp', $timestamp);
            $request = $request->withHeader('Shop-Client-Key', $this->clientKey);
            $request = $request->withHeader('Shop-Signature', $signature);

            return $handler($request, $options);
        };
    }

    private function requestSignature(
        string $method,
        string $uri,
        string $body,
        int $timestamp,
        string $secretKey
    ): string {
        $msg = implode("\n", [
            strtoupper($method),
            $uri,
            $body,
            $timestamp
        ]);

        return hash_hmac('sha256', $msg, $secretKey);
    }
}
