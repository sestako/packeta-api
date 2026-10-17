<?php

declare(strict_types=1);

namespace PTB\PacketaApi\Packet;

use PTB\PacketaApi\Common\RequestInterface;

readonly class CancelPacketRequest implements RequestInterface
{
	private const string METHOD = 'cancelPacket';

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
