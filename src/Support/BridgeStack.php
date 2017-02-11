<?php

namespace FindBrok\WatsonBridge\Support;

use Illuminate\Support\Collection;

class BridgeStack extends Collection
{
    /**
     * The Carpenter instance.
     *
     * @var Carpenter
     */
    protected $carpenter;

    /**
     * BridgeStack constructor.
     *
     * @param Carpenter $carpenter
     * @param array     $items
     */
    public function __construct(Carpenter $carpenter, $items = [])
    {
        $this->carpenter = $carpenter;

        parent::__construct($items);
    }

    /**
     * Mounts a Bridge on the stack.
     *
     * @param string $name
     * @param string $credential
     * @param string $service
     * @param string $authMethod
     *
     * @return $this
     */
    public function mountBridge($name, $credential = null, $service = null, $authMethod = null)
    {
    }
}
