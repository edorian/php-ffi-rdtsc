<?php

function rdtsc(): int {
    static $ffi = null;
    if ($ffi === null) {
        $ffi = FFI::cdef(
            "int64_t rdtsc();",
            __DIR__ . "/build/rdtsc.so"
        );
    }
    /** @noinspection PhpUndefinedMethodInspection */
    return $ffi->rdtsc();
}
