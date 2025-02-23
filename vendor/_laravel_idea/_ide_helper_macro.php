<?php //791d1fea07c45746ed9c50a77799e7b8
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;
    
    /**
     * @method Model|HigherOrderTapProxy createOrRestore(array $attributes = [], array $values = [])
     * @method $this onlyTrashed()
     * @method int restore()
     * @method Model|HigherOrderTapProxy restoreOrCreate(array $attributes = [], array $values = [])
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}

namespace Illuminate\Redis {
    
    /**
     * @mixin \Illuminate\Redis\Connections\PhpRedisConnection
     * @mixin \Redis
     */
    class RedisManager {}
}
