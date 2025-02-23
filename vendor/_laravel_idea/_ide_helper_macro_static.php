<?php //a1da95a12b6f59b2e8d93121c91f7d27
/** @noinspection all */

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;
    
    /**
     * @method static Model|HigherOrderTapProxy createOrRestore(array $attributes = [], array $values = [])
     * @method static $this onlyTrashed()
     * @method static int restore()
     * @method static Model|HigherOrderTapProxy restoreOrCreate(array $attributes = [], array $values = [])
     * @method static $this withTrashed($withTrashed = true)
     * @method static $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     */
    class Request {}
}
