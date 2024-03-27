<?php

namespace Outl1ne\NovaOpenAI\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Outl1ne\NovaOpenAI\Capabilities\Embeddings\Embeddings embeddings()
 * @method static \Outl1ne\NovaOpenAI\Capabilities\Chat\Chat chat()
 * @method static \Outl1ne\NovaOpenAI\Capabilities\Assistants\Assistants assistants()
 * @method static \Outl1ne\NovaOpenAI\Capabilities\Threads\Threads threads()
 * @method static \Illuminate\Http\Client\PendingRequest http()
 *
 * @see \Outl1ne\NovaOpenAI\OpenAI
 */
final class OpenAI extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'nova-openai';
    }
}
