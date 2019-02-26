<?php

declare(strict_types=1);

namespace GC\Player\Handler;

use GC\App\Aware\GameAwareTrait;
use GC\App\Aware\HandlerAwareTrait;
use GC\App\Aware\RepositoryAwareTrait;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class PlayerExtractorBuildHandler implements RequestHandlerInterface
{
    use HandlerAwareTrait;
    use GameAwareTrait;
    use RepositoryAwareTrait;

    public const NAME = 'player.extractor.build';

    /**
     * @param \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return $this->renderResponse('@Player/playerExtractorBuild.twig', []);
    }
}