<?php

namespace GuzzleHttp;

use Psr\Http\Message\MessageInterface;

final class BodySummarizer implements BodySummarizerInterface
{
    public function __construct(private readonly ?int $truncateAt = null)
    {
    }

    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string
    {
        return $this->truncateAt === null
            ? \GuzzleHttp\Psr7\Message::bodySummary($message)
            : \GuzzleHttp\Psr7\Message::bodySummary($message, $this->truncateAt);
    }
}
