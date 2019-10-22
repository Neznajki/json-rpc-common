<?php


namespace JsonRpcServerCommon\Contract;


interface PasswordEncryptInterface
{
    const SALT = 'none';

    public function encryptPassword(string $rawPassword, int $generationTime): string;
}
