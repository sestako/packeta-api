<?php

declare(strict_types=1);

namespace PTB\PacketaApi\Packet;

use PTB\PacketaApi\Common\RequestInterface;

readonly class GetPacketCourierNumberRequest implements RequestInterface
{
	private const string METHOD = 'packetCourierNumberV2';

	public function __construct(
		protected int $packetId,
	) {
	}

	public function getMethod(): string
	{
		return self::METHOD;
	}

	public function jsonSerialize(): array
	{
		return [
			'packetId' => $this->packetId,
		];
	}
}
