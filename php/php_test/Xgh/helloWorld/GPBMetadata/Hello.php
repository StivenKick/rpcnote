<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: hello.proto

namespace GPBMetadata;

class Hello
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab7010a0b68656c6c6f2e70726f746f120a68656c6c6f576f726c64221c" .
            "0a0c48656c6c6f52657175657374120c0a046e616d65180120012809222b" .
            "0a0a48656c6c6f5265706c79120f0a076d65737361676518012001280912" .
            "0c0a0474696d6518022001280932490a0548656c6c6f12400a0a48656c6c" .
            "6f576f726c6412182e68656c6c6f576f726c642e48656c6c6f5265717565" .
            "73741a162e68656c6c6f576f726c642e48656c6c6f5265706c7922006206" .
            "70726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
